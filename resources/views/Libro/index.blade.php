@extends('layout');
@section('content');
    @if($libros->count())
       @foreach($libros as $libro)
        {{$libro->titulo}}
       @endforeach
        
    @else
        No hay registros
    @endif
@endsection