<?php
namespace App\Http\Controllers;
use App\Models\usuario;
use Illuminate\Http\Request;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $usuarios = usuario::all();
        return view("Usuario.index",compact('usuarios'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {   $usuarios = usuario::all();
        return view("Usuario.create",compact('usuarios'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $datos=request()->except("_token");
        usuario::insert($datos);
        return redirect()->route("usuario.index");    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario=usuario::find($id);
        
        return view("Usuario.show",compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        $usuario=usuario::find($id);        
        return view("Usuario.edit",compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario=usuario::find($id);
        $usuario->nombre=$request->input("nombre");        
        $usuario->contraseña=$request->input("contraseña"); 
        $usuario->correo=$request->input("correo"); 
        $usuario->tipo=$request->input("tipo");        
        $usuario->save();
        return redirect()->route("usuario.index");       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario=usuario::findOrfail($id);
        $usuario->delete();
        return redirect()->route("usuario.index");
    }
}