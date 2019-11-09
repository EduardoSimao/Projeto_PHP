@extends('master')
@section('titulo','Novo Aluno')
@section('conteudo')
  <form method="post" action="/curso/{{$curso->id}}">
  @csrf
  @method("put")
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome" value="{{$curso->nome}}">
    </dd>
  	<dt>Coordenador</dt>
  	<dd><input type="text" name="coordenador" value="{{$curso->coordenador}}"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection