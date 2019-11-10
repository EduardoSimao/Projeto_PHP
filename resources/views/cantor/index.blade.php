@extends('master')
@section('titulo','Cantores')
@section('conteudo')
  <h3><a href="/cantor/create">Novo Cantor</a></h3>
  @foreach($cantores as $a)
  <p>{{$a->nome}} - 
  	<a href="cantor/{{$a->id}}/edit">Editar</a>
  </p>
  @endforeach

  <dt><a href="JavaScript: window.history.back();"><< voltar</a></dt>

@endsection