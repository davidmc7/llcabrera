<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Categoria;
use App\Tarifa;

class TarifasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifas = Tarifa::orderBy('id','ASC')->paginate(5);

        return view('administrador.tarifa.index')->with('tarifas',$tarifas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nombre','ASC')->lists('nombre','id');

        return view('administrador.tarifa.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarifa = new Tarifa($request->all());
        $tarifa->usuario_id = '1';
        
        $tarifa->save();
        
        Flash::success("Se ha creado la tarifa ".$tarifa->nombre." de forma exitosa!");
        return redirect()->route('admin.tarifas.index');
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
        $tarifa = Tarifa::find($id);
        return view('administrador.tarifa.edit')
                ->with('categorias', $categorias)
                ->with('tarifa',$tarifa);
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
        $tarifa = Tarifa::find($id);
        $tarifa->fill($request->all());
        $tarifa->usuario_id = '1';
        
        $tarifa->save();

        Flash::warning('La tarifa ' . $tarifa->nombre . 'ha sido modificada con exito!');
        return redirect()->route('admin.tarifas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarifa = Tarifa::find($id);
        $tarifa->delete();

        Flash::error('La tarifa '.$tarifa->nombre.' a sido borrado de forma existosa!');
        return redirect()->route('admin.tarifas.index');
    }
}
