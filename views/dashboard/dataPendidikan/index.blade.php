@extends('dashboard.tampilan.kerangka')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Pengelolaan Data Pendidikan</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div> 
    @endif

    <div class="table-responsive col-lg-8">
      <a href="/dashboard-pendidikan-create" class="btn mb-3 text-white" style="background-color: #198754"><span data-feather="arrow-right-circle"></span> Tambah Data</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tidak Sekolah</th>
              <th scope="col">Tamat SD</th>
              <th scope="col">Tamat SMP</th>
              <th scope="col">Tamat SMA</th>
              <th scope="col">Strata 1</th>
              <th scope="col">Strata 2</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pendidikans as $pendidikan)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $pendidikan->tidak_sekolah }}</td>
              <td>{{ $pendidikan->tamat_sd }}</td>
              <td>{{ $pendidikan->tamat_smp }}</td>
              <td>{{ $pendidikan->tamat_sma }}</td>
              <td>{{ $pendidikan->strata1 }}</td>
              <td>{{ $pendidikan->strata2 }}</td>
              <td>
                <a href="/dashboard-pendidikan/{{ $pendidikan->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard-pendidikan/{{ $pendidikan->id }}" method="POST" class="d-inline">
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

