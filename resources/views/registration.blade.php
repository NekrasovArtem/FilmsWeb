@extends('layouts.layout')
@section('title','Регистрация')
@section('content')

    <form class="form-registration" action="{{ route('registration.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Регистрация</h2>
        <input type="hidden" name="form-registration">
        <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Имя">
        <input type="text" name="surname" id="surname"  placeholder="Фамилия">
        <input type="tel" name="phone" id="phone" placeholder="Телефон">
        <input type="email" name="email" id="email"  placeholder="Почта">
        <input type="file" name="image">
        <input type="password" name="password" id="password"  placeholder="Пароль">
        <input type="password" name="password_repeat" id="password_repeat"  placeholder="Повторите пароль">
        <button type="submit">Зарегистрироваться</button>
        @if (session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </form>

@endsection
