<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perkebunan;

class PerkebunanController extends Controller
{
    public function index() {
        return view('dashboard.potensiPerkebunan.index', [
            'perkebunans' => Perkebunan::all()
        ]);
    }

    public function show(Perkebunan $perkebunan)
    {
        return view('dashboard.potensiPerkebunan.show', [
            'perkebunan' => $perkebunan
        ]);
    }

    public function create(Request $request, Perkebunan $perkebunan)
    {
        return view('dashboard.potensiPerkebunan.create',[
            'perkebunans' => Perkebunan::all()
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

        Perkebunan::create($validatedData);

        return redirect('/dashboard-perkebunan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Perkebunan $perkebunan)
    {
        Perkebunan::destroy($perkebunan->id);

        return redirect('/dashboard-perkebunan')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Perkebunan $perkebunan)
    {
        return view('dashboard.potensiPerkebunan.edit',[
            'perkebunan' => $perkebunan
        ]);
    }

    public function update(Request $request, Perkebunan $perkebunan)
    {
        $rules = [
            'jenis' => 'required|max:255',
            'volume' => 'required',
            'luas' => 'required',
            'jumlah' => 'required'
        ];


        $validatedData = $request->validate($rules);

        Perkebunan::where('id', $perkebunan->id)
                    ->update($validatedData);

        return redirect('/dashboard-perkebunan')->with('success', 'Data berhasil diperbarui!');

    }
}
