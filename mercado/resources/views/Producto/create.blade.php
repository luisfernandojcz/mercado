@extends('plantilla')

@section('title', 'Producto') 

@section('contenido')
<h3>Agregar producto</h3>

<form action="/producto" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
      <label >Nombre:</label>
      <input type="text" name="nombre" class="form-control">

      <div class="form-group">
        <label >Descripcion:</label>
        <input type="text" name="descripcion" class="form-control">
        <div class="form-group">
          <label >Precio:</label>
          <input type="text" name="precio" class="form-control">
          
          <div class="form-group">
            <label >Cantidad:</label>
            <input type="text" name="cantidad" class="form-control">

            <div class="form-group">
              <label>Categoria:</label>
              <select name="categoria_id">
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
              </select>
          </div> 

    <input type="submit" class="btn btn-primary" value="Agregar">
</form>
@stop

