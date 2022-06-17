@extends('tampilan.kerangka')

@section('container')
<div class="container">
  <section class="jumbotron text-center mb-5 mt-3">
      <div id="konten">
          <h1 class="text-center">E-ASPIRASI</h1>
          <p class="text-center mb-1" style="font-size: 13px"><i class="bi bi-bookmarks-fill"></i> : Peraturan Desa</p>
          <hr>
          
          @if ($easpirasi->count())

          @if (session()->has('success'))
            <div class="alert alert-success col-lg-12" role="alert">
              {{ session('success') }}
            </div> 
          @endif  

          
          @foreach ($easpirasi as $aspirasi)
          <div class="col-lg-10 mt-5" id="form-input">
            <h5 class="text-center d-block">Cek Aspirasi Anda disini :</h5>
            <p class="text-center mb-3 fst-italic" style="font-size: 14px">Status : Aspirasi sedang dalam proses, mohon tetap pantau Aspirasi Anda sampai selesai.</p>
            <hr>
              <form method="" action="" enctype="multipart/form-data">
                @csrf
                   <div class="mb-3">
                     <label for="nik" class="form-label">Nomor NIK:</label>
                     <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required autofocus value="{{ $aspirasi->nik }}" placeholder="16 digit" disabled readonly>
                     @error('nik')
                       <div class="invalid-feedback text-start">
                         {{ $message }}
                       </div>
                     @enderror
                   </div>
                   <div class="mb-3">
                     <label for="nama" class="form-label">Nama Lengkap :</label>
                     <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ $aspirasi->nama }}" placeholder="Sesuai KTP" disabled readonly>
                     @error('nama')
                       <div class="invalid-feedback text-start">
                         {{ $message }}
                       </div>
                     @enderror
                   </div>
                   <div class="mb-3">
                     <label for="email" class="form-label">Email :</label>
                     <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ $aspirasi->email }}" placeholder="contoh@gmail.com" disabled readonly>
                     @error('email')
                       <div class="invalid-feedback text-start">
                         {{ $message }}
                       </div>
                     @enderror
                   </div>
                   <div class="mb-3">
                     <label for="ktp" class="form-label">Foto KTP :</label>
                     <div class="" style="width:300px; overflow:hidden">
                        <img src="{{ asset('storage/' . $aspirasi->ktp) }}" alt="Gambar Berita" class="img-fluid">
                    </div>
                   </div>
                   <div class="mb-3">
                     <label for="alamat" class="form-label">Alamat :</label>
                     <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ $aspirasi->alamat }}" placeholder="Sesuai KTP" disabled readonly>
                     @error('alamat')
                       <div class="invalid-feedback text-start">
                         {{ $message }}
                       </div>
                     @enderror
                   </div>
                   <div class="mb-3">
                     <label for="kontak" class="form-label">Nomor HP :</label>
                     <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" name="kontak" required autofocus value="{{ $aspirasi->kontak }}" disabled readonly>
                     @error('kontak')
                       <div class="invalid-feedback text-start">
                         {{ $message }}
                       </div>
                     @enderror
                   </div>
                   <div class="mb-3">
                     <label for="aspirasi" class="form-label">Aspirasi Anda :</label>
                       <input id="aspirasi" type="hidden" name="aspirasi" value="{{ $aspirasi->aspirasi }}">
                       <trix-editor input="aspirasi" style="background-color: white; pointer-events:none "></trix-editor>
                       @error('aspirasi')
                       <p class="text-danger text-start" style="font-size: 5px">
                         {{ $message }}
                       </p>
                     @enderror
                   </div>
                   <div class="mb-3">
                     <label for="pendukung" class="form-label">Bukti Pendukung :</label>
                     <div class="" style="width:300px; overflow:hidden">
                        <img src="{{ asset('storage/' . $aspirasi->pendukung) }}" alt="Gambar tidak tersedia..." class="img-fluid">
                    </div>
                   </div>
                     <a class="btn btn-secondary mt-2" href="/easpirasi-cek">Kembali</a>
               </form>
          </div>

          @endforeach
              
          @else
            <p class="text-center fs-4">Aspirasi Anda tidak ditemukan, silahkan menghubungi petugas desa.</p>
          @endif
         
          
    
      </div>

      </div>

       
  </section>
</div> 
@endsection
    
