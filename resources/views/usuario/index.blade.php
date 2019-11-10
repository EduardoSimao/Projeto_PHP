@extends('master')
@section('titulo','Usuario')
@section('conteudo')
  <h3>Login</h3>
  <form method="post" action="/login">
  @csrf
  <dl>
  	<dt>E-mail</dt>
  	<dd><input type="text" name="email" require></dd>
    <dt>Senha</dt>
  	<dd><input type="password" name="senha" require></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
  <h3><a href="/usuario/create">Cadastrar-se</a></h3>

@endsection