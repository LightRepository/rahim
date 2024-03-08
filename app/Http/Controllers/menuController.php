<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function index()
    {
        $products1 = Product::query()->where("category", "=", "Завтраки")->get();;
        $products2 = Product::query()->where("category", "=", "Вторые блюда")->get();;
        $products3 = Product::query()->where("category", "=", "Супы")->get();;
        $products4 = Product::query()->where("category", "=", "Салаты")->get();;
        $products5 = Product::query()->where("category", "=", "Десерты")->get();;
        $products6 = Product::query()->where("category", "=", "Напитки")->get();;
        return view("menu/index", compact("products1", "products2", "products3", "products4", "products5", "products6"));
    }
}
