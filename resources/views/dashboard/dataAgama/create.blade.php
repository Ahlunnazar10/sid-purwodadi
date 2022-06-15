
@extends('dashboard.tampilan.kerangka')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Data Agama</h1>
    </div>

    <div class="container">
      <div class="row pt-4 pb-4 ">

        <div class="col-lg-11" id="form-input">
            <form method="POST" action="/dashboard/agama-create" enctype="multipart/form-data">
                <p class="text-muted">*Data harus berupa angka (per-orang = 1).</p>
            @csrf
                <div class="mb-3">
                  <label for="islam" class="form-label">Islam :</label>
                  <input type="text" class="form-control @error('islam') is-invalid @enderror" id="islam" name="islam" required autofocus value="{{ old('islam') }}">
                  @error('islam')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="kristen" class="form-label">Kristen :</label>
                  <input type="text" class="form-control @error('kristen') is-invalid @enderror" id="kristen" name="kristen" required autofocus value="{{ old('kristen') }}">
                  @error('kristen')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="hindu" class="form-label">Hindu :</label>
                    <input type="text" class="form-control @error('hindu') is-invalid @enderror" id="hindu" name="hindu" required autofocus value="{{ old('hindu') }}">
                    @error('hindu')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="budha" class="form-label">Budha :</label>
                    <input type="text" class="form-control @error('budha') is-invalid @enderror" id="budha" name="budha" required autofocus value="{{ old('budha') }}">
                    @error('budha')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary mb-5">Tambah Data</button>
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