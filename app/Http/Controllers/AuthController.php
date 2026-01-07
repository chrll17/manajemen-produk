<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }
    public function showLogin(){
         return view('auth.login');
    }
}
