<?php
namespace App\Http\Controllers;
use App\Models\categoria;
use Illuminate\Http\Request;
use App\Models\producto;
class CategoriaController extends Controller
{    /**     * Display a listing of the resource.    *
     * @return \Illuminate\Http\Response
     */
    public function index()    
    {   $categorias = categoria::all();
        return view("Categoria.index",compact('categorias')); }

    /**
     * Show the form for creating a new resource.     *
     * @return \Illuminate\Http\Response
     */
    public function create()    
    {   $categorias = categoria::all();
        return view("Categoria.create",compact('categorias'));    }

    /**
     * Store a newly created resource in storage.     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $datosCategorias=request()->except("_token");
        categoria::insert($datosCategorias);
        return redirect()->route("categoria.index");}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $categoria=categoria::findOrFail($id);        
        return view("Categoria.show",compact('categoria'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $categoria=categoria::findOrFail($id);        
        return view("Categoria.edit",compact('categoria'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $categoria=categoria::findOrfail($id);
        $categoria->nombre=$request->input("nombre");        
        $categoria->descripcion=$request->input("descripcion");        
        $categoria->save();
        return redirect()->route("categoria.index");  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $categoria=categoria::findOrfail($id);
        $categoria->delete();
        return redirect()->route("categoria.index");    }
}