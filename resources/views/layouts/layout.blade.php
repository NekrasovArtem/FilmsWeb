<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="FilmsWeb - онлайн-кинотеатр" />
    <meta property="og:description" content="Фильмы, сериалы и мультфильмы." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/resources/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>@yield('title')</title>
</head>
<body>
    @include('components.header')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/resources/js/swiper.js"></script>
</body>
</html>