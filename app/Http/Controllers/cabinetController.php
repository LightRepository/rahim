<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class cabinetController extends Controller
{
    public function index(){
        return view("cabinet/index");
    }
    public function store(Request $request){
        $file = $request->file("file")->store("uploads", "public");
        $product = Product::query()->create([
            "name" => $request->name,
            "category" => $request->category,
            "img" => $file,
        ]);

        return redirect("menu");
    }
}
