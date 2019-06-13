@extends('layout')
@section('content')
<a class="btn btn-info btn-xs" href="{{action('PersonaController@create')}}" ><span class="glyphicon glyhicon-pencil"></span> NUEVO</a></td>
    @if($personas->count())
    <table class="table table-bordered table-striped">
        <thead>
        <th>Titulo</th>
        <th>Autor</th>
        </thead>
       @foreach($personas as $persona)
       <tr>
           <td>{{$persona->nombre}}</td>
           <td>{{$persona->apellido}}</td>
           <td><a class="btn btn-primary btn-xs" href="{{action('PersonaController@edit',$persona->idpersona)}}" ><span class="glyphicon glyhicon-pencil"></span> EDITAR</a></td>
           <td>
               <form action="{{action('PersonaController@destroy',$persona->idpersona)}}" method="POST">
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