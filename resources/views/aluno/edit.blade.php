@extends('master')
@section('titulo','Novo Aluno')
@section('conteudo')
  <form method="post" action="/aluno/{{$aluno->id}}">
  @csrf
  @method("put")
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome" value="{{$aluno->nome}}">
    </dd>
  	<dt>Endereco</dt>
  	<dd><input type="text" name="endereco" value="{{$aluno->endereco}}"></dd>
    <dt>Cursos</dt>
    <dd> <select name="curso_id"> 
      @foreach($cursos as $a)
        @if($a->id == $aluno->curso_id)
        <option value='{{$a->id}}' selected>{{$a->nome}}</option>
        @else
        <option value='{{$a->id}}'>{{$a->nome}}</option>
        @endif
      @endforeach    
    </select></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection