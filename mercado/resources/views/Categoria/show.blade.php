@extends('plantilla')

@section('contenido')

<h3>Datos de la categoria</h3>
<form action="{{route("categoria.show",$categoria->id)}}" method="get">
    @csrf
    <div class="row">
        <div class="col">Nombre de la categoria:</div>
        <div class="col bg-light">{{$categoria->nombre}}</div>
        <div class="col"></div>
        
    </div>
    <div class="row">
        <div class="col">Descripcion:</div>
        <div class="col bg-light">{{$categoria->descripcion}}</div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
    

    
    @stop