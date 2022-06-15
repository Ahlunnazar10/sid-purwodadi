<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wilayah;

class WilayahController extends Controller
{
    public function index() {
        return view('dashboard.dataWilayah.index', [
            'wilayahs' => Wilayah::all()
        ]);
    }

    public function show(Wilayah $wilayah)
    {
        return view('dashboard.dataWilayah.show', [
            'wilayah' => $wilayah
        ]);
    }

    public function create(Request $request, Wilayah $wilayah)
    {
        return view('dashboard.dataWilayah.create',[
            'wilayahs' => Wilayah::all()
        ]);
        // Route::get('/dashboard/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'dusun' => 'required|max:255',
            'ka_dusun' => 'required',
            'j_rt' => 'required',
            'j_kk' => 'required',
            'j_jiwa' => 'required',
            'j_pria' => 'required',
            'j_wanita' => 'required'
        ]);

        Wilayah::create($validatedData);

        return redirect('/dashboard/wilayah')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Wilayah $wilayah)
    {
        Wilayah::destroy($wilayah->id);

        return redirect('/dashboard/wilayah')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Wilayah $wilayah)
    {
        return view('dashboard.dataWilayah.edit',[
            'wilayah' => $wilayah
        ]);
    }

    public function update(Request $request, Wilayah $wilayah)
    {
        $rules = [
            'dusun' => 'required|max:255',
            'ka_dusun' => 'required',
            'j_rt' => 'required',
            'j_kk' => 'required',
            'j_jiwa' => 'required',
            'j_pria' => 'required',
            'j_wanita' => 'required'
        ];


        $validatedData = $request->validate($rules);

        Wilayah::where('id', $wilayah->id)
                    ->update($validatedData);

        return redirect('/dashboard/wilayah')->with('success', 'Data berhasil diperbarui!');

    }
}
