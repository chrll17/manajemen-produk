<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }
    public function showLogin(){
         return view('auth.login');
    }
    public function register(Request $request){
        $validated=$request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed'
        ]);

        $user=User::create($validated);
        Auth::login($user);

        return redirect()->route('showLogin');
    }
    public function login(Request $request){
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('index');
        }
        throw ValidationException::withMessages([
            'email'=>'email/password salah'
        ]);
    }
}
