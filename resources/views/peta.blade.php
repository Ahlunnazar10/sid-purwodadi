@extends('tampilan.kerangka')

@section('container')

<div class="container">
  <section class="jumbotron text-center mb-5 mt-3">
      <div id="konten">
          <h1 class="text-center">Peta Potensi Desa Purwodadi</h1>
          <p class="text-center mb-1" style="font-size: 13px"><i class="bi bi-bookmarks-fill"></i> : Peta Potensi Desa</p>
          <hr>
          
          <img src="/img/PETA_FIX.png" alt="Peta Potensi Desa" class="img-fluid">

          <h5 class="mt-4">1. Kondisi Geografi</h5>
          <p>Desa Purwodadi merupakan salah satu desa dari 13 desa yang berada dibawah naungan Kecamatan Tirtoyudo, Kabupaten Malang, yang terbagi menjadi 3 (tiga) dusun wilayah yaitu:</p>
          <li>Lenggoksono</li>
          <li>Purwodadi</li>
          <li>Balerejo</li>
          <br>
          <p>Desa Purwodadi memiliki luas wilayah secara keseluruhan ± 1041 ha atau 10,41 km (Pemutahiran data Desa Purwodadi, 2008). Keadaan tanah di Desa Purwodadi adalah tanah lembab, dengan luas pemukiman penduduk sebanyak 30%, daerah persawahan 20%, daerah kebun cengkeh 30%, daerah kebun kopi 15% dan daerah pesisir 5%. Desa Purwodadi mempunyai iklim tropis dengan cuaca cukup hangat serta memiliki dua musim  yaitu: musim kemarau dan musim hujan dengan suhu rata-rata 30°C dengan curah hujan berkisar 450,00 mm/tahunnya.</p>

          <h5 class="mt-3">2. Potensi Desa</h5>
          <p>Desa Purwodadi mempunyai beberapa potensi yang dapat dikembangkan guna meningkatkan kesejahteraan masyarakat. Masyarakat Desa Purwodadi umumnya bekerja sebagai petani karena letak Desa dikelilingi oleh bukit yang dapat digunakan untuk bercocok tanam serta karena lokasi Desa juga berada di pesisir pantai maka ada pula masyarakat Desa yang bekerja sebagai nelayan maupun pemandu wisata laut. Berikut merupakan potensi Desa Purwodadi:</p>
          
          <li style="font-size: 18px">Berikut Tabel Potensi Tambak Ikan :</li>

          <div class="row justify-content-center mb-4">
            <div class="col-lg-11">
              <div class="table-responsive-xl">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Jenis Produksi</th>
                      <th scope="col">Volume Produksi</th>
                      <th scope="col">Luas Area</th>
                      <th scope="col">Perusahaan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($tambaks as $tambak)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $tambak->jenis }}</td>
                      <td>{{ $tambak->volume }}</td>
                      <td>{{ $tambak->luas }}</td>
                      <td>{{ $tambak->perusahaan }}</td>
                    </tr>
                  @endforeach  
                  </tbody>
               </table>
              </div>
            </div>
          </div> 

          <li style="font-size: 18px">Berikut Tabel Potensi Pertanian Sawah :</li>

          <div class="row justify-content-center mb-4">
            <div class="col-lg-11">
              <div class="table-responsive-xl">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Jenis Produksi</th>
                      <th scope="col">Volume Produksi</th>
                      <th scope="col">Luas Area</th>
                      <th scope="col">Jumlah Petani</th>
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
                    </tr>
                  @endforeach  
                  </tbody>
               </table>
              </div>
            </div>
          </div> 

          <li style="font-size: 18px">Berikut Tabel Potensi Perkebunan :</li>

          <div class="row justify-content-center mb-4">
            <div class="col-lg-11">
              <div class="table-responsive-xl">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Jenis Produksi</th>
                      <th scope="col">Volume Produksi</th>
                      <th scope="col">Luas Area</th>
                      <th scope="col">Jumlah Petani</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($perkebunans as $perkebunan)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $perkebunan->jenis }}</td>
                      <td>{{ $perkebunan->volume }}</td>
                      <td>{{ $perkebunan->luas }}</td>
                      <td>{{ $perkebunan->jumlah }}</td>
                    </tr>
                  @endforeach  
                  </tbody>
               </table>
              </div>
            </div>
          </div>

          <li style="font-size: 18px">Berikut Tabel Potensi Nelayan :</li>

          <div class="row justify-content-center mb-4">
            <div class="col-lg-11">
              <div class="table-responsive-xl">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Jenis Produksi</th>
                      <th scope="col">Volume Produksi</th>
                      <th scope="col">Jumlah Nelayan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($nelayans as $nelayan)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $nelayan->jenis }}</td>
                      <td>{{ $nelayan->volume }}</td>
                      <td>{{ $nelayan->jumlah }}</td>
                    </tr>
                  @endforeach  
                  </tbody>
               </table>
              </div>
            </div>
          </div>

          <li style="font-size: 18px">Lain-lain</li>

          <h5 class="mt-3">3. Potensi Wisata</h5>
          <p>Desa Purwodadi mempunyai beberapa wisata yang bisa dijadikan referensi destinasi wisata Anda dihari libur. <a href="/wisata">Berikut ulasannya...</a> </p>

      </div>
  </section>
</div>    

@endsection
    
