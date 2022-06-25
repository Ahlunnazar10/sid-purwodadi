<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Artikel;
use App\Models\User;
use Illuminate\Support\Str;

class AdminKategoriController extends Controller
{
    public function index() {
        return view('dashboard.kategoris.index', [
            'kategoris' => Kategori::all()
        ]);
    }

    public function show(Kategori $kategori, Artikel $artikel, User $author)
    {
        return view('dashboard.kategoris.show', [
            "kategoris" => $kategori,
            "beritadesa" => $artikel,
            "author" => $author
        ]);
    }

    public function create(Request $request, Kategori $kategori)
    {
        return view('dashboard.kategoris.create',[
            'kategori' => $kategori
        ]);
        // Route::get('/dashboard/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        $validatedData['slug'] = Str::slug($request->name, '-');

        Kategori::create($validatedData);

        return redirect('/dashboard-kategories')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);

        return redirect('/dashboard-kategories')->with('success', 'Berita berhasil dihapus!');
    }

    public function edit(Kategori $kategori)
    {
        return view('dashboard.kategoris.edit',[
            'kategoris' => Kategori::all()
        ]);
    }

    public function update(Request $request, Kategori $kategori)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        $validatedData['slug'] = Str::slug($request->name, '-');

        Kategori::where('id', $kategori->id)
                    ->update($validatedData);

        return redirect('/dashboard-kategories')->with('success', 'Kategori berhasil diperbarui!');
    }


}
