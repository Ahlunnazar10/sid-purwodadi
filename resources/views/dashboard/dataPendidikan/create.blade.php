
@extends('dashboard.tampilan.kerangka')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="color: #055160">Buat Data Pendidikan</h1>
    </div>

    <div class="container">
      <div class="row pt-4 pb-4 ">

        <div class="col-lg-11" id="form-input">
            <form method="POST" action="/dashboard/pendidikan-create" enctype="multipart/form-data">
                <p class="text-muted">*Data harus berupa angka (per-orang = 1).</p>
            @csrf
                <div class="mb-3">
                  <label for="tidak_sekolah" class="form-label">Tidak Sekolah :</label>
                  <input type="text" class="form-control @error('tidak_sekolah') is-invalid @enderror" id="tidak_sekolah" name="tidak_sekolah" required autofocus value="{{ old('tidak_sekolah') }}">
                  @error('tidak_sekolah')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="tamat_sd" class="form-label">Tamat SD :</label>
                  <input type="text" class="form-control @error('tamat_sd') is-invalid @enderror" id="tamat_sd" name="tamat_sd" required autofocus value="{{ old('tamat_sd') }}">
                  @error('tamat_sd')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="tamat_smp" class="form-label">Tamat SMP :</label>
                    <input type="text" class="form-control @error('tamat_smp') is-invalid @enderror" id="tamat_smp" name="tamat_smp" required autofocus value="{{ old('tamat_smp') }}">
                    @error('tamat_smp')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tamat_sma" class="form-label">Tamat SMA :</label>
                    <input type="text" class="form-control @error('tamat_sma') is-invalid @enderror" id="tamat_sma" name="tamat_sma" required autofocus value="{{ old('tamat_sma') }}">
                    @error('tamat_sma')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="strata1" class="form-label">Strata 1 :</label>
                    <input type="text" class="form-control @error('strata1') is-invalid @enderror" id="strata1" name="strata1" required autofocus value="{{ old('strata1') }}">
                    @error('strata1')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="strata2" class="form-label">Strata 2 :</label>
                    <input type="text" class="form-control @error('strata2') is-invalid @enderror" id="strata2" name="strata2" required autofocus value="{{ old('strata2') }}">
                    @error('strata2')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary mt-1 mb-4"><span data-feather="plus-circle"></span> Tambah Data</button>
            </form>
        </div>
      </div>
    </div>  

    <script>
      
      function previewImage() {

        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }

    </script>

@endsection