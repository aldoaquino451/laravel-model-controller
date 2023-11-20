@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Home</h1>

        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 my-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>{{ $movie->title }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Titolo originale: <strong>{{ $movie->original_title }}</strong></li>
                            <li class="list-group-item text-capitalize">Nazionalità:
                                <strong>{{ $movie->nationality }}</strong>
                            </li>
                            <li class="list-group-item">Data di uscita: <strong>{{ $movie->date }}</strong></li>
                            <li class="list-group-item">Voto: <strong>{{ $movie->vote }} / 10</strong></li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
