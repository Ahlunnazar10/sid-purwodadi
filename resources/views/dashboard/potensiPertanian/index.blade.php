@extends('dashboard.tampilan.kerangka')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Pengelolaan Data Potensi Pertanian Sawah</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div> 
    @endif


    <div class="row ">
      <div class="col-lg-8">
        <div class="table-responsive-xl">
          <a href="/dashboard-pertanian-create" class="btn text-white mb-3" style="background-color: #198754">Tambah Data <span data-feather="arrow-right-circle"></span></a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Jenis Produksi</th>
                  <th scope="col">Volume Produksi</th>
                  <th scope="col">Luas Area</th>
                  <th scope="col">Jumlah Petani</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pertanians as $pertanian)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $pertanian->jenis }}</td>
                  <td>{{ $pertanian->volume }}</td>
                  <td>{{ $pertanian->luas }}</td>
                  <td>{{ $pertanian->jumlah }}</td>
                  <td>
                    <a href="/dashboard-pertanian/{{ $pertanian->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard-pertanian/{{ $pertanian->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard-pertanian/{{ $pertanian->id }}" method="POST" class="d-inline">
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
    </div>

    
    
@endsection
