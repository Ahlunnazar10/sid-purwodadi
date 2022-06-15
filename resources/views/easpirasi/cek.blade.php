@extends('tampilan.kerangka')

@section('container')
<div class="container" id="text">
  <button type="button" class="btn" id="info"><i class="bi bi-megaphone-fill"></i> Info</button><marquee direction=”left” class="pt-1">Selamat datang di sistem informasi desa & e-aspirasi desa purwodadi</marquee>
</div>
<div class="container">
  <section class="jumbotron text-center mb-5 mt-3">
      <div id="konten">
          <h1 class="text-center">E-ASPIRASI</h1>
          <p class="text-center mb-1" style="font-size: 13px"><i class="bi bi-bookmarks-fill"></i> : Peraturan Desa</p>
          <hr>
          
          @if (session()->has('success'))
            <div class="alert alert-success col-lg-12" role="alert">
              {{ session('success') }}
            </div> 
          @endif  

          <strong class="text-center d-block">Cek Aspirasi Anda disini :</strong>
          <div class="col-lg-5 mt-2" style="margin: 0 auto">
            <form method="POST" action="/easpirasi-cek">
              @csrf
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukan Nomor Induk Kependudukan Anda" name="nik" required autofocus value="{{ old('nik') }}">
                <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
              </div>
            </form>
          </div>
            
        </div>

      </div>
  </section>
</div> 
@endsection
    
