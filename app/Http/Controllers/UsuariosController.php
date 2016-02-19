<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::orderBy('id','ASC')->paginate(5);

        return view('administrador.usuario.index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario($request->all());
        $usuario->password = bcrypt($request->password);

        $usuario->nombre = strtoupper($request->nombre);
        $usuario->apellidoP = strtoupper($request->apellidoP);
        $usuario->apellidoM = strtoupper($request->apellidoM);
        
        $usuario->save();
        
        Flash::success("Se ha creado la cuenta ".$usuario->login." de forma exitosa!");

        return redirect()->route('admin.usuarios.index');
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
        $usuario = Usuario::find($id);
        return view('administrador.usuario.edit')->with('usuario',$usuario);
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
        $usuario = Usuario::find($id);
        //$user->fill($request->all());
        $usuario->login = $request->login;
        $usuario->nombre = $request->nombre;
        $usuario->apellidoP = $request->apellidoP;
        $usuario->apellidoM = $request->apellidoM;
        $usuario->ci = $request->ci;
        $usuario->ciExpedido = $request->ciExpedido;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->celular = $request->celular;
        $usuario->direccion = $request->direccion;
        $usuario->tipo = $request->tipo;
        $usuario->save();

        Flash::warning('El usuario ' . $usuario->login . 'ha sido modificado con exito!');
        return redirect()->route('admin.usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        Flash::error('El usuario '.$usuario->login.' a sido borrado de forma existosa!');
        return redirect()->route('admin.usuarios.index');
    }
}
