@extends('master')
@section('titulo','Alunos')
@section('conteudo')
  <h3><a href="/aluno/create">Novo Aluno</a></h3>
  @foreach($alunos as $a)
  <p>{{$a->nome}} - {{$a->endereco}} - {{$a->curso_id}} -  
  	<a href="aluno/{{$a->id}}/edit">Editar</a>
  </p>
  @endforeach
@endsection