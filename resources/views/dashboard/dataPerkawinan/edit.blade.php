
@extends('dashboard.tampilan.kerangka')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Perkawinan</h1>
    </div>

    <div class="col-lg-8" id="form-input">
        <form method="POST" action="/dashboard-perkawinan/{{ $perkawinan->id }}/edit" enctype="multipart/form-data">
         @csrf
            <div class="mb-3">
              <label for="belum_menikah" class="form-label">Belum Menikah :</label>
              <input type="text" class="form-control @error('belum_menikah') is-invalid @enderror" id="belum_menikah" name="belum_menikah" required autofocus value="{{ old('belum_menikah', $perkawinan->belum_menikah) }}">
              @error('belum_menikah')
                <div class="invalid-feedback text-start">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="menikah" class="form-label">Menikah :</label>
              <input type="text" class="form-control @error('menikah') is-invalid @enderror" id="menikah" name="menikah" required autofocus value="{{ old('menikah', $perkawinan->menikah) }}">
              @error('menikah')
                <div class="invalid-feedback text-start">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="cerai_hidup" class="form-label">Cerai Hidup :</label>
              <input type="text" class="form-control @error('cerai_hidup') is-invalid @enderror" id="cerai_hidup" name="cerai_hidup" required autofocus value="{{ old('cerai_hidup', $perkawinan->cerai_hidup) }}">
              @error('cerai_hidup')
                <div class="invalid-feedback text-start">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="cerai_mati" class="form-label">Cerai Mati :</label>
              <input type="text" class="form-control @error('cerai_mati') is-invalid @enderror" id="cerai_mati" name="cerai_mati" required autofocus value="{{ old('cerai_mati', $perkawinan->cerai_mati) }}">
              @error('cerai_mati')
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