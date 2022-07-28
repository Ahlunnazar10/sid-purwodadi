<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Mail\EmailAspirasi;
use App\Models\User;
use App\Models\Aspirasi;
use App\Notifications\Informasi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function kirim ()
    {
        Mail::to('ahlun.nzr22@gmail.com')->send(new Email());
    }
    public function aspirasikirim ()
    {
        $text = [
            'subject' => 'Aspirasi Telah Terkirim'
        ];

        Mail::to('ahlun.nzr22@gmail.com')->send(new EmailAspirasi($text));
    }

    public function notifikasi()
    {
        $user = User::first();
        
        $data = [
            'line1' => 'Aspirasi Telah Terkirim',
            'action' => 'Silahkan Cek Aspirasi Anda',
            'line2' => 'Terimakasih telah menyampaikan Aspirasi Anda'
        ];

        $user->notify(new Informasi($data));
    }
}
