@extends('master')
@section('titulo','Novo Aluno')
@section('conteudo')
  <form method="post" action="/aluno">
  @csrf
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome"></dd>
  	<dt>Endereco</dt>
  	<dd><input type="text" name="endereco"></dd>
    <dt>Cursos</dt>
    <dd> <select name="curso_id"> 
      @foreach($cursos as $a)
        <option value='{{$a->id}}'>{{$a->nome}}</option>
      @endforeach    
    </select></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection