<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Comision;

class ComisionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comisiones = Comision::orderBy('id','ASC')->paginate(5);

        return view('administrador.comision.index')->with('comisiones',$comisiones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nombre','ASC')->lists('nombre','id');

        return view('administrador.comision.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comision = new Comision($request->all());
        $comision->usuario_id = '1';
        
        $comision->save();
        
        Flash::success("Se ha creado la comision ".$comision->nombre." de forma exitosa!");

        return redirect()->route('admin.comisiones.index');
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
        $comision = Comision::find($id);
        $categorias = Categoria::orderBy('nombre','ASC')->lists('nombre','id');

        return view('administrador.comision.edit')
                ->with('categorias',$categorias)
                ->with('comision',$comision);
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
        $comision = Comision::find($id);
        $comision->fill($request->all());
        $comision->usuario_id = '1';
        
        $comision->save();

        Flash::warning('La comision ' . $comision->nombre . 'ha sido modificado con exito!');
        return redirect()->route('admin.comisiones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comision = Comision::find($id);
        $comision->delete();

        Flash::error('La comision '.$comision->nombre.' a sido borrado de forma existosa!');
        return redirect()->route('admin.comisiones.index');
    }
}
