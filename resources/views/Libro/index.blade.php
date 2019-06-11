@extends('layout')
@section('content')
<a class="btn btn-info btn-xs" href="{{action('LibroController@create')}}" ><span class="glyphicon glyhicon-pencil"></span> NUEVO</a></td>
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
           <td>
               <form action="{{action('LibroController@destroy',$libro->id)}}" method="POST">
                   {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                       <input type="submit" value="ELIMINAR" class="btn btn-danger btn-xs">

               </form>
            </td>
       </tr>
       @endforeach
    </table>    
    @else
        No hay registros
    @endif
@endsection