@extends('master')
@section('titulo','DashBoard')
@section('conteudo')

  @csrf
  <dt>Minhas Musicas {{$user}}</dt>
  <br>
  <h3><a href="/genero">Generos</a></h3>


@endsection