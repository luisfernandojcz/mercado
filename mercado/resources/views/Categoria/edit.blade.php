@extends('plantilla')

@section('title', 'Categoria')
@section('contenido')
<h3>Editar</h3>
<form action="{{route("categoria.update",$categoria->id)}}" method="post">
  @csrf
  @method('PUT') 
    <div class="form-group">
      <label >Nombre de la categoria:</label>
      <input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}">
      <div class="form-group">
        <label >Descripcion:</label>
        <input type="text" name="descripcion" class="form-control"value="{{$categoria->descripcion}}"  >

    <input type="submit" class="btn btn-primary" value="Actualizar">
</form>
@stop
