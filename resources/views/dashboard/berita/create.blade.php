
@extends('dashboard.tampilan.kerangka')

@section('container')
<style>
  #konten {
  color: #055160;
  }
</style>

<main id="">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="color: #055160">Buat Berita</h1>
    </div>

    <div class="col-lg-8" id="form-input">
        <form method="POST" action="/dashboard-beritadesa-create" enctype="multipart/form-data">
         @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Judul:</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
              @error('title')
                <div class="invalid-feedback text-start">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="kategori" class="form-label">Kategori</label>
              <select class="form-select" name="kategori_id">
                @foreach ($kategoris as $kategori)
                  @if (old('kategori_id') == $kategori->id)
                  <option value="{{ $kategori->id }}" selected>{{ $kategori->name }}</option>
                  @else
                  <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Masukkan gambar</label>
              <img class="img-preview img-fluid mb-3 col-sm-4" style="width: 350px">
              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
              @error('image')
                <div class="invalid-feedback text-start">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="body" class="form-label">Isi berita:</label>
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                <p class="text-danger text-start" style="font-size: 5px">
                  {{ $message }}
                </p>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-primary mt-1 mb-4"><span data-feather="plus-circle"></span> Tambah berita</button>
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

</main>

@endsection