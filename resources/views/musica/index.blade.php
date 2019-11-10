@extends('master')
@section('titulo','Musicas')
@section('conteudo')
  <h3><a href="/musica/create">Novo Musica</a></h3>
  @foreach($musicas as $a)
  <p>{{$a->nome}} - {{$a->genero_id}} - {{$a->albuns_id}} - 
  	<a href="musica/{{$a->id}}/edit">Editar</a>
  </p>
  @endforeach
  <dt><a href="JavaScript: window.history.back();"><< voltar</a></dt>

@endsection