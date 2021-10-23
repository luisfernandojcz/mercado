@extends('plantilla')
@section('contenido')
<h3>Bienvenido seleccione una opcion</h3>
<table class="table table-dark table-striped mt-4">
<thead>   
        <th>Categorias</th>
        <th>Productos</th>                
        <th>Usuarios</th>  
</thead>
<tbody>
    
        <tr>
            <td><a class="btn btn-primary" href="{{ route('categoria.index') }}">Categoria</a> </td>             
            <td><a class="btn btn-danger" href="{{ route('producto.index') }}">Producto</a> </td> 
            <td><a class="btn btn-danger" href="{{ route('usuario.index') }}">Usuarios</a> </td>            
            <td>                                            
            </td></tr> 
      </form>
  </form>
</tbody>   
</table>
@stop