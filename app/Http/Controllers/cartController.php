<?php

namespace App\Http\Controllers;

use App\Models\Cart_for_users;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    public function index()
    {
        $id = Auth::id();

        $products = Cart_for_users::query()->where("user_id", "=", "$id")->get();
        $arr_id = [];
        foreach ($products as $product){
           array_push($arr_id, $product->product_id);
        }

        $product = Product::query()->whereIn("id", $arr_id)->get();
        return view("cart/index", compact("product"));
    }

    public function store(Request $request)
    {
        $product_id = $request->id;
        $user_id = Auth::id();
        $product = Cart_for_users::query()->create([
            'user_id' => $user_id,
            'product_id' => $product_id,
        ]);
        return response("$product_id");
    }
}
