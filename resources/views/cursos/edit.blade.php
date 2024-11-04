@extends('layouts.plantilla')

@section('titulo','editar curso')
@section('contenido')
  <h1>En esta página podrás editar un curso</h1>
  <form action="{{route('cursos.update',$curso)}}" method="POST">
    @csrf
    @method('put')
    <table>
      <tr>
        <td><label for="nombre">Nombre: </label></td>
        <td><input type="text" name="nombre" id="nombre" value="{{$curso->nombre}}"></td>
      </tr>
      <tr>
        <td><label for="descripcion">Descripción: </label></td>
        <td><textarea name="descripcion" id="decripcion" cols="30" rows="5">{{$curso->descripcion}}</textarea></td>
      </tr>
      <tr>
        <td><label for="categoria">Categoria: </label></td>
        <td><input type="text" name="categoria" id="categoria" value="{{$curso->categoria}}"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Actualizar"></td>
      </tr>
    </table>
  </form>
@endsection