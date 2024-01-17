@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    <h1>Produtos</h1>

    @if ($busca !='')
    <p>O usuário está buscando por: {{ $busca }}</p>
    @endif

    <a href="/">Volte para a home</a>
@endsection
