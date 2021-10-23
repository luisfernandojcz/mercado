@extends('plantilla')

@section('title', 'Usuario') 



@section('contenido')
<h3>Agregar usuario</h3>

<form action="/usuario" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
      <label >Nombre:</label>
      <input type="text" name="nombre" class="form-control">
      <div class="form-group">
        <label >Correo:</label>
        <input type="email" name="correo" class="form-control">
        <div class="form-group">
          <label >Contraseña:</label>
          <input type="password" name="contraseña" class="form-control">
          <div class="form-group">
            <label >Tipo de usuario:</label>
            <input type="text" name="tipo" class="form-control">
 

    <input type="submit" class="btn btn-primary" value="Agregar">
</form>
@stop

