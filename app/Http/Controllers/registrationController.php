<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function index(){
        return view("registration.index");
    }
    public function store(Request $request){
        $validated = $request->validate([
            'email' => ['required', 'string', 'max:100', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'max:50', 'confirmed'],
            ]);
        $user = User::query()->create(['email' => $validated['email'],
            'password' => bcrypt($validated['password'])]);

        if($user){
            auth("web")->login($user);
        }

        return redirect()->route('home');
    }
}
