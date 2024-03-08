<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function store() {
        auth("web")->logout();
        return redirect()->route('home');
    }
}
