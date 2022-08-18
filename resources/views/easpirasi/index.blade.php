@extends('tampilan.kerangka')

@section('container')
<style>
  strong {
    color: #055160;
  }
</style>
<div class="container">
  <section class="jumbotron text-center mb-5 mt-3">
    <div id="konten">
      <h1 class="text-center">E-ASPIRASI</h1>
      <p class="text-center mb-1" style="font-size: 13px"><i class="bi bi-bookmarks-fill"></i> : Peraturan Desa</p>
      <hr>

      <h2 class="text-center mt-5" style="font-weight: 300">Panduan Penyampaian Aspirasi:</h2>

      <div class="row">
        <div class="col-lg-11 m-auto mt-5">
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  <strong>1. Gunakan identitas sesuai KTP anda</strong>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <p>Untuk menyampaikan aspirasi anda diminta untuk menggunakan identitas anda, yakni NIK (Nomor Induk Kependudukan) & NAMA sesuai KTP yang diisi di kolom yang tersedia.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  <strong>2. Sampaikan aspirasi anda dengan singkat & jelas</strong>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  <p>Pada kolom aspirasi harap menggunakan bahasa indonesia, dengan singkat dan jelas yang mudah dipahami.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  <strong>3. Setiap aspirasi yang anda sampaikan angkan di tindak lanjuti maksimal 14 hari kerja</strong>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                  <p>Setiap aspirasi yang masuk akan ditampung oleh admin dan Anda dapat selalu memeriksa status aspirasi Anda pada halaman <a href="/easpirasi-cek">cek aspirasi.</a></p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                  <strong>4. Terimakasih telah menggunakan layanan ini dengan bijak & sesuai ketentuan yang ada</strong>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                <div class="accordion-body">
                  {{-- Kosong --}}
                </div>
              </div>
            </div>
            <div class="accordion-item mb-5">
              <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                  <strong>5. Lengkapi Data E-Aspirasi</strong>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                <div class="accordion-body">
                  <p>Silakan lengkapi data pada form isian data aplikasi E-Aspirasi dibawah.
                    Setelah semua informasi sudah terisi lengkap akhiri dengan klik tombol Kirim Aspirasi, Aspirasi Anda akan tersimpan pada panel Admin.</a></p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-lg-10 mt-5" id="form-input">
        @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
          {{ session('success') }}
        </div>
        @endif
        <form method="POST" action="/easpirasi" enctype="multipart/form-data">
          @csrf
          <h4 class="text-center mb-4" style="font-weight: 300">Silahkan masukan data Aspirasi Anda :</h4>
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
            <label for="kategori" class="form-label">Kategori Aspirasi :</label>
            <select class="form-select" name="kategori">
              <option value="kaurumum110@gmail.com" selected>KAUR Umum</option>
              <option value="kaurkeuangan110@gmail.com">KAUR Keuangan</option>
              <option value="kaurperencanaan110@gmail.com">KAUR Perencanaan</option>
              <option value="kasipemerintahan110@gmail.com">KASI Pemerintahan</option>
              <option value="kasikesejahteraan110@gmail.com">KASI Kesejahteraan</option>
              <option value="kasipelayanan120@gmail.com">KASI Pelayanan</option>
            </select>
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