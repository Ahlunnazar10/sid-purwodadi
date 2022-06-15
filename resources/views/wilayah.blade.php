@extends('tampilan.kerangka')

@section('container')
<div class="container" id="text">
  <button type="button" class="btn" id="info"><i class="bi bi-megaphone-fill"></i> Info</button><marquee direction=”left” class="pt-1">Selamat datang di sistem informasi desa & e-aspirasi desa purwodadi</marquee>
</div>
<div class="container">
  <section class="jumbotron text-center mb-5 mt-3">
      <div id="konten">
          <h1 class="text-center">Data Demografi Berdasarkan Populasi Wilayah</h1>
          <p class="text-center mb-1" style="font-size: 13px"><i class="bi bi-bookmarks-fill"></i> : Data Desa</p>
          <hr>
  
          <div class="col-lg-11">
              <table class="table table-hover">
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
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <th colspan="3">Total :</th>
                  <th>{{ $wilayah->sum('j_rt') }}</th>
                  <th>{{ $wilayah->sum('j_kk') }}</th>
                  <th>{{ $wilayah->sum('j_jiwa') }}</th>
                  <th>{{ $wilayah->sum('j_pria') }}</th>
                  <th>{{ $wilayah->sum('j_wanita') }}</th>
              </tfoot>
              </table>
            </div>

        </div>
      </div>
  </section>
</div> 
@endsection
    