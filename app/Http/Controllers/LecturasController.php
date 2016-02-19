<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Socio;
use App\Tarifa;
use App\Lectura;

class LecturasController extends Controller
{
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
        $tarifa = Tarifa::find($socio->categoria_id);

        /*$lecturas->each(function($lecturas){
            $lecturas->socio;
            $lecturas->tarifa;
        });*/
        
        return view('usuario.lectura.index')
                ->with('socio', $socio)
                ->with('tarifa', $tarifa)
                ->with('lecturasAnteriores', $lecturasAnteriores)
                ->with('lecturasActuales', $lecturasActuales);
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
        //
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
