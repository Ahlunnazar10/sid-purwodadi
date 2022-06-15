<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisKelamin;

class JenisKelaminController extends Controller
{
    public function index() {
        return view('dashboard.dataJenisKelamin.index', [
            'jeniskelamins' => JenisKelamin::all()
        ]);
    }

    public function create(Request $request, JenisKelamin $jeniskelamin)
    {
        return view('dashboard.dataJenisKelamin.create',[
            'jeniskelamins' => JenisKelamin::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pria' => 'required',
            'wanita' => 'required'
        ]);

        JenisKelamin::create($validatedData);

        return redirect('/dashboard/jeniskelamin')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(JenisKelamin $jeniskelamin)
    {
        JenisKelamin::destroy($jeniskelamin->id);

        return redirect('/dashboard/jeniskelamin')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(JenisKelamin $jeniskelamin)
    {
        return view('dashboard.dataJenisKelamin.edit',[
            'jeniskelamin' => $jeniskelamin
        ]);
    }

    public function update(Request $request, JenisKelamin $jeniskelamin)
    {
        $rules = [
            'pria' => 'required',
            'wanita' => 'required'
        ];


        $validatedData = $request->validate($rules);

        JenisKelamin::where('id', $jeniskelamin->id)
                    ->update($validatedData);

        return redirect('/dashboard/jeniskelamin')->with('success', 'Data berhasil diperbarui!');

    }
}
