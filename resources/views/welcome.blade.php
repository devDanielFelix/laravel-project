@extends('layouts.main')

@section('title', 'HDC Events')


@section('content')
    <body>
        <h1>Hello World</h1>
        <p>O nome dele é {{$nome}}, ele tem {{$idade}} anos de idade.</p>

        @if ($idade >= 18)
        <p>Pode tirar a CNH</p>
        @else
        <p>Não pode tirar a CNH</p>

        @endif

        <a href="/contact">Vá para página de Contatos.</a>

@endsection
