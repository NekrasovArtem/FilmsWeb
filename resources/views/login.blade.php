@extends('layouts.layout')
@section('title','Войти')
@section('content')

    <form class="form-auth" action="{{ route('login.store') }}" method="post">
        @csrf
        <h2>Авторизация</h2>
        <input type="hidden" name="form-auth">
        <input type="email" name="email" id="email" required value="{{ old('email') }}" placeholder="Почта">
        <input type="password" name="password" id="password" required placeholder="Пароль">
        <button type="submit">Войти</button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

@endsection
