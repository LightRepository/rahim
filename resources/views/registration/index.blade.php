@extends("layouts.base")
@section("title") Авторизация @endsection
@section("css") <link rel="stylesheet" href="{{url('css/auth.css')}}" /> @endsection

@section("main")
    <div class="main__form">
        <form class="form" action="{{route("registration.store")}}" method="POST">
            @csrf
            @if($errors->any())
                <ul class="errors">
                    @foreach($errors->all() as $message)
                        <li>
                            {{$message}}
                        </li>
                    @endforeach
                </ul>
            @endif
            <input type="email" name="email"  placeholder="Введите email">
            <input type="password" name="password"  placeholder="Введите пароль">
            <input type="password" name="password_confirmation"  placeholder="Подтверждение пароля">
            <input type="submit" value="Зарегистрироваться" class="submit-btn">
            <a href="{{route("auth")}}" class="reg-auth">У меня уже есть аккаунт</a>
        </form>
    </div>
@endsection
