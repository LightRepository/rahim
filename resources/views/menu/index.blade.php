@extends("layouts.base")
@section("title") Меню @endsection
@section("css") <link rel="stylesheet" href="{{url('css/menu.css')}}" /> @endsection

@section("main")
    <div class="columns-block">
        <div class="main__title">Завтраки</div>
        <div class="rows">
            @foreach($products1 as $product)
                <div class="block">
                    <img src="{{url("storage/" . $product->img)}}">
                    <div class="cart-block">
                        <p>{{$product->name}}</p>
                        <div class="cart-add" data-id="{{$product->id}}"><img src="{{url("img/cart.svg")}}"></div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="columns-block">
        <div class="main__title">Вторые блюда</div>
        <div class="rows">
            @foreach($products2 as $product)
                <div class="block">
                    <img src="{{url("storage/" . $product->img)}}">
                    <div class="cart-block">
                        <p>{{$product->name}}</p>
                        <div class="cart-add" data-id="{{$product->id}}"><img src="{{url("img/cart.svg")}}"></div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="columns-block">
        <div class="main__title">Супы</div>
        <div class="rows">
            @foreach($products3 as $product)
                <div class="block">
                    <img src="{{url("storage/" . $product->img)}}">
                    <div class="cart-block">
                        <p>{{$product->name}}</p>
                        <div class="cart-add" data-id="{{$product->id}}"><img src="{{url("img/cart.svg")}}"></div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="columns-block">
        <div class="main__title">Салаты</div>
        <div class="rows">
            @foreach($products4 as $product)
                <div class="block">
                    <img src="{{url("storage/" . $product->img)}}">
                    <div class="cart-block">
                        <p>{{$product->name}}</p>
                        <div class="cart-add" data-id="{{$product->id}}"><img src="{{url("img/cart.svg")}}"></div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="columns-block">
        <div class="main__title">Десерты</div>
        <div class="rows">
            @foreach($products5 as $product)
                <div class="block">
                    <img src="{{url("storage/" . $product->img)}}">
                    <div class="cart-block">
                        <p>{{$product->name}}</p>
                        <div class="cart-add" data-id="{{$product->id}}"><img src="{{url("img/cart.svg")}}"></div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="columns-block">
        <div class="main__title">Напитки</div>
        <div class="rows">
            @foreach($products6 as $product)
                <div class="block">
                    <img src="{{url("storage/" . $product->img)}}">
                    <div class="cart-block">
                        <p>{{$product->name}}</p>
                        <div class="cart-add" data-id="{{$product->id}}"><img src="{{url("img/cart.svg")}}"></div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
@section("js")
    <script src="{{url("js/menu.js")}}"></script>
@endsection
