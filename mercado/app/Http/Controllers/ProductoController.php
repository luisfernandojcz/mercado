<?php
namespace App\Http\Controllers;
use App\Models\producto;
use Illuminate\Http\Request;
use App\Models\categoria;

class ProductoController extends Controller
{    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $productos = producto::all();
        return view("Producto.index",compact('productos'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {   $categorias = categoria::all();
        return view("Producto.create",compact('categorias'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {   $producto = $request->all();   
        $producto=request()->except("_token");
        producto::insert($producto);
        return redirect()->route("producto.index"); }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {  $producto=producto::findOrFail($id);     
        return view("Producto.show",compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {   $producto=producto::find($id);
        $categorias = categoria::all();    
        return view("Producto.edit",compact('producto','categorias'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    
    {   $valores = $request->all();      
        $registro = Producto::find($id);        
        $registro->fill($valores);
        $registro->save();
        return redirect()->route("producto.index");      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=producto::findOrfail($id);
        $producto->delete();
        return redirect()->route("producto.index");
    }
}