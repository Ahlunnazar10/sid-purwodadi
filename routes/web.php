<?php

use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminKelolaController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\DashboardAspirasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\JenisKelaminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManajemenUserController;
use App\Http\Controllers\NelayanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PerkawinanController;
use App\Http\Controllers\PerkebunanController;
use App\Http\Controllers\PertanianController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TambakController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\WilayahController;
use App\Models\Agama;
use App\Models\Artikel;
use App\Models\Aspirasi;
use App\Models\JenisKelamin;
use App\Models\Kategori;
use App\Models\Nelayan;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Perkawinan;
use App\Models\Perkebunan;
use App\Models\Pertanian;
use App\Models\Tambak;
use App\Models\User;
use App\Models\Wilayah;
use Illuminate\Support\Facades\Route;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;

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
    return view('profil', [
        "title" => "Profil"
    ]);
});
Route::get('/sejarah', function () {
    return view('sejarah', [
        "title" => "Sejarah"
    ]);
});
Route::get('/karakter', function () {
    return view('karakter', [
        "title" => "Karakteristik"
    ]);
});
Route::get('/peta', function () {
    return view('peta', [
        'tambaks' => Tambak::all(),
        'pertanians' => Pertanian::all(),
        'perkebunans' => Perkebunan::all(),
        'nelayans' => Nelayan::all(),
        "title" => "Peta & Potensi Desa"
    ]);
});
Route::get('/wisata', function () {
    return view('wisata', [
        "title" => "Wisata"
    ]);
});
// End Route Profile

// Route Pemerintah
Route::get('/pemerintah', function () {
    return view('pemerintah', [
        "title" => "Pemerintah Desa"
    ]);
});
Route::get('/visimisi', function () {
    return view('visimisi', [
        "title" => "Visi & Misi"
    ]);
});
Route::get('/struktur', function () {
    return view('struktur', [
        "title" => "Struktur Desa"
    ]);
});
Route::get('/bpd', function () {
    return view('bpd', [
        "title" => "BPD Purwodadi"
    ]);
});

// End Route Pemerintah

// Route Pelayanan
Route::get('/layanan', function () {
    return view('layanan', [
        "title" => "Pelayanan"
    ]);
});
Route::get('/pelayanansurat', function () {
    return view('pelayanansurat', [
        "title" => "Pelayanan Surat"
    ]);
});
Route::get('/dokumen', function () {
    return view('dokumen', [
        "title" => "Layanan Dokumen"
    ]);
});
Route::get('/suratonline', function () {
    return view('suratonline', [
        "title" => "Permohonan Surat"
    ]);
});

// End Route Pelayanan

// Route Data Desa
Route::get('/wilayah', function () {
    return view('wilayah', [
        'wilayahs' => Wilayah::all(),
        "title" => "Wilayah Administrasi"
    ]);
});
Route::get('/pendidikan', function () {
    return view('pendidikan', [
        'pendidikans' => Pendidikan::all(),
        "title" => "Data Pendidikan"
    ]);
});
Route::get('/pekerjaan', function () {
    return view('pekerjaan', [
        'pekerjaans' => Pekerjaan::all(),
        "title" => "Data Pekerjaan"
    ]);
});
Route::get('/agama', function () {
    return view('agama', [
        'agamas' => Agama::all(),
        "title" => "Data Agama"
    ]);
});
Route::get('/perkawinan', function () {
    return view('perkawinan', [
        'perkawinans' => Perkawinan::all(),
        "title" => "Data Perkawinan"
    ]);
});
Route::get('/jeniskelamin', function () {
    return view('jeniskelamin', [
        'jeniskelamins' => JenisKelamin::all(),
        "title" => "Data Jenis Kelamin"
    ]);
});

//End Route Data Desa

//Route Berita Desa
Route::get('/beritadesa', [ArtikelController::class, 'index']);

//halaman tampilan berita
Route::get('/beritadesa/{artikel:slug}', [ArtikelController::class, 'show']);

Route::get('/kategories/{kategori:slug}', function (Kategori $kategori) {
    return view('kategori', [
        'title' => $kategori->name,
        'berita' => $kategori->artikel->load('kategori', 'author'),
        'kategori' => $kategori->name
    ]);
});

Route::get('/penulis/{author:username}', function (User $author) {
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
Route::get('/dashboard-easpirasi', [DashboardAspirasiController::class, 'index'])->middleware('admin');

Route::get('/dashboard-easpirasi/{aspirasi:id}', [DashboardAspirasiController::class, 'show'])->middleware('admin');

Route::post('/dashboard-easpirasi/{aspirasi:id}', [DashboardAspirasiController::class, 'destroy'])->middleware('admin');

// Create


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/verify', [VerifyController::class, 'index'])->name('verify')->middleware('guest');

Route::get('/dashboard-manajemen-user', [AdminKelolaController::class, 'index'])->name('admin')->middleware('AdminStatus');
Route::get('/dashboard-manajemen-user/{user_id}/verify', [AdminKelolaController::class, 'verify'])->name('admin')->middleware('AdminStatus');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'], ['verify' => true]);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'beritadesa' => Artikel::all(),
        'kategoris' => Kategori::all(),
        'aspirasis' => Aspirasi::all(),
        'users' => User::whereNull('verified_at')->get()
    ]);
})->middleware('UserStatus');

// Route::resource('/dashboard/berita', DashboardArtikelController::class)->middleware('auth');

Route::get('/dashboard-beritadesa', [DashboardController::class, 'index'])->middleware('auth')->name('index.berita');
// Show
Route::get('/dashboard-beritadesa/{artikel:slug}', [DashboardController::class, 'show'])->middleware('auth');
// Delete
Route::post('/dashboard-beritadesa/{artikel:slug}', [DashboardController::class, 'destroy'])->middleware('auth');

// Update
Route::get('/dashboard-beritadesa/{artikel:slug}/edit', [DashboardController::class, 'edit'])->middleware('auth');
Route::post('/dashboard-beritadesa/{artikel:slug}/edit', [DashboardController::class, 'update'])->middleware('auth');

// Create
Route::get('/dashboard-beritadesa-create', [DashboardController::class, 'create'])->middleware('auth');
Route::post('/dashboard-beritadesa-create', [DashboardController::class, 'store']);

// Kategori Admin 
Route::get('/dashboard-kategories', [AdminKategoriController::class, 'index'])->middleware('auth');

// Show Kategori
Route::get('/dashboard-kategories/{kategori:slug}', [AdminKategoriController::class, 'show'])->middleware('auth');

// Create Kategori
Route::get('/dashboard-kategori-create', [AdminKategoriController::class, 'create'])->middleware('auth');
Route::post('/dashboard-kategori-create', [AdminKategoriController::class, 'store'])->middleware('auth');

// Delete kategori
Route::post('dashboard-kategories/{kategori:slug}', [AdminKategoriController::class, 'destroy'])->middleware('auth');

// Update/edit kategori
Route::get('dashboard-kategories/{kategori:slug}/edit', [AdminKategoriController::class, 'edit'])->middleware('auth');
Route::post('dashboard-kategories/{kategori:slug}/edit', [AdminKategoriController::class, 'update'])->middleware('auth');

// DATA DESA :
// Wilayah Administrasi :
Route::get('/dashboard-wilayah', [WilayahController::class, 'index'])->middleware('admin');

// Show
Route::get('/dashboard-wilayah/{wilayah:id}', [WilayahController::class, 'show'])->middleware('admin');

// Create
Route::get('/dashboard-wilayah-create', [WilayahController::class, 'create'])->middleware('admin');
Route::post('/dashboard-wilayah-create', [WilayahController::class, 'store']);

// Delete
Route::post('/dashboard-wilayah/{wilayah:id}', [WilayahController::class, 'destroy'])->middleware('admin');

// Update
Route::get('/dashboard-wilayah/{wilayah:id}/edit', [WilayahController::class, 'edit'])->middleware('admin');
Route::post('/dashboard-wilayah/{wilayah:id}/edit', [WilayahController::class, 'update'])->middleware('admin');

// DATA DESA :
// Pendidikan :
Route::get('/dashboard-pendidikan', [PendidikanController::class, 'index'])->middleware('admin');

// Show
Route::get('/dashboard-pendidikan/{pendidikan:id}', [PendidikanController::class, 'show'])->middleware('admin');

// Create
Route::get('/dashboard-pendidikan-create', [PendidikanController::class, 'create'])->middleware('admin');
Route::post('/dashboard-pendidikan-create', [PendidikanController::class, 'store']);

// Delete
Route::post('/dashboard-pendidikan/{pendidikan:id}', [PendidikanController::class, 'destroy'])->middleware('admin');

// Update
Route::get('/dashboard-pendidikan/{pendidikan:id}/edit', [PendidikanController::class, 'edit'])->middleware('admin');
Route::post('/dashboard-pendidikan/{pendidikan:id}/edit', [PendidikanController::class, 'update'])->middleware('admin');

// DATA DESA :
// Pekerjaan :
Route::get('/dashboard-pekerjaan', [PekerjaanController::class, 'index'])->middleware('admin');

// Show
Route::get('/dashboard-pekerjaan/{pekerjaan:id}', [PekerjaanController::class, 'show'])->middleware('admin');

// Create
Route::get('/dashboard-pekerjaan-create', [PekerjaanController::class, 'create'])->middleware('admin');
Route::post('/dashboard-pekerjaan-create', [PekerjaanController::class, 'store']);

// Delete
Route::post('/dashboard-pekerjaan/{pekerjaan:id}', [PekerjaanController::class, 'destroy'])->middleware('admin');

// Update
Route::get('/dashboard-pekerjaan/{pekerjaan:id}/edit', [PekerjaanController::class, 'edit'])->middleware('admin');
Route::post('/dashboard-pekerjaan/{pekerjaan:id}/edit', [PekerjaanController::class, 'update'])->middleware('admin');

// DATA DESA :
// Agama :
Route::get('/dashboard-agama', [AgamaController::class, 'index'])->middleware('admin');

// Show
Route::get('/dashboard-agama/{agama:id}', [AgamaController::class, 'show'])->middleware('admin');

// Create
Route::get('/dashboard-agama-create', [AgamaController::class, 'create'])->middleware('admin');
Route::post('/dashboard-agama-create', [AgamaController::class, 'store']);

// Delete
Route::post('/dashboard-agama/{agama:id}', [AgamaController::class, 'destroy'])->middleware('admin');

// Update
Route::get('/dashboard-agama/{agama:id}/edit', [AgamaController::class, 'edit'])->middleware('admin');
Route::post('/dashboard-agama/{agama:id}/edit', [AgamaController::class, 'update'])->middleware('admin');

// DATA DESA :
// Perkawinan :
Route::get('/dashboard-perkawinan', [PerkawinanController::class, 'index'])->middleware('admin');

// Show
Route::get('/dashboard-perkawinan/{perkawinan:id}', [PerkawinanController::class, 'show'])->middleware('admin');

// Create
Route::get('/dashboard-perkawinan-create', [PerkawinanController::class, 'create'])->middleware('admin');
Route::post('/dashboard-perkawinan-create', [PerkawinanController::class, 'store']);

// Delete
Route::post('/dashboard-perkawinan/{perkawinan:id}', [PerkawinanController::class, 'destroy'])->middleware('admin');

// Update
Route::get('/dashboard-perkawinan/{perkawinan:id}/edit', [PerkawinanController::class, 'edit'])->middleware('admin');
Route::post('/dashboard-perkawinan/{perkawinan:id}/edit', [PerkawinanController::class, 'update'])->middleware('admin');

// DATA DESA :
// Jenis Kelamin :
Route::get('/dashboard-jeniskelamin', [JenisKelaminController::class, 'index'])->middleware('admin');

// Show
Route::get('/dashboard-jeniskelamin/{jeniskelamin:id}', [JenisKelaminController::class, 'show'])->middleware('admin');

// Create
Route::get('/dashboard-jeniskelamin-create', [JenisKelaminController::class, 'create'])->middleware('admin');
Route::post('/dashboard-jeniskelamin-create', [JenisKelaminController::class, 'store']);

// Delete
Route::post('/dashboard-jeniskelamin/{jeniskelamin:id}', [JenisKelaminController::class, 'destroy'])->middleware('admin');

// Update
Route::get('/dashboard-jeniskelamin/{jeniskelamin:id}/edit', [JenisKelaminController::class, 'edit'])->middleware('admin');
Route::post('/dashboard-jeniskelamin/{jeniskelamin:id}/edit', [JenisKelaminController::class, 'update'])->middleware('admin');

// POTENSI DESA :
// Tambak Ikan :
Route::get('/dashboard-tambak', [TambakController::class, 'index'])->middleware('auth');

// Show
Route::get('/dashboard-tambak/{tambak:id}', [TambakController::class, 'show'])->middleware('auth');

// Create
Route::get('/dashboard-tambak-create', [TambakController::class, 'create'])->middleware('auth');
Route::post('/dashboard-tambak-create', [TambakController::class, 'store']);

// Delete
Route::post('/dashboard-tambak/{tambak:id}', [TambakController::class, 'destroy'])->middleware('auth');

// Update
Route::get('/dashboard-tambak/{tambak:id}/edit', [TambakController::class, 'edit'])->middleware('auth');
Route::post('/dashboard-tambak/{tambak:id}/edit', [TambakController::class, 'update'])->middleware('auth');

// Pertanian :
Route::get('/dashboard-pertanian', [PertanianController::class, 'index'])->middleware('auth');

// Show
Route::get('/dashboard-pertanian/{pertanian:id}', [PertanianController::class, 'show'])->middleware('auth');

// Create
Route::get('/dashboard-pertanian-create', [PertanianController::class, 'create'])->middleware('auth');
Route::post('/dashboard-pertanian-create', [PertanianController::class, 'store']);

// Delete
Route::post('/dashboard-pertanian/{pertanian:id}', [PertanianController::class, 'destroy'])->middleware('auth');

// Update
Route::get('/dashboard-pertanian/{pertanian:id}/edit', [PertanianController::class, 'edit'])->middleware('auth');
Route::post('/dashboard-pertanian/{pertanian:id}/edit', [PertanianController::class, 'update'])->middleware('auth');

// Perkebunan :
Route::get('/dashboard-perkebunan', [PerkebunanController::class, 'index'])->middleware('auth');

// Show
Route::get('/dashboard-perkebunan/{perkebunan:id}', [PerkebunanController::class, 'show'])->middleware('auth');

// Create
Route::get('/dashboard-perkebunan-create', [PerkebunanController::class, 'create'])->middleware('auth');
Route::post('/dashboard-perkebunan-create', [PerkebunanController::class, 'store']);

// Delete
Route::post('/dashboard-perkebunan/{perkebunan:id}', [PerkebunanController::class, 'destroy'])->middleware('auth');

// Update
Route::get('/dashboard-perkebunan/{perkebunan:id}/edit', [PerkebunanController::class, 'edit'])->middleware('auth');
Route::post('/dashboard-perkebunan/{perkebunan:id}/edit', [PerkebunanController::class, 'update'])->middleware('auth');

// Nelayan :
Route::get('/dashboard-nelayan', [NelayanController::class, 'index'])->middleware('auth');

// Show
Route::get('/dashboard-nelayan/{nelayan:id}', [NelayanController::class, 'show'])->middleware('auth');

// Create
Route::get('/dashboard-nelayan-create', [NelayanController::class, 'create'])->middleware('auth');
Route::post('/dashboard-nelayan-create', [NelayanController::class, 'store']);

// Delete
Route::post('/dashboard-nelayan/{nelayan:id}', [NelayanController::class, 'destroy'])->middleware('auth');

// Update
Route::get('/dashboard-nelayan/{nelayan:id}/edit', [NelayanController::class, 'edit'])->middleware('auth');
Route::post('/dashboard-nelayan/{nelayan:id}/edit', [NelayanController::class, 'update'])->middleware('auth');

// email :
Route::get('/email', [EmailController::class, 'kirim']);

Route::get('/emailAspirasi', [EmailController::class, 'aspirasikirim']);

Route::get('/notifikasi', [EmailController::class, 'notifikasi']);
