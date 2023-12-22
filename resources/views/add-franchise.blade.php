@extends('layouts.layout')
@section('title', 'Добавить франшизу')
@section('content')

    <section>
        <form method="post">
            @csrf
            <h2>Добавить франшизу</h2>
            <input name="franchise" id="franchise" placeholder="Название" required />
            <a href="{{ route('add-franchise.store') }}"><button class="profile__btn" type="submit">Добавить</button></a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </form>
    </section>

@endsection