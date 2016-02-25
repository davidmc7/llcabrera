<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Categoria;
use App\Multa;

class MultasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->estado = array('1' => 'Activado', '0' => 'Desactivado');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $multas = Multa::orderBy('id','ASC')->paginate(5);
        
        return view('administrador.multa.index')
                ->with('estado', $this->estado)
                ->with('multas',$multas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nombre','ASC')->lists('nombre','id');

        return view('administrador.multa.create')
                ->with('estado', $this->estado)
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
        $multa = new Multa($request->all());
        $multa->usuario_id = '1';
        
        $multa->save();
        
        Flash::success("Se ha creado la multa ".$multa->nombre." de forma exitosa!");
        return redirect()->route('admin.multas.index');
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
        $multa = Multa::find($id);
        return view('administrador.multa.edit')
                ->with('estado', $this->estado)
                ->with('categorias', $categorias)
                ->with('multa',$multa);
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
        $multa = Multa::find($id);
        $multa->fill($request->all());
        $multa->usuario_id = '1';
        
        $multa->save();

        Flash::warning('La multa ' . $multa->nombre . 'ha sido modificada con exito!');
        return redirect()->route('admin.multas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $multa = Multa::find($id);
        $multa->delete();

        Flash::error('La multa '.$multa->nombre.' a sido borrado de forma existosa!');
        return redirect()->route('admin.multas.index');
    }
}
