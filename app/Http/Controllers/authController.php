<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function index(){
        return view("auth.index");
    }

    public function store(Request $request){
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:100'],
            'password' => ['required', 'string', 'min:5', 'max:50']
        ]);
        if (auth("web")->attempt($validated)) {
            return redirect()->route("home");
        } else {
            return redirect()->route("auth")->withErrors(["email" => "Пользователь не найден"]);
        }

    }
}
