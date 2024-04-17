@extends('layouts.layout')
@section('title', 'Профиль')
@section('content')

    <section>
        <div class="profile">
            @if (Auth::user()->image)
                <img src="{{ asset('') . '/' . Auth::user()->image }}" alt="Аватарка">
            @else
                <img src="{{ asset('') . '/uploads/undefined-picture-avatara-films-web.webp' }}" alt="">
            @endif
            <div class="profile__info">
                <input class="profile__input" type="text" disabled value="{{ Auth::user()->name }}">
                <input class="profile__input" type="text" disabled value="{{ Auth::user()->surname }}">
                <input class="profile__input" type="text" disabled value="{{ Auth::user()->phone }}">
                <input class="profile__input" type="text" disabled value="{{ Auth::user()->email }}">
                <a href="{{ route('update') }}"><button class="profile__btn">Редактировать</button></a>
            </div>
            @if (Auth::user()->role == 'admin')
            <a class="admin-link" href="{{ route('add-franchise') }}"><button class="profile__btn" type="submit">Добавить франшизу</button></a>
            <a class="admin-link" href="{{ route('add-movie') }}"><button class="profile__btn" type="submit">Добавить фильм</button></a>
            @endif
            <a class="profile_btn-wrapper" href="{{ route('logout') }}"><button class="profile__btn" type="submit">Выйти</button></a>
        </div>
    </section>

@endsection