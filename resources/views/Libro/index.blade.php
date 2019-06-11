@extends('layout');
@section('content');
    @if($libros->count())
    <table class="table table-bordered table-striped">
        <thead>
        <th>Titulo</th>
        <th>Autor</th>
        </thead>
       @foreach($libros as $libro)
       <tr>
           <td>{{$libro->titulo}}</td>
           <td>{{$libro->autor}}</td>
           <td><a class="btn btn-primary btn-xs" href="{{action('LibroController@edit',$libro->id)}}" ><span class="glyphicon glyhicon-pencil"></span> EDITAR</a></td>
       </tr>
       @endforeach
    </table>    
    @else
        No hay registros
    @endif
@endsection