<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('css/layouts.css')}}" />
    <link rel="stylesheet" href="{{url('css/home.css')}}" />
    <title>Главная</title>
</head>
<body>

<main>
    <div class="main__upper">
        <img src="{{url("img/logo.svg")}}">
        <ul class="upper__menu">
            <li><a href="{{route("home")}}">Главная</a></li>
            <li><a href="{{route("about")}}">О нас</a></li>
            <li><a href="{{route("menu")}}">Меню</a></li>
        </ul>
        <div class="upper__title">Кафе-столовая</div>
        <div class="upper__subtitle">Новые летнее меню доступно с 12-ого сентября</div>
    </div>
</main>

</body>
{{--<script src="{{url("js/layout.js")}}"></script>--}}

</html>
