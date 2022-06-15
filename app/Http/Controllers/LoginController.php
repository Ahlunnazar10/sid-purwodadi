<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',[
            'title' => 'Login',
        ]);
    }

    public function store(Request $request)
    {
        $login = $request->validate([
            'username' => 'required|min:5|max:255',
            'password' => 'required'
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginError', 'Login gagal, cek kembali data Anda!');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
