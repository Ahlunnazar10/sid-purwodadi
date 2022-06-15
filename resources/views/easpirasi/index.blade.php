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

        <h3 class="text-center mt-5">Panduan Penyampaian Aspirasi:</h3>
        <img src="img/quotation.png" alt="tanda petik" id="petik">
        <p class="text-center mt-3"><strong>1. Gunakan identitas sesuai KTP anda</strong></p> 
        <p class="text-center" id="text-aspirasi">Untuk menyampaikan aspirasi anda diminta untuk menggunakan identitas anda, yakni NIK (Nomor Induk Kependudukan) & NAMA sesuai KTP yang diisi di kolom yang tersedia.</p>
        <img src="img/quotation.png" alt="tanda petik" id="petik">
        <p class="text-center mt-3"><strong>
          2. Sampaikan aspirasi anda dengan singkat & jelas</strong></p> 
        <p class="text-center" id="text-aspirasi">Pada kolom aspirasi harap menggunakan bahasa indonesia, dengan singkat dan jelas yang mudah dipahami.</p>
        <img src="img/quotation.png" alt="tanda petik" id="petik">
        <p class="text-center mt-3"><strong>
          3. Setiap aspirasi yang anda sampaikan angkat di tindak lanjuti maksimal 14 hari kerja</strong></p> 
        <p class="text-center" id="text-aspirasi">Setiap aspirasi yang masuk akan ditampung oleh admin dan akan diupdate sesuai dengan hasil investigasi, status update aspirasi anda dapat anda ketahui melalui kolom pencarian.</p>
        <img src="img/quotation.png" alt="tanda petik" id="petik">
        <p class="text-center mt-3"><strong>
          4. Terimakasih telah menggunakan layanan ini dengan bijak & sesuai ketentuan yang ada.</strong></p> 
          <img src="img/quotation.png" alt="tanda petik" id="petik">
          <p class="text-center mt-3"><strong>
            5. Lengkapi Data E-Aspirasi</strong></p> 
          <p class="text-center" id="text-aspirasi">Silakan lengkapi data pada form isian data aplikasi E-Aspirasi dibawah.
          Setelah semua informasi sudah terisi lengkap akhiri dengan klik tombol Kirim Aspirasi, Aspirasi Anda akan tersimpan pada kolom permohonan.</p>

        
          <div class="col-lg-10" id="form-input">
            @if (session()->has('success'))
              <div class="alert alert-success col-lg-12" role="alert">
                {{ session('success') }}
              </div> 
            @endif
            <form method="POST" action="/easpirasi" enctype="multipart/form-data">
             @csrf
                <div class="mb-3">
                  <label for="nik" class="form-label">Nomor NIK:</label>
                  <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required autofocus value="{{ old('nik') }}" placeholder="16 digit">
                  @error('nik')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap :</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}" placeholder="Sesuai KTP">
                  @error('nama')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email :</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email') }}" placeholder="contoh@gmail.com">
                  @error('email')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="ktp" class="form-label">Foto KTP :</label>
                  <img class="img-preview img-fluid mb-3 col-sm-4" style="width: 350px">
                  <input class="form-control @error('ktp') is-invalid @enderror" type="file" id="ktp" name="ktp" onchange="previewImage()">
                  @error('ktp')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat :</label>
                  <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}" placeholder="Sesuai KTP">
                  @error('alamat')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="kontak" class="form-label">Nomor HP :</label>
                  <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" name="kontak" required autofocus value="{{ old('kontak') }}">
                  @error('kontak')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="aspirasi" class="form-label">Aspirasi Anda :</label>
                    <input id="aspirasi" type="hidden" name="aspirasi" value="{{ old('aspirasi') }}">
                    <trix-editor input="aspirasi" style="background-color: white"></trix-editor>
                    @error('aspirasi')
                    <p class="text-danger text-start" style="font-size: 5px">
                      {{ $message }}
                    </p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="pendukung" class="form-label">Bukti Pendukung :</label>
                  <img class="img-preview img-fluid mb-3 col-sm-4" style="width: 350px">
                  <input class="form-control @error('pendukung') is-invalid @enderror" type="file" id="pendukung" name="pendukung" onchange="previewImage()">
                  @error('pendukung')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-secondary mb-5 mt-3">K I R I M &nbsp; A S P I R A S I &nbsp;<i class="bi bi-send"></i></button>
                </div>
            </form>
        </div>

      </div>
  </section>
</div> 
@endsection
    
