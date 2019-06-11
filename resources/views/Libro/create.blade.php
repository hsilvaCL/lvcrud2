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
<h1>Nuevo Libro</h1>
<form method="POST" action="{{route('libro.store')}}" role="form">
    {{csrf_field()}}
    <div class="form-group">
        <input type="text" name="titulo" id="titulo" class="form-control" value="">
        
    </div>
    <div class="form-group">
        <input type="text" name="autor" id="autor" class="form-control" value="">
        
    </div>
    
    <input type="submit" value="Crear" class="btn btn-success">
    <a href="{{route('libro.index')}}" class="btn btn-info">Volver</a>
</form>