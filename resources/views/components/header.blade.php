<header>
    <div class="header-wrapper">
        <a href="/">
            <img src="{{ asset('public/storage') . '/image/logo.svg' }}" alt="Логотип">
        </a>
        <div class="header__links">
            <a href="{{ route('type.showType', ['type' => 'movie']) }}">Фильмы</a>
            <a href="{{ route('type.showType', ['type' => 'tv-series']) }}">Сериалы</a>
            <a href="{{ route('type.showType', ['type' => 'cartoon']) }}">Мультфильмы</a>
            <a href="{{ route('type.showType', ['type' => 'anime']) }}">Аниме</a>
            @guest()
            <a href="{{ route('registration') }}">Регистрация</a>
            <a href="{{ route('login') }}">Войти</a>
            @endguest
            @auth()
            <a href="{{ route('profile') }}">Профиль</a>
            <a class="profile_btn-wrapper" href="{{ route('logout') }}"><button class="profile__btn" type="submit">Выйти</button></a>
            @endauth
        </div>
    </div>
</header>
