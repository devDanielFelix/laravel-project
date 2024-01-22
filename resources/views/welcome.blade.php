@extends('layouts.main')

@section('title', 'HDC Events')


@section('content')

<div id="search-container" class="col-mds-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-mds-12">
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card-md-3">
            <img src="/img/Evento_card_img.jpg" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="class-date">20/01/2024</></p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participantes">X participantes</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
