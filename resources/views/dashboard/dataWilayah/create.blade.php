
@extends('dashboard.tampilan.kerangka')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Data Wilayah Administrasi</h1>
    </div>

    <div class="container">
      <div class="row pt-4 pb-4 ">

        <div class="col-lg-11" id="form-input">
            <form method="POST" action="/dashboard/wilayah-create" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                  <label for="dusun" class="form-label">Dusun :</label>
                  <input type="text" class="form-control @error('dusun') is-invalid @enderror" id="dusun" name="dusun" required autofocus value="{{ old('dusun') }}">
                  @error('dusun')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="ka_dusun" class="form-label">Kepala Dusun :</label>
                  <input type="text" class="form-control @error('ka_dusun') is-invalid @enderror" id="ka_dusun" name="ka_dusun" required autofocus value="{{ old('ka_dusun') }}">
                  @error('ka_dusun')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="j_rt" class="form-label">Jumlah RT :</label>
                    <input type="text" class="form-control @error('j_rt') is-invalid @enderror" id="j_rt" name="j_rt" required autofocus value="{{ old('j_rt') }}">
                    @error('j_rt')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="j_kk" class="form-label">Jumlah KK :</label>
                    <input type="text" class="form-control @error('j_kk') is-invalid @enderror" id="j_kk" name="j_kk" required autofocus value="{{ old('j_kk') }}">
                    @error('j_kk')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="j_jiwa" class="form-label">Jumlah Jiwa :</label>
                    <input type="text" class="form-control @error('j_jiwa') is-invalid @enderror" id="j_jiwa" name="j_jiwa" required autofocus value="{{ old('j_jiwa') }}">
                    @error('j_jiwa')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="j_pria" class="form-label">Jumlah Pria :</label>
                    <input type="text" class="form-control @error('j_pria') is-invalid @enderror" id="j_pria" name="j_pria" required autofocus value="{{ old('j_pria') }}">
                    @error('j_pria')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="j_wanita" class="form-label">Jumlah Wanita :</label>
                    <input type="text" class="form-control @error('j_wanita') is-invalid @enderror" id="j_wanita" name="j_wanita" required autofocus value="{{ old('j_wanita') }}">
                    @error('j_wanita')
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