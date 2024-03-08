@extends("layouts.base")
@section("title") Кабинет @endsection
@section("css") <link rel="stylesheet" href="{{url('css/cabinet.css')}}" /> @endsection

@section("main")
    <div class="main__cab">
        <div class="main_row">
            <div class="main_title">Завтраки</div>
            <form class="form" action="{{route("product.store", ['category' => "Завтраки"])}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Название">
                <input type="file" name="file">
                <input type="submit" value="Создать">
            </form>
        </div>
        <div class="main_row">
            <div class="main_title">Вторые блюда</div>
            <form class="form" action="{{route("product.store", ['category' => "Вторые блюда"])}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Название">
                <input type="file" name="file">
                <input type="submit" value="Создать">
            </form>
        </div>
        <div class="main_row">
            <div class="main_title">Супы</div>
            <form class="form" action="{{route("product.store", ['category' => "Супы"])}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Название">
                <input type="file" name="file">
                <input type="submit" value="Создать">
            </form>
        </div>
        <div class="main_row">
            <div class="main_title">Салаты</div>
            <form class="form" action="{{route("product.store", ['category' => "Салаты"])}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Название">
                <input type="file" name="file">
                <input type="submit" value="Создать">
            </form>
        </div>
        <div class="main_row">
            <div class="main_title">Десерты</div>
            <form class="form" action="{{route("product.store", ['category' => "Десерты"])}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Название">
                <input type="file" name="file">
                <input type="submit" value="Создать">
            </form>
        </div>
        <div class="main_row">
            <div class="main_title">Напитки</div>
            <form class="form" action="{{route("product.store", ['category' => "Напитки"])}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Название">
                <input type="file" name="file">
                <input type="submit" value="Создать">
            </form>
        </div>
    </div>
@endsection
