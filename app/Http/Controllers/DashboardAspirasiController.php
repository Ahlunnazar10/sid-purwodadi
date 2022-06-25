<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardAspirasiController extends Controller
{
    public function index()
    {
        return view('dashboard.easpirasi.index',[
            'easpirasis' => Aspirasi::all()
        ]);
    }

    public function show(Aspirasi $aspirasi)
    {
        return view('dashboard.easpirasi.show', [
            "aspirasi" => $aspirasi
            // Route::get('/dashboard/beritadesa/{artikel:slug}');
        ]);
    }

    public function destroy(Aspirasi $aspirasi)
    {
        if($aspirasi->ktp) {
            Storage::delete($aspirasi->ktp);
            }
            if($aspirasi->pendukung) {
                Storage::delete($aspirasi->pendukug);
                }
        Aspirasi::destroy($aspirasi->id);

        return redirect('/dashboard-easpirasi')->with('success', 'Aspirasi telah selesai diproses!, Terimakasih');
    }
}
