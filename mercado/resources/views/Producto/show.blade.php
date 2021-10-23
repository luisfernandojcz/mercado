@extends('plantilla')

@section('contenido')

<h3>Datos de la producto</h3>

<form action="{{route("producto.show",$producto->id)}}" method="get">
    @csrf
    <div class="row">
        <div class="col">Nombre del producto:</div>
        <div class="col bg-light">{{$producto->nombre}}</div>
        <div class="col"></div>       
    </div>
    <div class="row">
        <div class="col">Descripcion:</div>
        <div class="col bg-light">{{$producto->descripcion}}</div>
        <div class="col"></div>        
    </div>
    <div class="row">
        <div class="col">precio:</div>
        <div class="col bg-light">{{$producto->precio}}</div>
        <div class="col"></div>        
    </div>
    <div class="row">
        <div class="col">cantidad:</div>
        <div class="col bg-light">{{$producto->cantidad}}</div>
        <div class="col"></div>
    </div>
    <div class="row">
        <div class="col">Categoria id:</div>
        <div class="col bg-light">{{$producto->categoria_id}}</div>
        <div class="col"></div>      
        
    </div>    

    
    @stop