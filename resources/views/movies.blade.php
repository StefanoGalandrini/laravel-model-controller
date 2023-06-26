@extends('layouts.base')

@section('contents')
    <h2 class="film-title">FILM</h2>
    <div class="movies-container">
        @foreach ($movies as $movie)
            <div class="movie-card">
                <p class="movie-info">
                    <span class="info-label">ID: </span>
                    <span class="info-value">{{ $movie->id }}</span>
                </p>
                <p class="movie-info">
                    <span class="info-label block-el">Title: </span>
                    <span class="info-value">{{ $movie->title }}</span>
                </p>
                <p class="movie-info">
                    <span class="info-label block-el">Original Title: </span>
                    <span class="info-value">{{ $movie->original_title }}</span>
                </p>
                <p class="movie-info">
                    <span class="info-label">Nationality: </span>
                    <span class="info-value">{{ $movie->nationality }}</span>
                </p>
                <p class="movie-info">
                    <span class="info-label">Date: </span>
                    <span class="info-value">{{ $movie->date }}</span>
                </p>
                <p class="movie-info">
                    <span class="info-label">Vote: </span>
                    <span class="info-value">{{ $movie->vote }}</span>
                </p>
            </div>
        @endforeach
    </div>
@endsection
