<?php

namespace App\Http\Controllers;

use App\Mail\AdminAspirasi;
use Illuminate\Http\Request;
use App\Models\Aspirasi;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailAspirasi;

class AspirasiController extends Controller
{
    public function create()
    {
        return view('easpirasi.index', [
            'easpirasi' => Aspirasi::all(),
            'title' => "E-Aspirasi"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|numeric|digits:16',
            'nama' => 'required',
            'email' => 'required|email:dns',
            'ktp' => 'required|image|file|max:1024',
            'alamat' => 'required',
            'kontak' => 'required',
            'kategori' => 'required',
            'aspirasi' => 'required',
            'pendukung' => 'image|file|max:1024'
        ]);

        if ($request->file('ktp')) {
            if ($request->images) {
                Storage::delete($request->images);
            }
            $validatedData['ktp'] = $request->file('ktp')->store('ktp');
        }

        if ($request->file('pendukung')) {
            if ($request->images) {
                Storage::delete($request->images);
            }
            $validatedData['pendukung'] = $request->file('pendukung')->store('pendukung');
        }

        $aspirasi = Aspirasi::create($validatedData);

        Mail::to($aspirasi->email)->send(new EmailAspirasi());

        Mail::to($aspirasi->kategori)->send(new AdminAspirasi());

        // ophscwpbtyjhwxvd
        // zbeteaxceushwyln

        // Mail::raw('Terimakasih '.$aspirasi->nama, function ($message) use($aspirasi) {
        //     $message->from('sid-purwodadi@gmail.com', 'SID-PURWODADI');
        //     $message->to($aspirasi->email, $aspirasi->nama);
        //     $message->subject('Aspirasi Anda telah Terkirim!');
        // });


        return redirect('/easpirasi')->with('success', 'Aspirasi Anda telah terkirim, selanjutnya akan kami proses. Terimakasih!');
    }

    public function cek(Request $request)
    {
        return view('easpirasi.cek', [
            'easpirasi' => Aspirasi::all(),
            'title' => "Cek E-Aspirasi"
        ]);
    }

    public function track(Request $request, Aspirasi $aspirasi)
    {

        if ($request->has('nik')) {
            return view('easpirasi.track', [
                'easpirasi' => Aspirasi::where('nik', $request->input('nik'))->get(),
                'title' => "Cek E-Aspirasi"
            ]);
        }
    }
}
