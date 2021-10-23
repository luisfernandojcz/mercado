@extends('plantilla')
@section('title', 'Producto') 
@section('contenido')
<h3>Editar</h3>
<a class="btn btn-info" href="{{ route('producto.index',$producto->id) }}">Regresar</a> 
<form action="{{route("producto.update",$producto->id)}}" method="post">
  @csrf
  @method('PUT') 
    <div class="form-group">
      <label >Nombre del producto:</label>
      <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}">
      <div class="form-group">
        <label >Descripcion:</label>
        <input type="text" name="descripcion" class="form-control"value="{{$producto->descripcion}}">
        <div class="form-group">
          <label >Precio:</label>
          <input type="text" name="precio" class="form-control"value="{{$producto->precio}}" >
          <div class="form-group">
          <label >cantidad:</label>
          <input type="text" name="cantidad" class="form-control"value="{{$producto->cantidad}}" >
            <div class="form-group">
              <label>Categoria:</label>
              <select name="categoria_id">
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
              </select>
          </div> 
    <input type="submit" class="btn btn-primary" value="Actualizar">
</form>
@stop
