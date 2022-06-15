
@extends('dashboard.tampilan.kerangka')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Kategori</h1>
    </div>

    <div class="col-lg-8">
        @foreach ($kategoris as $kategori)
        <form method="POST" action="/dashboard/kategories/{{ $kategori->slug }}/edit" enctype="multipart/form-data">
         @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama kategori :</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $kategori->name) }}">
              @error('name')
                <div class="invalid-feedback text-start">
                  {{ $message }}
                </div>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-primary mb-5">Update</button>
        </form>
        @endforeach
    </div>

@endsection