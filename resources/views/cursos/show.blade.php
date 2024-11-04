@extends('layouts.plantilla')

@section('titulo','curso '. $curso)
@section('contenido')
    <h1>Bienvenido al curso: {{ $curso->nombre }}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a><br>
    <a href="{{route('cursos.edit',$curso)}}">Editar curso</a>
    <p><strong>Categoria: </strong>{{ $curso->categoria }}</p>
    <p>{{ $curso->descripcion }}</p>
    <br>
    <form action="{{route('cursos.destroy',$curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar Curso</button>
    </form>
@endsection