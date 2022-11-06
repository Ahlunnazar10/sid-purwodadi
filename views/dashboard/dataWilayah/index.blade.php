@extends('dashboard.tampilan.kerangka')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Pengelolaan Data Wilayah Administrasi</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-11" role="alert">
      {{ session('success') }}
    </div> 
    @endif


    <div class="row ">
      <div class="col-lg-11">
        <div class="table-responsive-xl">
          <a href="/dashboard-wilayah-create" class="btn text-white mb-3" style="background-color: #198754">Tambah Data <span data-feather="arrow-right-circle"></span></a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Dusun</th>
                  <th scope="col">Kepala Dusun</th>
                  <th scope="col">Jumlah RT</th>
                  <th scope="col">Jumlah KK</th>
                  <th scope="col">Jumlah Jiwa</th>
                  <th scope="col">Jumlah Pria</th>
                  <th scope="col">Jumlah Wanita</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($wilayahs as $wilayah)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $wilayah->dusun }}</td>
                  <td>{{ $wilayah->ka_dusun }}</td>
                  <td>{{ $wilayah->j_rt }}</td>
                  <td>{{ $wilayah->j_kk }}</td>
                  <td>{{ $wilayah->j_jiwa }}</td>
                  <td>{{ $wilayah->j_pria }}</td>
                  <td>{{ $wilayah->j_wanita }}</td>
                  <td>
                    <a href="/dashboard-wilayah/{{ $wilayah->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard-wilayah/{{ $wilayah->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard-wilayah/{{ $wilayah->id }}" method="POST" class="d-inline">
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