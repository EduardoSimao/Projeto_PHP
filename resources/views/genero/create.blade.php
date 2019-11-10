@extends('master')
@section('titulo','Novo Genero')
@section('conteudo')
  <form method="post" action="/genero">
  @csrf
  <dl>
  	<dt>Genero</dt>
  	<dd><input type="text" name="genero"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
  <dt><a href="JavaScript: window.history.back();"><< voltar</a></dt>

@endsection