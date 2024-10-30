@extends('layouts.plantilla')

@section('titulo','crear curso')
@section('contenido')
  <h1>En esta página podrás crear un curso</h1>
  <form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <table>
      <tr>
        <td><label for="nombre">Nombre: </label></td>
        <td><input type="text" name="nombre" id="nombre"></td>
      </tr>
      <tr>
        <td><label for="descripcion">Descripción: </label></td>
        <td><textarea name="descripcion" id="decripcion" cols="30" rows="5"></textarea></td>
      </tr>
      <tr>
        <td><label for="categoria">Categoria: </label></td>
        <td><input type="text" name="categoria" id="categoria"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Registrar"></td>
      </tr>
    </table>
  </form>
@endsection