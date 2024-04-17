@extends('layouts.layout')
@section('title','Главная')
@section('content')

    <section class="movies__type">
        <h2>{{ $type }}</h2>
        <div class="type__wrapper">
            @foreach ($movies as $movie)
                <div class="type__item">
                    <img src="{{ asset('') . '/' . $movie->poster }}" alt="Постер">
                    <div class="type__item-info">
                        <a href="{{ route('movie.show', ['movie' => $movie->id]) }}">{{ $movie->name }}</a>
                        <span>{{ $movie->year }}</span>
                    </div>
                </div>
            @endforeach  
        </div>
    </section>

@endsection