<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function index()
    {
        return view('login.verify', [
            'title' => 'verify'
        ]);
    }
}
