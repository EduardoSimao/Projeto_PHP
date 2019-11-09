@extends('master')
@section('titulo','Cursos')
@section('conteudo')
  <h3><a href="/curso/create">Novo Curso</a></h3>
  @foreach($cursos as $a)
  <p>{{$a->nome}} - {{$a->coordenador}} - 
  	<a href="curso/{{$a->id}}/edit">Editar</a>
  </p>
  @endforeach
@endsection