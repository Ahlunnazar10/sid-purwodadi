<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nelayan;

class NelayanController extends Controller
{
    public function index() {
        return view('dashboard.potensiNelayan.index', [
            'nelayans' => Nelayan::all()
        ]);
    }

    public function show(Nelayan $nelayan)
    {
        return view('dashboard.potensiNelayan.show', [
            'nelayan' => $nelayan
        ]);
    }

    public function create(Request $request, Nelayan $nelayan)
    {
        return view('dashboard.potensiNelayan.create',[
            'nelayans' => Nelayan::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis' => 'required|max:255',
            'volume' => 'required',
            'jumlah' => 'required'
        ]);

        Nelayan::create($validatedData);

        return redirect('/dashboard-nelayan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Nelayan $nelayan)
    {
        Nelayan::destroy($nelayan->id);

        return redirect('/dashboard-nelayan')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Nelayan $nelayan)
    {
        return view('dashboard.potensiNelayan.edit',[
            'nelayan' => $nelayan
        ]);
    }

    public function update(Request $request, Nelayan $nelayan)
    {
        $rules = [
            'jenis' => 'required|max:255',
            'volume' => 'required',
            'jumlah' => 'required'
        ];


        $validatedData = $request->validate($rules);

        Nelayan::where('id', $nelayan->id)
                    ->update($validatedData);

        return redirect('/dashboard-nelayan')->with('success', 'Data berhasil diperbarui!');

    }
}
