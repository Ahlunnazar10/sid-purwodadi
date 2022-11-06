
@extends('dashboard.tampilan.kerangka')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Potensi Perkebunan</h1>
    </div>

    <div class="col-lg-8" id="form-input">
        <form method="POST" action="/dashboard-perkebunan/{{ $perkebunan->id }}/edit" enctype="multipart/form-data">
         @csrf
            <div class="mb-3">
              <label for="jenis" class="form-label">Jenis Produksi :</label>
              <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required autofocus value="{{ old('jenis', $perkebunan->jenis) }}">
              @error('jenis')
                <div class="invalid-feedback text-start">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="volume" class="form-label">Volume Produksi :</label>
              <input type="text" class="form-control @error('volume') is-invalid @enderror" id="volume" name="volume" required autofocus value="{{ old('volume', $perkebunan->volume) }}">
              @error('volume')
                <div class="invalid-feedback text-start">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="luas" class="form-label">Luas Area :</label>
              <input type="text" class="form-control @error('luas') is-invalid @enderror" id="luas" name="luas" required autofocus value="{{ old('luas', $perkebunan->luas) }}">
              @error('luas')
                <div class="invalid-feedback text-start">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="jumlah" class="form-label">Jumlah Petani :</label>
              <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" required autofocus value="{{ old('jumlah', $perkebunan->jumlah) }}">
              @error('jumlah')
                <div class="invalid-feedback text-start">
                  {{ $message }}
                </div>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-primary mt-1 mb-4">Update Data</button>
        </form>
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