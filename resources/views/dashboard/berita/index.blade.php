@extends('dashboard.tampilan.kerangka')

@section('container')

<style>
  #konten {
  color: #055160;
}
</style>

<main id="konten">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Kelola Berita Disini :</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div> 
  @endif
  <div class="row">
    <div class="col-md-8">
      <div class="table-responsive-xl">
        <a href="/dashboard-beritadesa-create" class="btn mb-3 text-white" style="background-color: #198754">Buat berita baru <span data-feather="arrow-right-circle"></span></a>
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($beritadesa as $berita)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $berita->title }}</td>
                <td>{{ $berita->kategori->name }}</td>
                  <td>
                    <a href="/dashboard-beritadesa/{{ $berita->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard-beritadesa/{{ $berita->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard-beritadesa/{{ $berita->slug }}" method="POST" class="d-inline">
                      {{-- @method('delete') --}}
                      @csrf
    
                      <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus data?')"><span data-feather="x-circle"></span></button>
                    </form>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>

  </div>
</main>
    
@endsection