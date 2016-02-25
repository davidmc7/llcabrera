<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Sistema;
use App\Categoria;
use App\Multa;
use App\Comision;
use App\Socio;
use App\Lectura;

class LecturasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->estado = array('1'=>'HABILITADO', '0'=>'DESHABILITADO');
        $this->meses = array('1' => 'Enero', '2' => 'Febrero', '3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Deciembre');
        $this->anios = array('2016' => '2016', '2017' => '2017');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lecturasAnteriores = Lectura::BuscarSocioLecturasAnteriores($request->socio_id)->orderBy('id', 'ASC')->get();
        $lecturasActuales = Lectura::BuscarSocioLecturasActuales($request->socio_id)->orderBy('id', 'ASC')->get();

        $socio = Socio::find($request->socio_id);
        $comisiones = Comision::where('estado', '1')->get();
        $multas = Multa::where('estado', '1')
                    ->where('categoria_id', $socio->categoria_id)
                    ->get();

        /*$lecturasActuales->each(function($lecturasActuales){
            $lecturasActuales->socio;
            $lecturasActuales->tarifa;
        });*/
        
        return view('usuario.lectura.index')
                ->with('estado', $this->estado)
                ->with('meses', $this->meses)
                ->with('lecturasAnteriores', $lecturasAnteriores)
                ->with('lecturasActuales', $lecturasActuales)
                ->with('comisiones', $comisiones)
                ->with('socio', $socio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.lectura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $comisiones = Comision::where('estado', '1')->get();
        $multas = Multa::where('estado', '1')->where('categoria_id', $request->categoria_id)->get();
        $categoria = Categoria::find($request->categoria_id);
        $sistema = Sistema::find(1);

        $lecturasAnteriores = Lectura::BuscarSocioLecturasAnteriores($request->socio_id)->get();
        $lecturasActuales = Lectura::BuscarSocioLecturasActuales($request->socio_id)->get();

        $ultimaLectura = $lecturasActuales->last();
        $primeraLectura = $lecturasAnteriores->first();

        $gestion = $ultimaLectura->anio;
        $guardar = false;

        $lectura = new Lectura();

        if(!empty($ultimaLectura)){
            if(($request->mes == 1)  && ($request->lectura >= $ultimaLectura->lectura)){
                $guardar = true;
                $gestion++;

            }if(($request->mes >= $ultimaLectura->mes) && ($request->lectura >= $ultimaLectura->lectura) && ($ultimaLectura->anio == $gestion)){
                $guardar = true;
            }
        }else if($request->primeraLectura == 1){
            /*  Es primera lectura trabajar  con la entidad AGUA  */

            /*$primerMonto = (($lecturaActual->lectura - $socio->agua->lecturaMe) * $tarifa->montoBs) / $tarifa->montoMts3;*/
        }

        if($guardar){
            /* Sumaremos los montos que se encuentras en otras entidades q no sean la categoria o tarifa */
            $entidades = '';
            $entidades_id = '';
            $montos = '';
            $cobrar = 0;
            
            if(!empty($comisiones->all())){
                $entidades = 'comisiones';
                foreach ($comisiones as $comision) {
                    $entidades_id = $entidades_id.' '.$comision->id;
                    $montos = $montos.' '.$comision->monto;
                    $cobrar += $comision->monto;
                }
            }

            if(!empty($multas->all())){
                $entidades = $entidades.' multas';
                foreach ($multas as $multa) {
                    if((count($lecturasActuales) == $multa->meses) && ($multa->porcentaje == 0)){
                        $montos = $montos.' '.$multa->monto;
                        $cobrar += $multa->monto;
                        $entidades_id = $entidades_id.' '.$multa->id;
                    }else if($multa->porcentaje != 0){
                        $montoPorcentaje = 0;
                        /*$montos = $montos.' '.$multa->monto;
                        $cobrar += $multa->monto;
                        $entidades_id = $entidades_id.' '.$multa->id;*/ /*falta implementar*/
                    }
                }
            }
            /* Hasta aqui sumamos los otros montos */

            /* Ahora completamos la suma de las otra ENTIDADES con la CATEGORIA o TARIFA */
            $entidades = $entidades.' lecturas';
            $entidades_id = $entidades_id.' '.$ultimaLectura->id;
            $montos = $montos.' '.$categoria->monto;
            $cobrar += ((($ultimaLectura->lectura) * $categoria->monto) / $categoria->mtrs3);
            /* Aqui se termina suma de montos */

            $lectura->usuario_id = 1;
            $lectura->socio_id = $request->socio_id;
            $lectura->mes = $request->mes;
            $lectura->anio = $request->anio;
            $lectura->lectura = $reques->lectura;
            $lectura->entidades_id = $entidades_id;
            $lectura->montos = $montos;

            //$lectura->save();
            dd($lectura);

            //Flash::success("Se ha creado el lectura ".$lectura->nombre." de forma exitosa!");
        }

        //return redirect()->route('user.lecturas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
