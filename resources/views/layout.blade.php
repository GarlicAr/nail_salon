<!doctype html>
<html lang="{{ str_replace('_', '–', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nails By Kristiāna</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bodoni+Moda+SC:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&display=swap" rel="stylesheet"></head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<body>
    <nav class="navbar">
        <div class="logo"><a href="/"><img src="{{ asset('svgs/logo-nail.svg') }}"></a></div>
        <div class="navbar-buttons  bodoni-moda-sc-popop2">
            <div class="menu-toggle">☰</div>
            <ul>
                <button class="btn toggle"><a href="/">{{ __('navbar.home') }}</a></button>
                <button class="btn" id="portfolio"><a href="{{ route('portfolio.index') }}">{{ __('navbar.portfolio') }}</a></button>
                <button class="btn"><a href="{{ route('about.index') }}">{{ __('navbar.about') }}</a></button>
                <button class="btn"><a href="{{ route('appointment.index') }}">{{ __('navbar.appointment') }}</a></button>
                <button class="btn"><a href="#contacts">{{ __('navbar.contact') }}</a></button>
                <div class="language-switch">
                    <a href="{{ route('locale.switch', 'en') }}"><img src="{{ asset('images/flags/en.png') }}" alt="English" width="40"></a>
                    <a href="{{ route('locale.switch', 'lv') }}"><img src="{{ asset('images/flags/lv.png') }}" alt="Latvian" width="40"></a>
                </div>
            </ul>
        </div>
    </nav>
@yield('content')


<script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
