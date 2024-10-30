@extends('layouts.plantilla')

@section('titulo','Listado de cursos')

@section('contenido')
    <h1>En esta página se mostrará todos los cursos</h1>
    <a href="{{route('cursos.create')}}">Crear nuevo curso</a>
    <ul>
        @foreach ($cursos as $curso)
         <li><a href="{{route('cursos.show',$curso)}}">{{$curso->nombre}}</a></li>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection