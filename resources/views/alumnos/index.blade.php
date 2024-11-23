@extends('layouts.plantilla')

@section('titulo','Listado de Alumnos')

@section('contenido')
    <h1>En esta página se mostrará todos los Alumnos</h1>
    <a href="{{route('alumnos.create')}}">Crear nuevo</a>
    <ul>
        @foreach ($alumnos as $alumno)
         <li><a href="#">{{$alumno->nombre}}</a></li>
        @endforeach
    </ul>
    {{$alumnos->links()}}
@endsection