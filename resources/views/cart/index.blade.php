@extends("layouts.base")
@section("title") Корзина @endsection
@section("css") <link rel="stylesheet" href="{{url('css/cart.css')}}" /> @endsection

@section("main")
    <div class="main__cart">
        <div class="cart__title">
            Ваша корзина
        </div>
        <div class="rows">
            @foreach($product as $item)
                <div class="block">
                    <img src="{{url("storage/" . $item->img)}}">
                    <div class="cart-block">
                        <p>{{$item->name}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="cart_btn">
            <input type="button" name="btn_cart" class="cart__btn"  value="Заказать">
        </div>
    </div>

@endsection

@section("js")
    <script src="{{url("js/cart.js")}}"></script>
@endsection
