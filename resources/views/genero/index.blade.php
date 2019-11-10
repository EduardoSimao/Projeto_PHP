@extends('master')
@section('titulo','Cursos')
@section('conteudo')
  <h3><a href="/genero/create">Novo Genero</a></h3>
  @foreach($generos as $a)
  <p>{{$a->genero}} - 
  	<a href="genero/{{$a->id}}/edit">Editar</a>
  </p>
  @endforeach

  <dt><a href="JavaScript: window.history.back();"><< voltar</a></dt>

@endsection