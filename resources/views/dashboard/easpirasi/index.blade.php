@extends('dashboard.tampilan.kerangka')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Pengelolaan Data Aspirasi Masyarakat</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-9" role="alert">
      {{ session('success') }}
    </div> 
    @endif
    <div class="table-responsive col-lg-11">
        <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nik</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
              <th scope="col">No HP</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($easpirasis as $easpirasi)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $easpirasi->nik }}</td>
              <td>{{ $easpirasi->nama }}</td>
              <td>{{ $easpirasi->email }}</td>
              <td>{{ $easpirasi->alamat }}</td>
              <td>{{ $easpirasi->kontak }}</td>
              <td>
                <a href="/dashboard-easpirasi/{{ $easpirasi->nik }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <form action="/dashboard-easpirasi/{{ $easpirasi->nik }}" method="POST" class="d-inline">
                  @csrf

                  <button class="badge bg-success border-0" onclick="return confirm('Apakah aspirasi telah selesai diproses?')"><span data-feather="check-circle"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    
@endsection



