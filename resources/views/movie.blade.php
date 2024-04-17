@extends('layouts.layout')
@section('title','Войти')
@section('content')

    <section class="movie">
        <div class="movie__wrapper">
            <div class="movie__head">
                <div class="movie__poster">
                    <img src="{{ asset('') . '/' . $movie->poster }}" alt="">
                </div>
                <div class="movie__info">
                    <div class="movie__title">
                        <h3>{{ $movie->name }}</h3>
                        <div class="movie__rating">
                            <div class="movie__rating-kp">
                                <img src="{{ asset('public/storage') . '/image/icon-kp.svg' }}" alt="Кинопоиск">
                                <span>{{ $movie->rating_kp }}</span>
                            </div>
                            <div class="movie__rating-imdb">
                                <img src="{{ asset('public/storage') . '/image/icon-imdb.svg' }}" alt="IMDb">
                                <span>{{ $movie->rating_imdb }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="movie__about">
                        <span>Информация:</span>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Год производства</td>
                                    <td>{{ $movie->year }}</td>
                                </tr>
                                <tr>
                                    <td>Страна</td>
                                    <td>{{ $movie->country }}</td>
                                </tr>
                                <tr>
                                    <td>Жанры</td>
                                    <td>{{ $movie->genre_one .' '. $movie->genre_two .' '. $movie->genre_three }}</td>
                                </tr>
                                <tr>
                                    <td>Бюджет</td>
                                    <td>${{ $movie->budget }}</td>
                                </tr>
                                <tr>
                                    <td>Время</td>
                                    <td>{{ $movie->time }} мин.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="movie__actions">
                <a href=""><button class="movie__viewed">Буду смотреть</button></a>
                <a href=""><button class="movie__favorite">В избранное</button></a>
            </div>
            <div class="movie__description">
                <p>{{ $movie->description }}</p>
            </div>
        </div>
    </section>

@endsection
