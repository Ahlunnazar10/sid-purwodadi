
@extends('dashboard.tampilan.kerangka')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="color: #055160">Buat Data Potensi Nelayan</h1>
    </div>

    <div class="container">
      <div class="row pt-4 pb-4 ">

        <div class="col-lg-8" id="form-input">
            <form method="POST" action="/dashboard-nelayan-create" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                  <label for="jenis" class="form-label">Jenis Produksi :</label>
                  <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required autofocus value="{{ old('jenis') }}">
                  @error('jenis')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="volume" class="form-label">Volume Produksi :</label>
                  <input type="text" class="form-control @error('volume') is-invalid @enderror" id="volume" name="volume" placeholder="per-tahun" required autofocus value="{{ old('volume') }}">
                  @error('volume')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah Nelayan :</label>
                    <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" required autofocus value="{{ old('jumlah') }}">
                    @error('jumlah')
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