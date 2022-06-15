<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;

class ArtikelController extends Controller
{
    public function index()
    {         
        return view('beritadesa',[
            "title" => "Berita Desa",
            "beritadesa" => Artikel::latest()->filter(request(['cari']))->paginate(7)
        ]);
    }
    public function show(Artikel $artikel)
    {
        return view('berita', [
            "title" => "Halaman Berita",
            "berita" => $artikel
        
        ]);
    }
}
