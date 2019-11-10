@extends('master')
@section('titulo','Novo Album')
@section('conteudo')
  <form method="post" action="/album">
  @csrf
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome"></dd>
    <dt>Cantores</dt>
    <dd> <select name="cantor_id"> 
      @foreach($cantores as $a)
        <option value='{{$a->id}}'>{{$a->nome}}</option>
      @endforeach    
    </select></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
  <dt><a href="JavaScript: window.history.back();"><< voltar</a></dt>

@endsection