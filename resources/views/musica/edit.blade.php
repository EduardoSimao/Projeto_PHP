@extends('master')
@section('titulo','Novo Musica')
@section('conteudo')
  <form method="post" action="/musica/{{$musica->id}}">
  @csrf
  @method("put")
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome" value="{{$musica->nome}}">
    </dd>
    <dt>Generos</dt>
    <dd> <select name="genero_id"> 
      @foreach($generos as $a)
        @if($a->id == $musica->genero_id)
        <option value='{{$a->id}}' selected>{{$a->genero}}</option>
        @else
        <option value='{{$a->id}}'>{{$a->genero}}</option>
        @endif
      @endforeach    
    </select></dd>
    <dt>Albuns</dt>
    <dd> <select name="albuns_id"> 
      @foreach($albuns as $a)
        @if($a->id == $musica->albuns_id)
        <option value='{{$a->id}}' selected>{{$a->nome}}</option>
        @else
        <option value='{{$a->id}}'>{{$a->nome}}</option>
        @endif
      @endforeach    
    </select></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
  <dt><a href="JavaScript: window.history.back();"><< voltar</a></dt>

@endsection