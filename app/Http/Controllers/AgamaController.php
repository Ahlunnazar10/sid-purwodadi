<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agama;

class AgamaController extends Controller
{
    public function index() {
        return view('dashboard.dataAgama.index', [
            'agamas' => Agama::all()
        ]);
    }

    public function create(Request $request, Agama $agama)
    {
        return view('dashboard.dataAgama.create',[
            'agamas' => Agama::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'islam' => 'required',
            'kristen' => 'required',
            'hindu' => 'required',
            'budha' => 'required'
        ]);

        Agama::create($validatedData);

        return redirect('/dashboard-agama')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Agama $agama)
    {
        Agama::destroy($agama->id);

        return redirect('/dashboard-agama')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Agama $agama)
    {
        return view('dashboard.dataAgama.edit',[
            'agama' => $agama
        ]);
    }

    public function update(Request $request, Agama $agama)
    {
        $rules = [
            'islam' => 'required',
            'kristen' => 'required',
            'hindu' => 'required',
            'budha' => 'required'
        ];


        $validatedData = $request->validate($rules);

        Agama::where('id', $agama->id)
                    ->update($validatedData);

        return redirect('/dashboard-agama')->with('success', 'Data berhasil diperbarui!');

    }
}
