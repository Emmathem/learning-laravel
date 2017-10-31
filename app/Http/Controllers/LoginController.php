<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $people = [];
//        $people = [
//            'Tayo', 'Tola', 'Ayo'
//        ];
        return view('login.login', compact('people'));
    }
}
