<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Categoria;
use App\Agua;
use App\Alcantarillado;
use App\Socio;

class SociosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->departamentos = array('Cochabamba' => 'Cochabamba', 'Oruro' => 'Oruro', 'Potosi' => 'Potosi', 'La Paz' => 'La Paz', 'Santa Cruz' => 'Santa Cruz', 'Beni' => 'Beni', 'Pando' => 'Pando', 'Tarija' => 'Tarija', 'Chuquisaca' => 'Chuquisaca');
        $this->genero = array('Masculino' => 'Masculino', 'Femenino' => 'Femenino');
        $this->estadoCivil = array('Soltero' => 'Soltero', 'Soltera' => 'Soltera', 'Casado' => 'Casado', 'Casada' => 'Casada', 'Viudo' => 'Viudo', 'Viuda' => 'Viuda');
        $this->profesion = array('Alba&ntilde;il' => 'Alba&ntilde;il');
        $this->tipoResponsable = array('Propietario' => 'Propietario', 'Inquilino' => 'Inquilino', 'Entidad Publica o Privada' => 'Entidad Publica o Privada', 'Otro' => 'Otro');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socios = Socio::orderBy('id','ASC')->paginate(5);

        return view('usuario.socio.index')->with('socios',$socios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nombre','ASC')->lists('nombre','id');
        
        return view('usuario.socio.create')
                ->with('departamentos', $this->departamentos)
                ->with('genero', $this->genero)
                ->with('estadoCivil', $this->estadoCivil)
                ->with('profesion', $this->profesion)
                ->with('tipoResponsable', $this->tipoResponsable)
                ->with('categorias', $categorias);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $agua = new Agua($request->all());
        $agua->usuario_id = 1;
        $agua->estado = '1';
        $agua->save();

        $alcantarillado = new Alcantarillado($request->all());
        $alcantarillado->usuario_id = 1;
        $alcantarillado->save();

        $socio = new Socio($request->all());
        $socio->usuario_id = 1;
        $socio->codigoSocio = 'AB-CD-12-B';
        //$socio->fecNac = $datosSocio->fecNac;
        $socio->nombre = strtoupper($socio->nombre);
        $socio->apellidoP = strtoupper($socio->apellidoP);
        $socio->apellidoM = strtoupper($socio->apellidoM);
        $socio->estado = '1';
        
        
        $socio->agua()->associate($agua);
        $socio->alcantarillado()->associate($alcantarillado);

        $socio->save();

        Flash::success("Se ha creado la cuenta ".$socio->login." de forma exitosa!");
        return redirect()->route('user.socios.index');
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
        $categorias = Categoria::orderBy('nombre','ASC')->lists('nombre','id');

        $socio = Socio::find($id);

        return view('usuario.socio.edit')
                ->with('departamentos', $this->departamentos)
                ->with('genero', $this->genero)
                ->with('estadoCivil', $this->estadoCivil)
                ->with('profesion', $this->profesion)
                ->with('tipoResponsable', $this->tipoResponsable)
                ->with('socio',$socio)
                ->with('categorias', $categorias);
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
        $socio = Socio::find($id);
        $socio->fill($request->all());
        $socio->nombre = strtoupper($request->nombre);
        $socio->apellidoP = strtoupper($request->apellidoP);
        $socio->apellidoM = strtoupper($request->apellidoM);
        $socio->save();

        $agua = Agua::find($socio->agua_id);
        $agua->fill($request->all());
        $agua->save();

        $alcantarillado = Alcantarillado::find($socio->alcantarillado_id);
        $alcantarillado->fill($request->all());
        $alcantarillado->save();

        Flash::warning('El socio ' . $socio->login . 'ha sido modificado con exito!');
        return redirect()->route('user.socios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socio = Socio::find($id);
        $socio->delete();

        Flash::error('El socio '.$socio->login.' a sido borrado de forma existosa!');
        return redirect()->route('user.socios.index');
    }
}
