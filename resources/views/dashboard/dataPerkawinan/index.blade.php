@extends('dashboard.tampilan.kerangka')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Pengelolaan Data Perkawinan</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
      {{ session('success') }}
    </div> 
    @endif

    <div class="table-responsive col-lg-6">
      <a href="/dashboard-perkawinan-create" class="btn mb-3 text-white" style="background-color: #198754">Tambah Data <span data-feather="arrow-right-circle"></span></a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Belum Menikah</th>
              <th scope="col">Menikah</th>
              <th scope="col">Cerai Hidup</th>
              <th scope="col">Cerai Mati</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($perkawinans as $perkawinan)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $perkawinan->belum_menikah }}</td>
              <td>{{ $perkawinan->menikah }}</td>
              <td>{{ $perkawinan->cerai_hidup }}</td>
              <td>{{ $perkawinan->cerai_mati }}</td>
              <td>
                <a href="/dashboard-perkawinan/{{ $perkawinan->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard-perkawinan/{{ $perkawinan->id }}" method="POST" class="d-inline">
                  @csrf

                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus data?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    
@endsection