<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\VerifiesEmails;
use App\Mail\EmailAspirasi;
use App\Mail\Registrasi;
use App\Notifications\Informasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    use VerifiesEmails;

    public function index()
    {
        return view('register.index',[
            'title' => 'Register',
        ]);
    }
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $register = User::create($validatedData);

        $text = [
            'subject' => 'Aspirasi Terkirim!'
        ];
        Mail::to($register->email)->send(new Registrasi($text));

        return redirect('/register')->with('berhasil', 'Silahkan cek notifikasi email Anda untuk melakukan login ke sistem!');
    }
}
