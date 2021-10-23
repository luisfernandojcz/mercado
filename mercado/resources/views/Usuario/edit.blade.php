@extends('plantilla')

@section('title', 'usuario') 


@section('contenido')
<h3>Editar</h3>
<a class="btn btn-info" href="{{ route('usuario.index',$usuario->id) }}">Regresar</a>  


<form action="{{route("usuario.update",$usuario->id)}}" method="post">
  @csrf
  @method('PUT')
 
    <div class="form-group">
      <label >Nombre del usuario:</label>
      <input type="text" name="nombre" class="form-control" value="{{$usuario->nombre}}">
      <div class="form-group">
        <label >correo:</label>
        <input type="email" name="correo" class="form-control"value="{{$usuario->correo}}"
        >
      <div class="form-group">
        <label >Contraseña:</label>
        <input type="password" name="contraseña" class="form-control"value="{{$usuario->contraseña}}"
        >

      
        <div class="form-group">
          <label >tipo:</label>
          <input type="text" name="tipo" class="form-control"value="{{$usuario->tipo}}"
          >

        

    <input type="submit" class="btn btn-primary" value="Actualizar">
</form>
@stop
