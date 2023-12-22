@extends('layouts.layout')
@section('title','Добавить фильм')
@section('content')

    @if ($errors->any())
        <section>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </section>
    @endif
    @if (session('success'))
        <section>
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </section>
    @endif
    <section>
        <form method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="addNewMovie">
            <h2>Добавить новый фильм</h2>
            <div class="form-group">
                <label for="name">Название:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="franchise">Франшиза:</label>
                <select name="id_franchise" id="franchise">
                    <option value="null"></option>
                    <?php foreach ($franchises as $franchise): ?>
                    <option value="<?= $franchise['id'] ?>"><?= $franchise['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="imdb">Рейтинг IMDb:</label>
                <input type="text" name="rating_imdb" id="imdb" required>
                <label for="kp">Рейтинг Кинопоиска:</label>
                <input type="text" name="rating_kp" id="kp" required>
            </div>
            <div class="form-group">
                <label for="poster">Постер:</label>
                <input type="file" name="poster" id="poster">
            </div>
            <div class="form-group">
                <label for="year">Год создания:</label>
                <input type="text" name="year" id="year" required>
            </div>
            <div class="form-group">
                <label for="country">Страна:</label>
                <input type="text" name="country" id="country" required>
            </div>
            <div class="form-group">
                <label for="genre_one">Жанры:</label>
                <select name="genre_id_one">
                    <option value="">Первый</option>
                    <?php foreach ($genres as $genre): ?>
                    <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="genre_id_two">
                    <option value="">Второй</option>
                    <?php foreach ($genres as $genre): ?>
                    <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="genre_id_three">
                    <option value="">Третий</option>
                    <?php foreach ($genres as $genre): ?>
                    <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="budget">Бюджет:</label>
                <input type="text" name="budget" id="budget" required>
            </div>
            <div class="form-group">
                <label for="age">Возрастное ограничение:</label>
                <input type="text" name="age" id="age" required>
            </div>
            <div class="form-group">
                <label for="time">Длительность:</label>
                <input type="text" name="time" id="time" required>
            </div>
            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea type="text" name="description" id="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="trailer">Трейлер:</label>
                <input type="text" name="trailer" id="trailer" required>
            </div>
            <div class="form-group">
                <label for="video">Видео:</label>
                <input type="text" name="video" id="video" required>
            </div>
            <div class="form-group">
                <label for="episodes">Количество эпизодов:</label>
                <input type="text" name="episodes" id="episodes" required>
            </div>
            <div class="form-group">
                <label for="type">Тип:</label>
                <select name="type" required>
                    <option value="movie">Фильм</option>
                    <option value="tv-series">Сериал</option>
                    <option value="cartoon">Мультфильм</option>
                </select>
            </div>
            <a href="{{ route('add-movie.create') }}"><button type="submit">Добавить</button></a>
        </form>
    </section>

@endsection
