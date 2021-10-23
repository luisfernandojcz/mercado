@extends('plantilla')
@section('contenido')
<h2>Categorias</h2>
@can('create', App\Models\categoria::class)
@endcan
<table class="table table-dark table-striped mt-4">
<thead>    
    <a class="btn btn-primary" href="{{ route('categoria.create') }}">Agregar categoria</a> 
        <th>Nombre de la categoria</th>
        <th>Descripcion</th>                       
        <th>opciones</th>          
</thead>
<tbody>
    @foreach($categorias as $categoria)
        <tr>
            <td>{{$categoria->nombre}}</td>             
            <td>{{$categoria->descripcion}}</td>  
            <td>              
                 <form action="{{ route("categoria.destroy",$categoria->id) }}" method="post" style="display: inline;" 
                  onsubmit="return confirm('¿Esta seguro que desea eliminar esta categoria?');">
                  @csrf 
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
              </form>
                  <a class="btn btn-primary" href="{{ route('categoria.show',$categoria->id) }}">Mostrar</a>
                  <a class="btn btn-primary" href="{{ route('categoria.edit',$categoria->id) }}">Editar</a>                            

              </form>                                            
            </td></tr> @endforeach
      </form>   
</form>
</tbody>   
</table>
@stop

