@extends('dashboard.tampilan.kerangka')

@section('container')
<style>
    #konten {
    color: #055160;
}
</style>

<main id="konten">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hallo {{ auth()->user()->name }}, Selamat Datang di Halaman Dasboard</h1>
    </div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3" id="card">
    <div class="col">
        <div class="card mb-3 shadow-sm" style="border-radius:15px">
            <div class="row g-0">
              <div class="col-md-6" id="img-dashboard">
                <img src="/img/berita.png" class="img-fluid rounded-start mt-2 p-4" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h4 class="card-title mt-3" style="font-weight: 500">Total Berita :</h4>
                    <p class="card-text fs-4">{{ $beritadesa->count('id') }} Berita</p>  
                  <p><a class="btn btn-outline-secondary" href="/dashboard-beritadesa">Lihat detail &raquo;</a></p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col">
        <div class="card mb-3 shadow-sm" style="border-radius:15px">
            <div class="row g-0">
              <div class="col-md-6" id="img-dashboard">
                <img src="/img/application.png" class="img-fluid rounded-start mt-2 p-4" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h4 class="card-title mt-3" style="font-weight: 500">Kategori :</h4>
                  <p class="card-text fs-4">{{ $kategoris->count('id') }} Kategori</p>  
                  <p><a class="btn btn-outline-secondary" href="/dashboard-kategories">Lihat detail &raquo;</a></p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col">
        <div class="card mb-3 shadow-sm" style="border-radius:15px">
            <div class="row g-0">
              <div class="col-md-6" id="img-dashboard">
                <img src="/img/berita.png" class="img-fluid rounded-start mt-2 p-4" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h4 class="card-title mt-3" style="font-weight: 500">Kategori :</h4>
                  <p class="card-text fs-4">280</p>  
                  <p><a class="btn btn-outline-secondary" href="#">Lihat detail &raquo;</a></p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col ms-auto">
        <div class="card mb-3 shadow-sm" style="border-radius:15px">
            <div class="row g-0">
              <div class="col-md-6" id="img-dashboard">
                <img src="/img/folder.png" class="img-fluid rounded-start mt-2 p-4" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h4 class="card-title mt-3" style="font-weight: 500">Data Desa :</h4>
                  <p class="card-text fs-4">6 Data</p>  
                  <p><a class="btn btn-outline-secondary" href="/dashboard-wilayah">Lihat detail &raquo;</a></p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col me-auto mb-5">
        <div class="card mb-3 shadow-sm" style="border-radius:15px">
            <div class="row g-0">
              <div class="col-md-6" id="img-dashboard">
                <img src="/img/text.png" class="img-fluid rounded-start mt-2 p-4" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h4 class="card-title mt-3" style="font-weight: 500">Aspirasi :</h4>
                  <p class="card-text fs-4">{{ $aspirasis->count('id') }} Aspirasi</p>  
                  <p><a class="btn btn-outline-secondary" href="/dashboard-easpirasi">Lihat detail &raquo;</a></p>
                </div>
              </div>
            </div>
          </div>
    </div>
</main>

    
@endsection

