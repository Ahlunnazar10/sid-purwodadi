
@extends('dashboard.tampilan.kerangka')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="color: #055160">Buat Data Jenis Kelamin</h1>
    </div>

    <div class="container">
      <div class="row pt-4 pb-4 ">

        <div class="col-lg-11" id="form-input">
            <form method="POST" action="/dashboard-jeniskelamin-create" enctype="multipart/form-data">
                <p class="text-muted">*Data harus berupa angka (per-orang = 1).</p>
            @csrf
                <div class="mb-3">
                  <label for="pria" class="form-label">Pria :</label>
                  <input type="text" class="form-control @error('pria') is-invalid @enderror" id="pria" name="pria" required autofocus value="{{ old('pria') }}">
                  @error('pria')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="wanita" class="form-label">Wanita :</label>
                  <input type="text" class="form-control @error('wanita') is-invalid @enderror" id="wanita" name="wanita" required autofocus value="{{ old('wanita') }}">
                  @error('wanita')
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