@extends('dashboard.tampilan.kerangka')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Data Agama</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
      {{ session('success') }}
    </div> 
    @endif

    <div class="table-responsive col-lg-6">
      <a href="/dashboard-agama-create" class="btn mb-3 text-white" style="background-color: #198754">Tambah Data <span data-feather="arrow-right-circle"></span></a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Islam</th>
              <th scope="col">Kristen</th>
              <th scope="col">Hindu</th>
              <th scope="col">Budha</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($agamas as $agama)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $agama->islam }}</td>
              <td>{{ $agama->kristen }}</td>
              <td>{{ $agama->hindu }}</td>
              <td>{{ $agama->budha }}</td>
              <td>
                <a href="/dashboard-agama/{{ $agama->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard-agama/{{ $agama->id }}" method="POST" class="d-inline">
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