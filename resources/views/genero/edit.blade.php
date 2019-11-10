@extends('master')
@section('titulo','Editar Genero')
@section('conteudo')
  <form method="post" action="/genero/{{$genero->id}}">
  @csrf
  @method("put")
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="genero" value="{{$genero->genero}}">
    </dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
  <dt><a href="JavaScript: window.history.back();"><< voltar</a></dt>

@endsection