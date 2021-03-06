
@extends('dashboard.tampilan.kerangka')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Jenis Kelamin</h1>
    </div>

    <div class="col-lg-8" id="form-input">
        <form method="POST" action="/dashboard-jeniskelamin/{{ $jeniskelamin->id }}/edit" enctype="multipart/form-data">
         @csrf
            <div class="mb-3">
              <label for="pria" class="form-label">Pria :</label>
              <input type="text" class="form-control @error('pria') is-invalid @enderror" id="pria" name="pria" required autofocus value="{{ old('pria', $jeniskelamin->pria) }}">
              @error('pria')
                <div class="invalid-feedback text-start">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="wanita" class="form-label">Wanita :</label>
              <input type="text" class="form-control @error('wanita') is-invalid @enderror" id="wanita" name="wanita" required autofocus value="{{ old('wanita', $jeniskelamin->wanita) }}">
              @error('wanita')
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