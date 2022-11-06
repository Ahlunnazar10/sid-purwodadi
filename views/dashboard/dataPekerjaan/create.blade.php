
@extends('dashboard.tampilan.kerangka')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="color:#055160">Tambahkan data pekerjaan disini :</h1>
    </div>

    <div class="container">
      <div class="row pt-4 pb-4 ">

        <div class="col-lg-11" id="form-input">
            <form method="POST" action="/dashboard-pekerjaan-create" enctype="multipart/form-data">
                <p class="text-muted">*Data harus berupa angka (per-orang = 1).</p>
            @csrf
                <div class="mb-3">
                  <label for="tidak_bekerja" class="form-label">Tidak Bekerja :</label>
                  <input type="text" class="form-control @error('tidak_bekerja') is-invalid @enderror" id="tidak_bekerja" name="tidak_bekerja" required autofocus value="{{ old('tidak_bekerja') }}">
                  @error('tidak_bekerja')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="wiraswasta" class="form-label">Wiraswasta :</label>
                  <input type="text" class="form-control @error('wiraswasta') is-invalid @enderror" id="wiraswasta" name="wiraswasta" required autofocus value="{{ old('wiraswasta') }}">
                  @error('wiraswasta')
                    <div class="invalid-feedback text-start">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="petani" class="form-label">Petani :</label>
                    <input type="text" class="form-control @error('petani') is-invalid @enderror" id="petani" name="petani" required autofocus value="{{ old('petani') }}">
                    @error('petani')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="irt" class="form-label">IRT :</label>
                    <input type="text" class="form-control @error('irt') is-invalid @enderror" id="irt" name="irt" required autofocus value="{{ old('irt') }}">
                    @error('irt')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="guru" class="form-label">Guru :</label>
                    <input type="text" class="form-control @error('guru') is-invalid @enderror" id="guru" name="guru" required autofocus value="{{ old('guru') }}">
                    @error('guru')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pedagang" class="form-label">Pedagang :</label>
                    <input type="text" class="form-control @error('pedagang') is-invalid @enderror" id="pedagang" name="pedagang" required autofocus value="{{ old('pedagang') }}">
                    @error('pedagang')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pelajar" class="form-label">Pelajar/Mahasiswa :</label>
                    <input type="text" class="form-control @error('pelajar') is-invalid @enderror" id="pelajar" name="pelajar" required autofocus value="{{ old('pelajar') }}">
                    @error('pelajar')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="supir" class="form-label">Supir :</label>
                    <input type="text" class="form-control @error('supir') is-invalid @enderror" id="supir" name="supir" required autofocus value="{{ old('supir') }}">
                    @error('supir')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pensiunan" class="form-label">Pensiunan :</label>
                    <input type="text" class="form-control @error('pensiunan') is-invalid @enderror" id="pensiunan" name="pensiunan" required autofocus value="{{ old('pensiunan') }}">
                    @error('pensiunan')
                      <div class="invalid-feedback text-start">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pns" class="form-label">PNS :</label>
                    <input type="text" class="form-control @error('pns') is-invalid @enderror" id="pns" name="pns" required autofocus value="{{ old('pns') }}">
                    @error('pns')
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