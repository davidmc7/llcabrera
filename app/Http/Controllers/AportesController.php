<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Categoria;
use App\Aporte;

class AportesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aportes = Aporte::orderBy('id','ASC')->paginate(5);

        return view('administrador.aporte.index')->with('aportes',$aportes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nombre','ASC')->lists('nombre','id');
        return view('administrador.aporte.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aporte = new Aporte($request->all());
        $aporte->usuario_id = '1';
        
        $aporte->save();
        
        Flash::success("Se ha creado el aporte ".$aporte->nombre." de forma exitosa!");

        return redirect()->route('admin.aportes.index');
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

        $aporte = Aporte::find($id);
        
        return view('administrador.aporte.edit')
                ->with('categorias', $categorias)
                ->with('aporte', $aporte);
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
        $aporte = Aporte::find($id);
        $aporte->fill($request->all());
        $aporte->usuario_id = '1';
        
        $aporte->save();

        Flash::warning('El aporte ' . $aporte->nombre . 'ha sido modificado con exito!');
        return redirect()->route('admin.aportes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aporte = Aporte::find($id);
        $aporte->delete();

        Flash::error('El aporte '.$aporte->nombre.' a sido borrado de forma existosa!');
        return redirect()->route('admin.aportes.index');
    }
}
