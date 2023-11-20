@extends('layouts.main')

@section('content')
    <div class="container">

        <h2 class="mt-5">Catalogo</h2>

        <div class="row">

            @foreach ($movies as $movie)
                <div class="col-3 my-5">
                    <div class="movie-card ">
                        <img src="{{ $movie->image_poster }}" alt="{{ $movie->title }}">
                        <div class="card-hover d-flex  flex-column justify-content-center align-items-center">
                            <h5 class="text-center">{{ $movie->title }}</h5>
                            <a href="{{ route('details', ['id' => $movie->id]) }}#movie-board"
                                class="btn btn-outline-light ">More
                                Info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
