<?php

use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\DashboardAspirasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisKelaminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PerkawinanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WilayahController;
use App\Models\Agama;
use App\Models\Artikel;
use App\Models\Aspirasi;
use App\Models\JenisKelamin;
use App\Models\Kategori;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Perkawinan;
use App\Models\User;
use App\Models\Wilayah;
use Illuminate\Support\Facades\Route;
use Cviebrock\EloquentSluggable\Services\SlugService;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route Beranda
Route::get('/', function () {
    return view('beranda', [
        'beritadesa' => Artikel::all(),
        "title" => "Beranda"
    ]);
});

// Route Profile
Route::get('/profil', function () {
    return view('profil',[
        "title" => "Profil"
    ]);
});
Route::get('/sejarah', function () {
    return view('sejarah',[
        "title" => "Sejarah"
    ]);
});
Route::get('/karakter', function () {
    return view('karakter',[
        "title" => "Karakteristik"
    ]);
});
Route::get('/peta', function () {
    return view('peta',[
        "title" => "Peta"
    ]);
});
Route::get('/wisata', function () {
    return view('wisata',[
        "title" => "Wisata"
    ]);
});
// End Route Profile

// Route Pemerintah
Route::get('/pemerintah', function () {
    return view('pemerintah',[
        "title" => "Pemerintah Desa"
    ]);
});
Route::get('/visimisi', function () {
    return view('visimisi',[
        "title" => "Visi & Misi"
    ]);
});
Route::get('/struktur', function () {
    return view('struktur',[
        "title" => "Struktur Desa"
    ]);
});
Route::get('/bpd', function () {
    return view('bpd',[
        "title" => "BPD Purwodadi"
    ]);
});

// End Route Pemerintah

// Route Pelayanan
Route::get('/layanan', function () {
    return view('layanan',[
        "title" => "Pelayanan"
    ]);
});
Route::get('/pelayanansurat', function () {
    return view('pelayanansurat',[
        "title" => "Pelayanan Surat"
    ]);
});
Route::get('/dokumen', function () {
    return view('dokumen',[
        "title" => "Layanan Dokumen"
    ]);
});
Route::get('/suratonline', function () {
    return view('suratonline',[
        "title" => "Permohonan Surat"
    ]);
});

// End Route Pelayanan

// Route Data Desa
Route::get('/wilayah', function () {
    return view('wilayah',[
        'wilayahs' => Wilayah::all(),
        "title" => "Wilayah Administrasi"
    ]);
});
Route::get('/pendidikan', function () {
    return view('pendidikan',[
        'pendidikans' => Pendidikan::all(),
        "title" => "Data Pendidikan"
    ]);
});
Route::get('/pekerjaan', function () {
    return view('pekerjaan',[
        'pekerjaans' => Pekerjaan::all(),
        "title" => "Data Pekerjaan"
    ]);
});
Route::get('/agama', function () {
    return view('agama',[
        'agamas' => Agama::all(),
        "title" => "Data Agama"
    ]);
});
Route::get('/perkawinan', function () {
    return view('perkawinan',[
        'perkawinans' => Perkawinan::all(),
        "title" => "Data Perkawinan"
    ]);
});
Route::get('/jeniskelamin', function () {
    return view('jeniskelamin',[
        'jeniskelamins' => JenisKelamin::all(),
        "title" => "Data Jenis Kelamin"
    ]);
});

//End Route Data Desa

//Route Berita Desa
Route::get('/beritadesa', [ArtikelController::class, 'index']);

//halaman tampilan berita
Route::get('beritadesa/{artikel:slug}', [ArtikelController::class, 'show']);

Route::get('/kategories/{kategori:slug}', function(Kategori $kategori) {
    return view('kategori', [
        'title' => $kategori->name,
        'berita' => $kategori->artikel->load('kategori', 'author'),
        'kategori' => $kategori->name
    ]);
});

Route::get('/penulis/{author:username}', function(User $author) {
    return view('penulis', [
        'title' => 'Penulis Artikel',
        'author' => $author->name,
        'berita' => $author->artikel->load('kategori', 'author'),


    ]);
});


//end Berita desa

// Route E-Aspirasi
Route::get('/easpirasi', [AspirasiController::class, 'create']);
Route::post('/easpirasi', [AspirasiController::class, 'store']);

Route::get('/easpirasi-cek', [AspirasiController::class, 'cek']);
Route::post('/easpirasi-cek', [AspirasiController::class, 'track']);

// DASHBBOARD E-Aspirasi
Route::get('/dashboard/easpirasi', [DashboardAspirasiController::class, 'index'])->middleware('admin');

Route::get('/dashboard/easpirasi/{aspirasi:nik}', [DashboardAspirasiController::class, 'show'])->middleware('admin');

Route::post('/dashboard/easpirasi/{aspirasi:nik}', [DashboardAspirasiController::class, 'destroy'])->middleware('admin');

// Create


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index', [
        'beritadesa' => Artikel::all(),
        'kategoris' => Kategori::all(),
        'aspirasis' => Aspirasi::all()
    ]);
})->middleware('auth');

// Route::resource('/dashboard/berita', DashboardArtikelController::class)->middleware('auth');

Route::get('/dashboard/beritadesa', [DashboardController::class, 'index'])->middleware('auth');
// Show
Route::get('/dashboard/beritadesa/{artikel:slug}', [DashboardController::class, 'show'])->middleware('auth');
// Delete
Route::post('/dashboard/beritadesa/{artikel:slug}', [DashboardController::class, 'destroy'])->middleware('auth');

// Update
Route::get('/dashboard/beritadesa/{artikel:slug}/edit', [DashboardController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/beritadesa/{artikel:slug}/edit', [DashboardController::class, 'update'])->middleware('auth');

// Create
Route::get('/dashboard/beritadesa-create', [DashboardController::class, 'create'])->middleware('auth');
Route::post('/dashboard/beritadesa-create', [DashboardController::class, 'store']);

// Kategori Admin 
Route::get('/dashboard/kategories', [AdminKategoriController::class, 'index'])->middleware('admin');

// Show Kategori
Route::get('/dashboard/kategories/{kategori:slug}', [AdminKategoriController::class, 'show'])->middleware('admin');

// Create Kategori
Route::get('/dashboard/kategori-create', [AdminKategoriController::class, 'create'])->middleware('admin');
Route::post('/dashboard/kategori-create', [AdminKategoriController::class, 'store'])->middleware('admin');

// Delete kategori
Route::post('dashboard/kategories/{kategori:slug}', [AdminKategoriController::class, 'destroy'])->middleware('admin');

// Update/edit kategori
Route::get('dashboard/kategories/{kategori:slug}/edit', [AdminKategoriController::class, 'edit'])->middleware('admin');
Route::post('dashboard/kategories/{kategori:slug}/edit', [AdminKategoriController::class, 'update'])->middleware('admin');

// DATA DESA :
// Wilayah Administrasi :
Route::get('/dashboard/wilayah', [WilayahController::class, 'index'])->middleware('auth');

// Show
Route::get('/dashboard/wilayah/{wilayah:id}', [WilayahController::class, 'show'])->middleware('auth');

// Create
Route::get('/dashboard/wilayah-create', [WilayahController::class, 'create'])->middleware('auth');
Route::post('/dashboard/wilayah-create', [WilayahController::class, 'store']);

// Delete
Route::post('/dashboard/wilayah/{wilayah:id}', [WilayahController::class, 'destroy'])->middleware('auth');

// Update
Route::get('/dashboard/wilayah/{wilayah:id}/edit', [WilayahController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/wilayah/{wilayah:id}/edit', [WilayahController::class, 'update'])->middleware('auth');

// DATA DESA :
// Pendidikan :
Route::get('/dashboard/pendidikan', [PendidikanController::class, 'index'])->middleware('auth');

// Show
Route::get('/dashboard/pendidikan/{pendidikan:id}', [PendidikanController::class, 'show'])->middleware('auth');

// Create
Route::get('/dashboard/pendidikan-create', [PendidikanController::class, 'create'])->middleware('auth');
Route::post('/dashboard/pendidikan-create', [PendidikanController::class, 'store']);

// Delete
Route::post('/dashboard/pendidikan/{pendidikan:id}', [PendidikanController::class, 'destroy'])->middleware('auth');

// Update
Route::get('/dashboard/pendidikan/{pendidikan:id}/edit', [PendidikanController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/pendidikan/{pendidikan:id}/edit', [PendidikanController::class, 'update'])->middleware('auth');

// DATA DESA :
// Pekerjaan :
Route::get('/dashboard/pekerjaan', [PekerjaanController::class, 'index'])->middleware('auth');

// Show
Route::get('/dashboard/pekerjaan/{pekerjaan:id}', [PekerjaanController::class, 'show'])->middleware('auth');

// Create
Route::get('/dashboard/pekerjaan-create', [PekerjaanController::class, 'create'])->middleware('auth');
Route::post('/dashboard/pekerjaan-create', [PekerjaanController::class, 'store']);

// Delete
Route::post('/dashboard/pekerjaan/{pekerjaan:id}', [PekerjaanController::class, 'destroy'])->middleware('auth');

// Update
Route::get('/dashboard/pekerjaan/{pekerjaan:id}/edit', [PekerjaanController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/pekerjaan/{pekerjaan:id}/edit', [PekerjaanController::class, 'update'])->middleware('auth');

// DATA DESA :
// Agama :
Route::get('/dashboard/agama', [AgamaController::class, 'index'])->middleware('auth');

// Show
Route::get('/dashboard/agama/{agama:id}', [AgamaController::class, 'show'])->middleware('auth');

// Create
Route::get('/dashboard/agama-create', [AgamaController::class, 'create'])->middleware('auth');
Route::post('/dashboard/agama-create', [AgamaController::class, 'store']);

// Delete
Route::post('/dashboard/agama/{agama:id}', [AgamaController::class, 'destroy'])->middleware('auth');

// Update
Route::get('/dashboard/agama/{agama:id}/edit', [AgamaController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/agama/{agama:id}/edit', [AgamaController::class, 'update'])->middleware('auth');

// DATA DESA :
// Perkawinan :
Route::get('/dashboard/perkawinan', [PerkawinanController::class, 'index'])->middleware('auth');

// Show
Route::get('/dashboard/perkawinan/{perkawinan:id}', [PerkawinanController::class, 'show'])->middleware('auth');

// Create
Route::get('/dashboard/perkawinan-create', [PerkawinanController::class, 'create'])->middleware('auth');
Route::post('/dashboard/perkawinan-create', [PerkawinanController::class, 'store']);

// Delete
Route::post('/dashboard/perkawinan/{perkawinan:id}', [PerkawinanController::class, 'destroy'])->middleware('auth');

// Update
Route::get('/dashboard/perkawinan/{perkawinan:id}/edit', [PerkawinanController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/perkawinan/{perkawinan:id}/edit', [PerkawinanController::class, 'update'])->middleware('auth');

// DATA DESA :
// Jenis Kelamin :
Route::get('/dashboard/jeniskelamin', [JenisKelaminController::class, 'index'])->middleware('auth');

// Show
Route::get('/dashboard/jeniskelamin/{jeniskelamin:id}', [JenisKelaminController::class, 'show'])->middleware('auth');

// Create
Route::get('/dashboard/jeniskelamin-create', [JenisKelaminController::class, 'create'])->middleware('auth');
Route::post('/dashboard/jeniskelamin-create', [JenisKelaminController::class, 'store']);

// Delete
Route::post('/dashboard/jeniskelamin/{jeniskelamin:id}', [JenisKelaminController::class, 'destroy'])->middleware('auth');

// Update
Route::get('/dashboard/jeniskelamin/{jeniskelamin:id}/edit', [JenisKelaminController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/jeniskelamin/{jeniskelamin:id}/edit', [JenisKelaminController::class, 'update'])->middleware('auth');

