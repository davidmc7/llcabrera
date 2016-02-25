<?php

namespace App\Http\Controllers;

use App\Usuario;
use Laracasts\Flash\Flash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*use App\Http\Requests;
use App\Http\Controllers\Controller;*/

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'index', 'create', 'store', 'edit', 'update']);
        $this->tipos = array('Administrador' => 'Administrador', 'Usuario' => 'Usuario');
        $this->departamentos = array('Cochabamba' => 'Cochabamba', 'La Paz' => 'La Paz');
    }

    /*protected $redirectTo = '/dashboard';*/

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::orderBy('id','ASC')->paginate(5);
        return view('usuario.index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create')->with(['tipos' => $this->tipos, 'departamentos' => $this->departamentos]);
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

        return redirect()->route('usuarios.index');
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
        return view('usuario.edit')
                ->with('tipos', $this->tipos)
                ->with('departamentos', $this->departamentos)
                ->with('usuario',$usuario);
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
        $usuario->fill($request->all());
        $usuario->nombre = strtoupper($request->nombre);
        $usuario->apellidoP = strtoupper($request->apellidoP);
        $usuario->apellidoM = strtoupper($request->apellidoM);
        $usuario->save();

        Flash::warning('El usuario ' . $usuario->login . ' ha sido modificado con exito!');
        return redirect()->route('usuarios.index');
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

        Flash::error('El usuario '.$usuario->login.' ha sido borrado de forma existosa!');
        return redirect()->route('usuarios.index');
    }
    
    /* Metodos para manejar el home */

    public function getDashboard()
    {
        return view('dashboard');
    }

    public function postLogin(Request $request)
    {
        if( Auth::attempt(['login' => $request->login, 'password' => $request->password ], true)) {// el true para recordar en la maquina

            //dd(Auth::user());
            return redirect()->route('dashboard');

        }
        return redirect()->back();
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('inicio');
    }
}
