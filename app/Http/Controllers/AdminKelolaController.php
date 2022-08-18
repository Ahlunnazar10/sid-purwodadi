<?php

namespace App\Http\Controllers;

use App\Mail\VerifikasiBerhasil;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class AdminKelolaController extends Controller
{
    public function index()
    {
        $users = User::whereNull('verified_at')->get();

        return view('dashboard.ManajemenUser.index', compact('users'), [
            'title' => 'Manajemen User'
        ]);
    }

    public function verify($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['verified_at' => now()]);

        Mail::to($user->email)->send(new VerifikasiBerhasil());

        return redirect('/dashboard-manajemen-user')->withMessage('Akun telah berhasil diverifikasi!');
    }
}
