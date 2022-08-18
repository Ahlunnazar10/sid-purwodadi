<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\VerifiesEmails;
use App\Mail\EmailAspirasi;
use App\Mail\Registrasi;
use App\Mail\VerifyEmail;
use App\Notifications\Informasi;
use App\Notifications\UserBaru;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    use VerifiesEmails;

    public function index()
    {
        return view('register.index', [
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

        $verify = User::where('verify', 1)->first();
        Mail::to('sidpurwodadi1@gmail.com')->send(new VerifyEmail());
        // if ($verify) {
        //     $verify->notify(new UserBaru($verify));
        // }

        $register = User::create($validatedData);

        $text = [
            'subject' => 'Aspirasi Terkirim!'
        ];
        Mail::to($register->email)->send(new Registrasi($text));

        return redirect('/register')->with('berhasil', 'Silahkan menunggu verifikasi dari Admin untuk dapat login ke dalam sistem!');
    }
}
