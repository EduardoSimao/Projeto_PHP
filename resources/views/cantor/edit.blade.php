@extends('master')
@section('titulo','Editar Cantor')
@section('conteudo')
  <form method="post" action="/cantor/{{$cantor->id}}">
  @csrf
  @method("put")
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome" value="{{$cantor->nome}}">
    </dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
  <dt><a href="JavaScript: window.history.back();"><< voltar</a></dt>

@endsection