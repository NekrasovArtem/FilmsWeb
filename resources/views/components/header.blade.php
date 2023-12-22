<header>
    <section class="header-wrapper">
        <a href="./">
            <img src="{{ asset('storage') . '/image/logo.svg' }}" alt="Логотип">
        </a>
        <div class="header__links">
            <a href="./films">Фильмы</a>
            <a href="./series">Сериалы</a>
            <a href="./cartoons">Мультфильмы</a>
            @guest()
            <a href="{{ route('registration') }}">Регистрация</a>
            <a href="{{ route('login') }}">Войти</a>
            @endguest
            @auth()
            <a href="{{ route('profile') }}">Профиль</a>
            <a class="profile_btn-wrapper" href="{{ route('logout') }}"><button class="profile__btn" type="submit">Выйти</button></a>
            @endauth
        </div>
    </section>
</header>
