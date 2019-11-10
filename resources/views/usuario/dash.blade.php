@extends('master')
@section('titulo','DashBoard')
@section('conteudo')

  @csrf
  <dt>Bem Vindo {{$user[0]->nome}}</dt>
  <br>
  <h3><a href="/cantor">Cantores</a></h3>
  <h3><a href="/genero">Generos</a></h3>
  <h3><a href="/album">Albuns</a></h3>
  <h3><a href="/musica">Musicas</a></h3>


@endsection