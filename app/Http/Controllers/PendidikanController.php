<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index() {
        return view('dashboard.dataPendidikan.index', [
            'pendidikans' => Pendidikan::all()
        ]);
    }

    public function create(Request $request, Pendidikan $pendidikan)
    {
        return view('dashboard.dataPendidikan.create',[
            'pendidikans' => Pendidikan::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tidak_sekolah' => 'required',
            'tamat_sd' => 'required',
            'tamat_smp' => 'required',
            'tamat_sma' => 'required',
            'strata1' => 'required',
            'strata2' => 'required'
        ]);

        Pendidikan::create($validatedData);

        return redirect('/dashboard-pendidikan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Pendidikan $pendidikan)
    {
        Pendidikan::destroy($pendidikan->id);

        return redirect('/dashboard-pendidikan')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Pendidikan $pendidikan)
    {
        return view('dashboard.dataPendidikan.edit',[
            'pendidikan' => $pendidikan
        ]);
    }

    public function update(Request $request, Pendidikan $pendidikan)
    {
        $rules = [
            'tidak_sekolah' => 'required',
            'tamat_sd' => 'required',
            'tamat_smp' => 'required',
            'tamat_sma' => 'required',
            'strata1' => 'required',
            'strata2' => 'required'
        ];


        $validatedData = $request->validate($rules);

        Pendidikan::where('id', $pendidikan->id)
                    ->update($validatedData);

        return redirect('/dashboard-pendidikan')->with('success', 'Data berhasil diperbarui!');

    }
}
