<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perkawinan;

class PerkawinanController extends Controller
{
    public function index() {
        return view('dashboard.dataPerkawinan.index', [
            'perkawinans' => Perkawinan::all()
        ]);
    }

    public function create(Request $request, Perkawinan $perkawinan)
    {
        return view('dashboard.dataPerkawinan.create',[
            'perkawinans' => Perkawinan::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'belum_menikah' => 'required',
            'menikah' => 'required',
            'cerai_hidup' => 'required',
            'cerai_mati' => 'required'
        ]);

        Perkawinan::create($validatedData);

        return redirect('/dashboard/perkawinan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Perkawinan $perkawinan)
    {
        Perkawinan::destroy($perkawinan->id);

        return redirect('/dashboard/perkawinan')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Perkawinan $perkawinan)
    {
        return view('dashboard.dataPerkawinan.edit',[
            'perkawinan' => $perkawinan
        ]);
    }

    public function update(Request $request, Perkawinan $perkawinan)
    {
        $rules = [
            'belum_menikah' => 'required',
            'menikah' => 'required',
            'cerai_hidup' => 'required',
            'cerai_mati' => 'required'
        ];


        $validatedData = $request->validate($rules);

        Perkawinan::where('id', $perkawinan->id)
                    ->update($validatedData);

        return redirect('/dashboard/perkawinan')->with('success', 'Data berhasil diperbarui!');

    }
}
