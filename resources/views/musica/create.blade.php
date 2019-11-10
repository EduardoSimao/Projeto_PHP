@extends('master')
@section('titulo','Novo Musica')
@section('conteudo')
  <form method="post" action="/musica">
  @csrf
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome"></dd>
    <dt>Genero</dt>
    <dd> <select name="genero_id"> 
      @foreach($generos as $a)
        <option value='{{$a->id}}'>{{$a->genero}}</option>
      @endforeach    
    </select></dd>
    <dt>Albuns</dt>
    <dd> <select name="albuns_id"> 
      @foreach($albuns as $a)
        <option value='{{$a->id}}'>{{$a->nome}}</option>
      @endforeach    
    </select></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
  <dt><a href="JavaScript: window.history.back();"><< voltar</a></dt>

@endsection