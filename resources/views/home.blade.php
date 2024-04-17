@extends('layouts.layout')
@section('title','Главная')
@section('content')

    <section class="poster">
        <img src="{{ asset('') . '/' . $randomMovie->poster  }}" alt="Баннер случайного тайтла" />
        <div class="poster__wrapper">
            <h2>{{ $randomMovie->name  }}</h2>
            <p>{{ mb_substr($randomMovie->description, 0, 160) . '...'  }}</p>
            <div class="poster__rating">
                <div class="poster__rating-kp">
                    <img src="{{ '/uploads/icon-kp.svg' }}" alt="Кинопоиск">
                    <span>{{ $randomMovie->rating_kp }}</span>
                </div>
                <div class="poster__rating-imdb">
                    <img src="{{ '/uploads/icon-imdb.svg' }}" alt="IMDb">
                    <span>{{ $randomMovie->rating_imdb }}</span>
                </div>
            </div>
            <a href="{{ route('movie.show', ['movie' => $randomMovie->id]) }}"><button>Подробнее</button></a>
        </div>
    </section>

    <section>
        <div class="slider__head">
            <h2>Фильмы</h2>
        </div>
        <div class="swiper swiper-films">
            <div class="navigation">
                <button class="swiper-films-prev">
                    <img src="{{ asset('uploads') . '/left-chevron.png' }}" alt="Предудыщий фильм">
                </button>
            </div>
            <div class="swiper-wrapper">
                @foreach ($films as $film)
                <div class="swiper-slide">
                    <img src="{{ asset('') . '/' . $film->poster }}" alt="Постер">
                    <div class="slide-info">
                        <a href="{{ route('movie.show', ['movie' => $film->id]) }}">{{ $film->name }}</a>
                        <span>{{ $film->year }}</span>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="navigation">
                <button class="swiper-films-next">
                    <img src="{{ asset('uploads') . '/right-chevron.png' }}" alt="Следующий фильм">
                </button>
            </div>
        </div>
    </section>

    <section>
        <div class="slider__head">
            <h2>Сериалы</h2>
        </div>
        <div class="swiper swiper-serials">
            <div class="navigation">
                <button class="swiper-serials-prev">
                    <img src="{{ asset('uploads') . '/left-chevron.png' }}" alt="Предудыщий фильм">
                </button>
            </div>
            <div class="swiper-wrapper">
                @foreach ($serials as $serial)
                    <div class="swiper-slide">
                        <img src="{{ asset('') . '/' . $serial->poster }}" alt="Постер">
                        <div class="slide-info">
                            <a href="{{ route('movie.show', ['movie' => $serial->id]) }}">{{ $serial->name }}</a>
                            <span>{{ $serial->year }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="navigation">
                <button class="swiper-serials-next">
                    <img src="{{ asset('uploads') . '/right-chevron.png' }}" alt="Следующий фильм">
                </button>
            </div>
        </div>
    </section>

    <section>
        <div class="slider__head">
            <h2>Мульфильмы</h2>
        </div>
        <div class="swiper swiper-cartoons">
            <div class="navigation">
                <button class="swiper-cartoons-prev">
                    <img src="{{ asset('uploads') . '/left-chevron.png' }}" alt="Предудыщий фильм">
                </button>
            </div>
            <div class="swiper-wrapper">
                @foreach ($cartoons as $cartoon)
                    <div class="swiper-slide">
                        <img src="{{ asset('') . '/' . $cartoon->poster }}" alt="Постер">
                        <div class="slide-info">
                            <a href="{{ route('movie.show', ['movie' => $cartoon->id]) }}">{{ $cartoon->name }}</a>
                            <span>{{ $cartoon->year }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="navigation">
                <button class="swiper-cartoons-next">
                    <img src="{{ asset('uploads') . '/right-chevron.png' }}" alt="Следующий фильм">
                </button>
            </div>
        </div>
    </section>

    <section>
        <div class="slider__head">
            <h2>Аниме</h2>
        </div>
        <div class="swiper swiper-anime">
            <div class="navigation">
                <button class="swiper-anime-prev">
                    <img src="{{ asset('uploads') . '/left-chevron.png' }}" alt="Предудыщий фильм">
                </button>
            </div>
            <div class="swiper-wrapper">
                @foreach ($anime as $title)
                    <div class="swiper-slide">
                        <img src="{{ asset('') . '/' . $title->poster }}" alt="Постер">
                        <div class="slide-info">
                            <a href="{{ route('movie.show', ['movie' => $title->id]) }}">{{ $title->name }}</a>
                            <span>{{ $title->year }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="navigation">
                <button class="swiper-anime-next">
                    <img src="{{ asset('uploads') . '/right-chevron.png' }}" alt="Следующий фильм">
                </button>
            </div>
        </div>
    </section>

@endsection