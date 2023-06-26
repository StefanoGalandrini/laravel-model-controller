@extends('layouts.base')

@section('contents')
    <h2 class="film-title">FILM</h2>
    <div class="movies-container">
        @foreach ($movies as $movie)
            <div class="movie-card">
                <p>ID: {{ $movie->id }}</p>
                <p>Title: {{ $movie->title }}</p>
                <p>Original Title: {{ $movie->original_title }}</p>
                <p>Nationality: {{ $movie->nationality }}</p>
                <p>Date: {{ $movie->date }}</p>
                <p>Vote: {{ $movie->vote }}</p>
            </div>
        @endforeach
    </div>
@endsection
