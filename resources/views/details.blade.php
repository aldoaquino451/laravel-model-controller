@extends('layouts.main')

@section('content')
    <div id="movie-board">
        <img src="{{ $movie->image_wallpaper }}" alt="{{ $movie->title }}">
        <div class="movie-content p-4">
            <h5>
                {{ $movie->title }}
            </h5>
            <p class="card-text">
                <small>Titolo originale:</small>
                <strong>{{ $movie->original_title }}</strong>
            </p>
            <p class="card-text">
                <small>Data di uscita:</small>
                <strong>{{ $movie->date }}</strong>
            </p>
            <p class="card-text">
                <small>Voto:</small>
                <strong>{{ $movie->vote }} / 10</strong>
            </p>

            <div class="d-flex  justify-content-end">
                <a href="/catalogo" class="btn btn-dark">Catalogo</a>
            </div>
        </div>


    </div>
@endsection
