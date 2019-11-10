@extends('master')
@section('titulo','Novo Album')
@section('conteudo')
  <form method="post" action="/album/{{$album->id}}">
  @csrf
  @method("put")
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome" value="{{$album->nome}}">
    </dd>
    <dt>Cantor</dt>
    <dd> <select name="cantor_id"> 
      @foreach($cantores as $a)
        @if($a->id == $album->cantor_id)
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