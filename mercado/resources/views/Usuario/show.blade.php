@extends('plantilla')
@section('contenido')
<h3>Datos de la usuario</h3>
<form action="{{route("usuario.show",$usuario->id)}}" method="get">
    @csrf
    <div class="row">
        <div class="col">Nombre del usuario:</div>
        <div class="col bg-light">{{$usuario->nombre}}</div>
        <div class="col"></div>        
    </div>    
    <div class="row">
        <div class="col">Correo:</div>
        <div class="col bg-light">{{$usuario->correo}}</div>
        <div class="col"></div>        
    </div>    
    <div class="row">
        <div class="col">Tipo:</div>
        <div class="col bg-light">{{$usuario->tipo}}</div>
        <div class="col"></div>        
    </div>    
            
    

    
    @stop