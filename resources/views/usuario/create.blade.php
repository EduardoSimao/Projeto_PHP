@extends('master')
@section('titulo','Novo Usuário')
@section('conteudo')
  <form method="post" action="/usuario">
  @csrf
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome"></dd>
  	<dt>E-mail</dt>
  	<dd><input type="text" name="email"></dd>
    <dt>Senha</dt>
  	<dd><input type="password" name="senha"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection