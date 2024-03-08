<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('css/layouts.css')}}" />
    @yield("css")
    <title>@yield("title")</title>
</head>
<body>
<header>
    <div class="header__menu">
        <ul class="menu-row topmenu">
            <li><a href="{{route("home")}}">Главная</a></li>
            <li><a href="{{route("about")}}">О нас</a></li>
        </ul>

            <img src="{{url('img/logo.svg')}}">
        <ul class="menu-row topmenu">
            <li><a href="{{route("menu")}}">Меню</a></li>
            @auth("web")
                <li><a href="
                @if(auth()->user()->is_admin)
                    {{route("cabinet")}}
                    @else
                    {{route("cart")}}
                @endif
                "
                 class="down">Личный кабинет</a>
                    <ul class="submenu">
                        <li><a href="{{route("cart")}}">Корзина</a></li>
                        <li><a href="{{route("logout")}}">Выйти из аккаунта</a></li>
                    </ul>
                </li>
            @endauth
            @guest("web")
                <li><a href="{{route("auth")}}">Войти</a>
            @endguest
        </ul>
    </div>
</header>
<main>
    @yield("main")
</main>
<footer>
    <div class="footer__menu">
        <ul>
            <li>+7-912-444-66-00</li>
            <li>Пн-Пт с 9-00 до 20-00 Сб-Вс Выходой</li>
        </ul>
    </div>
</footer>
</body>
{{--<script src="{{url("js/layout.js")}}"></script>--}}
@yield("js")
</html>
