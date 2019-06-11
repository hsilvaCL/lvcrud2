@extends('layout');
@section('content');

<form method="POST" action="{{route('libro.update',$libro->id)}}" role="form">
    {{csrf_field()}}
    <input name="_method" type="hidden" value="PATCH">
    <div class="form-group">
        <input type="text" name="titulo" id="titulo" class="form-control" value="{{$libro->titulo}}">
        
    </div>
    <div class="form-group">
        <input type="text" name="autor" id="autor" class="form-control" value="{{$libro->autor}}">
        
    </div>
    
    <input type="submit" value="Actualizar" class="btn btn-success">
</form>