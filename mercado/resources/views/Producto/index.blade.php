@extends('plantilla')
@section('contenido')
<h2>Productos</h2>
@can('create', App\Models\producto::class)
@endcan
<table class="table table-dark table-striped mt-4">
<thead>    
    <a class="btn btn-primary" href="{{ route('producto.create') }}">Agregar producto</a>    
        <th>Nombre</th>
        <th>Descripcion</th>                       
        <th>Precio</th>  
        <th>Cantidad</th> 
        <th>ID Categoria</th> 
        <th>Opciones</th> </thead>
<tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{{$producto->nombre}}</td>             
            <td>{{$producto->descripcion}}</td>  
            <td>{{$producto->precio}}</td>  
            <td>{{$producto->cantidad}}</td>    
            <td>{{$producto->categoria_id}}</td> 
                                    
            <td>              
                 <form action="{{ route("producto.destroy",$producto->id) }}" method="post" style="display: inline;" 
                  onsubmit="return confirm('¿Esta seguro que desea eliminar este producto?');">
                  @csrf 
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar </button>
              </form>
                  <a class="btn btn-primary" href="{{ route('producto.show',$producto->id) }}">Mostrar</a>
                  <a class="btn btn-primary" href="{{ route('producto.edit',$producto->id) }}">Editar </a>                           
            </form>                                            
            </td></tr> @endforeach
      </form>
    
     
  </form>
</tbody>   
</table>

@stop

