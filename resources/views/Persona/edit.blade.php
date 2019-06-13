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
<h1>Actualizar Persona</h1>
<form method="POST" action="{{route('persona.update',$persona->idpersona)}}" role="form">
    {{csrf_field()}}
    <input name="_method" type="hidden" value="PATCH">
    <div class="form-group">
        <input type="text" name="titulo" id="titulo" class="form-control" value="{{$persona->nombre}}">
        
    </div>
    <div class="form-group">
        <input type="text" name="autor" id="autor" class="form-control" value="{{$persona->apellido}}">
        
    </div>
    
    <input type="submit" value="Actualizar" class="btn btn-success">
    <a href="{{route('persona.index')}}" class="btn btn-info">Volver</a>
</form>