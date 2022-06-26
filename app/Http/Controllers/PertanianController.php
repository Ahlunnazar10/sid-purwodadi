<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanian;

class PertanianController extends Controller
{
    public function index() {
        return view('dashboard.potensiPertanian.index', [
            'pertanians' => Pertanian::all()
        ]);
    }

    public function show(Pertanian $pertanian)
    {
        return view('dashboard.potensiPertanian.show', [
            'pertanian' => $pertanian
        ]);
    }

    public function create(Request $request, Pertanian $pertanian)
    {
        return view('dashboard.potensiPertanian.create',[
            'pertanians' => Pertanian::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis' => 'required|max:255',
            'volume' => 'required',
            'luas' => 'required',
            'jumlah' => 'required'
        ]);

        Pertanian::create($validatedData);

        return redirect('/dashboard-pertanian')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Pertanian $pertanian)
    {
        Pertanian::destroy($pertanian->id);

        return redirect('/dashboard-pertanian')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Pertanian $pertanian)
    {
        return view('dashboard.potensiPertanian.edit',[
            'pertanian' => $pertanian
        ]);
    }

    public function update(Request $request, Pertanian $pertanian)
    {
        $rules = [
            'jenis' => 'required|max:255',
            'volume' => 'required',
            'luas' => 'required',
            'jumlah' => 'required'
        ];


        $validatedData = $request->validate($rules);

        Pertanian::where('id', $pertanian->id)
                    ->update($validatedData);

        return redirect('/dashboard-pertanian')->with('success', 'Data berhasil diperbarui!');

    }
}
