@extends('master')
@section('titulo','Albuns')
@section('conteudo')
  <h3><a href="/album/create">Novo Album</a></h3>
  @foreach($albuns as $a)
  <p>{{$a->nome}} - {{$a->cantor_id}} - 
  	<a href="album/{{$a->id}}/edit">Editar</a>
  </p>
  @endforeach
  <dt><a href="JavaScript: window.history.back();"><< voltar</a></dt>

@endsection