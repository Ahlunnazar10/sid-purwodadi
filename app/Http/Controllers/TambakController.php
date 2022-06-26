<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tambak;

class TambakController extends Controller
{
    public function index() {
        return view('dashboard.potensiTambak.index', [
            'tambaks' => Tambak::all()
        ]);
    }

    public function show(Tambak $tambak)
    {
        return view('dashboard.potensiTambak.show', [
            'tambak' => $tambak
        ]);
    }

    public function create(Request $request, Tambak $tambak)
    {
        return view('dashboard.potensiTambak.create',[
            'tambaks' => Tambak::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis' => 'required|max:255',
            'volume' => 'required',
            'luas' => 'required',
            'perusahaan' => 'required'
        ]);

        Tambak::create($validatedData);

        return redirect('/dashboard-tambak')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Tambak $tambak)
    {
        Tambak::destroy($tambak->id);

        return redirect('/dashboard-tambak')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Tambak $tambak)
    {
        return view('dashboard.potensiTambak.edit',[
            'tambak' => $tambak
        ]);
    }

    public function update(Request $request, Tambak $tambak)
    {
        $rules = [
            'jenis' => 'required|max:255',
            'volume' => 'required',
            'luas' => 'required',
            'perusahaan' => 'required'
        ];


        $validatedData = $request->validate($rules);

        Tambak::where('id', $tambak->id)
                    ->update($validatedData);

        return redirect('/dashboard-tambak')->with('success', 'Data berhasil diperbarui!');

    }
}
