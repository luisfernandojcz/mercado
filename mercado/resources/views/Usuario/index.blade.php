@extends('plantilla')
@section('contenido')
<h2>Usuarioa</h2>
@can('create', App\Models\usuario::class)
@endcan
<table class="table table-dark table-striped mt-4">
<thead>
    
    <a class="btn btn-primary" href="{{ route('usuario.create') }}">Agregar usuario</a>   

        <th>Usuario</th>
        <th>Tipo</th>                       
        <th>opciones</th>  
        
</thead>
<tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->nombre}}</td>             
            <td>{{$usuario->tipo}}</td>   
                         
            <td>              
                 <form action="{{ route("usuario.destroy",$usuario->id) }}" method="post" style="display: inline;" 
                  onsubmit="return confirm('¿Esta seguro que desea eliminar esta seccion?');">
                  @csrf 
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
              </form>
                  <a class="btn btn-primary" href="{{ route('usuario.show',$usuario->id) }}">Mostrar</a>
                  <a class="btn btn-primary" href="{{ route('usuario.edit',$usuario->id) }}">Editar usuario</a>                             

                  
              </form>                                            
            </td></tr> @endforeach
      </form>
    
     
  </form>
</tbody>   
</table>

@stop

