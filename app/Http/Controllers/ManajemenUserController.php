<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManajemenUserController extends Controller
{
    public function index()
    {
        return view('dashboard.ManajemenUser.index', [
            'users' => User::all()
        ]);
    }
}
