@extends('layout')
@section('content')
@if(count($errors)>0)
<div class="alert alert-danger">
    Error en los datos obligatorios
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<h1>Nueva Persona</h1>
<form method="POST" action="{{route('persona.store')}}" role="form">
    {{csrf_field()}}
    <div class="form-group">
        <input type="text" name="nombre" id="titulo" placeholder="agregue el nombre" class="form-control" value="">
        
    </div>
    <div class="form-group">
        <input type="text" name="apellido" id="autor" placeholder="agregue el apellido" class="form-control" value="">
        
    </div>
    
    <input type="submit" value="Crear" class="btn btn-success">
    <a href="{{route('persona.index')}}" class="btn btn-info">Volver</a>
</form>