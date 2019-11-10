@extends('master')
@section('titulo','DashBoard')
@section('conteudo')
  @csrf
  <dt>Minhas Musicas {{$user}}</dt>

@endsection