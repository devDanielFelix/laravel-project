@extends('layouts.main')

@section('title', 'HDC Events')


@section('content')
    <body>
        <h1>Hello World</h1>
        <p>O nome dele é {{$pessoa['nome']}}, ele tem {{$pessoa['idade']}} anos de idade.</p>

        @if ($pessoa['idade'] >= 18)
        <p>Pode tirar a CNH</p>
        @else
        <p>Não pode tirar a CNH</p>

        @endif
        <a href="/produtos">Vá para página de Produtos.</a>
        <a href="/contatos">Vá para página de Contatos.</a>

@endsection
