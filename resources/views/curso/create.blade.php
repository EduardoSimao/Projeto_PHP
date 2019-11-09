@extends('master')
@section('titulo','Novo Aluno')
@section('conteudo')
  <form method="post" action="/curso">
  @csrf
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome"></dd>
  	<dt>Coordenador</dt>
  	<dd><input type="text" name="coordenador"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection