@extends('layouts.layout')
@section('title','Главная')
@section('content')

    <section>
        <div class="swiper swiper-films">
            <div class="swiper-wrapper">
                @foreach ($films as $film)
                <div class="swiper-slide">
                    <img src="{{ asset('storage') . '/' . $film->image }}" alt="Постер">
                    <span>{{ $film->country }}</span>
                    <a href="">{{ $film->name }}</a>
                    <div class="rating">
                        <span>{{ "IMDb:" . $film->rating_imdb }}</span>
                        <span>{{ "KP:" . $film->rating_kp }}</span>
                    </div>
                    <div>
                        <span>{{ $film->genre_id_one . " " . $film->genre_id_two . " " . $film->genre_id_three }}</span>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="navigation">
                <button class="swiper-films-prev">
                    <img src="" alt="">
                </button>
                <button class="swiper-films-next">
                    <img src="" alt="">
                </button>
            </div>
        </div>
        <div class="swiper swiper-serials">
            <div class="swiper-wrapper">
                {{-- @foreach ($serials as $serial)
                <div class="swiper-slide"></div>
                @endforeach --}}
            </div>
            <div class="navigation">
                <button class="swiper-serials-prev">
                    <img src="" alt="">
                </button>
                <button class="swiper-serials-next">
                    <img src="" alt="">
                </button>
            </div>
        </div>
        <div class="swiper swiper-cartoons">
            <div class="swiper-wrapper">
                {{-- @foreach ($cartoons as $cartoon)
                <div class="swiper-slide"></div>
                @endforeach --}}
            </div>
            <div class="navigation">
                <button class="swiper-cartoons-prev">
                    <img src="" alt="">
                </button>
                <button class="swiper-cartoons-next">
                    <img src="" alt="">
                </button>
            </div>
        </div>
    </section>

@endsection
