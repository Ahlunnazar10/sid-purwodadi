<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerjaan;

class PekerjaanController extends Controller
{
    public function index() {
        return view('dashboard.dataPekerjaan.index', [
            'pekerjaans' => Pekerjaan::all()
        ]);
    }

    public function create(Request $request, Pekerjaan $pekerjaan)
    {
        return view('dashboard.dataPekerjaan.create',[
            'pekerjaans' => Pekerjaan::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tidak_bekerja' => 'required',
            'wiraswasta' => 'required',
            'petani' => 'required',
            'irt' => 'required',
            'guru' => 'required',
            'pedagang' => 'required',
            'pelajar' => 'required',
            'supir' => 'required',
            'pensiunan' => 'required',
            'pns' => 'required'
        ]);

        Pekerjaan::create($validatedData);

        return redirect('/dashboard-pekerjaan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Pekerjaan $pekerjaan)
    {
        Pekerjaan::destroy($pekerjaan->id);

        return redirect('/dashboard-pekerjaan')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Pekerjaan $pekerjaan)
    {
        return view('dashboard.dataPekerjaan.edit',[
            'pekerjaan' => $pekerjaan
        ]);
    }

    public function update(Request $request, Pekerjaan $pekerjaan)
    {
        $rules = [
            'tidak_bekerja' => 'required',
            'wiraswasta' => 'required',
            'petani' => 'required',
            'irt' => 'required',
            'guru' => 'required',
            'pedagang' => 'required',
            'pelajar' => 'required',
            'supir' => 'required',
            'pensiunan' => 'required',
            'pns' => 'required'
        ];


        $validatedData = $request->validate($rules);

        Pekerjaan::where('id', $pekerjaan->id)
                    ->update($validatedData);

        return redirect('/dashboard-pekerjaan')->with('success', 'Data berhasil diperbarui!');

    }
}
