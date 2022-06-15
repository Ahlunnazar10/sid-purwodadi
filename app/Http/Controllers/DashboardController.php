<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.berita.index',[
            'beritadesa' => Artikel::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function show(Artikel $artikel)
    {
        return view('dashboard.berita.show', [
            "berita" => $artikel
            // Route::get('/dashboard/beritadesa/{artikel:slug}');
        ]);
    }

    public function create(Request $request)
    {
        return view('dashboard.berita.create',[
            'kategoris' => Kategori::all()
        ]);
        // Route::get('/dashboard/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'kategori_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if($request->file('image')){
            if($request->images) {
                Storage::delete($request->images);
            }
            $validatedData['image'] = $request->file('image')->store('image');
        }

        $validatedData['slug'] = Str::slug($request->title, '-');
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Artikel::create($validatedData);

        return redirect('/dashboard/beritadesa')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function destroy(Artikel $artikel)
    {
        if($artikel->image) {
            Storage::delete($artikel->image);
            }
        Artikel::destroy($artikel->id);

        return redirect('/dashboard/beritadesa')->with('success', 'Berita berhasil dihapus!');
    }

    public function edit(Artikel $artikel)
    {
        return view('dashboard.berita.edit',[
            'berita' => $artikel,
            'kategoris' => Kategori::all()
        ]);
    }

    public function update(Request $request, Artikel $artikel)
    {
        $rules = [
            'title' => 'required|max:255',
            'kategori_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];


        $validatedData = $request->validate($rules);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('image');
        }

        $validatedData['slug'] = Str::slug($request->title, '-');
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 150);

        Artikel::where('id', $artikel->id)
                    ->update($validatedData);

        return redirect('/dashboard/beritadesa')->with('success', 'Berita berhasil diperbarui!');

    }
}
