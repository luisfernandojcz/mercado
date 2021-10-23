@extends('plantilla')

@section('title', 'Categoria') 



@section('contenido')
<h3>Agregar Categoria</h3>

<form action="/categoria" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
      <label >Nombre:</label>
      <input type="text" name="nombre" class="form-control">

      <div class="form-group">
        <label >Descripcion:</label>
        <input type="text" name="descripcion" class="form-control">
 

    <input type="submit" class="btn btn-primary" value="Agregar">
</form>
@stop

