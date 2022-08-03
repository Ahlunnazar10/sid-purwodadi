
@extends('dashboard.tampilan.kerangka')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambahkan kateogori disini : </h1>
    </div>

    <div class="col-lg-4">
        <form method="POST" action="/dashboard-kategori-create" enctype="multipart/form-data">
         @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama Kategori :</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
              @error('name')
                <div class="invalid-feedback text-start">
                  {{ $message }}
                </div>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-primary mb-5"><span data-feather="plus-circle"></span> Tambah kategori</button>
        </form>
    </div>

@endsection