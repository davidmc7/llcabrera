public function __construct()
    {
        $this->departamentos = array('Cochabamba' => 'Cochabamba', 'Oruro' => 'Oruro', 'Potosi' => 'Potosi', 'La Paz' => 'La Paz', 'Santa Cruz' => 'Santa Cruz', 'Beni' => 'Beni', 'Pando' => 'Pando', 'Tarija' => 'Tarija', 'Chuquisaca' => 'Chuquisaca');
        $this->tipo = array('Usuario' => 'Usuario', 'Administrador' => 'Administrador');
    }
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
        return view('administrador.usuario.create')
                ->with('tipo', $this->tipo)
                ->with('departamentos', $this->departamentos);
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
        return view('administrador.usuario.edit')
                ->with('tipo', $this->tipo)
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

        Flash::warning('El usuario ' . $usuario->login . 'ha sido modificado con exito!');
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

        Flash::error('El usuario '.$usuario->login.' a sido borrado de forma existosa!');
        return redirect()->route('usuarios.index');
    }