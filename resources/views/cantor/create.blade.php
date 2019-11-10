@extends('master')
@section('titulo','Novo Cantor')
@section('conteudo')
  <form method="post" action="/cantor">
  @csrf
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
  <dt><a href="JavaScript: window.history.back();"><< voltar</a></dt>

@endsection