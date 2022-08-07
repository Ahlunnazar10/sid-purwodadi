@extends('tampilan.kerangka')

@section('container')
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
<main>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/kantor.jpg" alt="Gambar Kantor Desa" class="img-responsive" id="gelap">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Sistem Informasi Desa Purwodadi.</h1>
            <p>Website resmi Desa Purwodadi, Kecamatan Tirtoyudo, Kabupaten Malang.</p>
            <p><a class="btn btn-lg btn-primary" href="#update">Jelajahi Website</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="/img/desa.jpg" alt="Gambar Kantor Desa" class="img-responsive" id="gelap">

        <div class="container">
          <div class="carousel-caption">
            <h1>Terdapat beberapa informasi penting seputar Desa</h1>
            <p>Anda dapat mengakses tombol dibawah ini untuk melihat lebih banyak.</p>
            <p><a class="btn btn-lg btn-primary" href="/beritadesa">Selengkapnya</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="/img/gambar1.jpg" alt="Gambar Kantor Desa" class="img-responsive" id="gelap">

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Punya Aspirasi? Silahkan kirimkan Aspirasi disini.</h1>
            <p>Anda dapat dengan mudah memberikan Aspirasi kepada kami melalui sistem ini.</p>
            <p><a class="btn btn-lg btn-primary" href="/easpirasi">Buat Aspirasi ?</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container update">
    <div class="row" id="update">
      <div class="col">
        <h1 class="text-center" style="color: #055160;">~ Berita Terbaru Hari Ini ~</h1>
        
      </div>
    </div>
    <hr style="width: 20%;margin:0 auto" class="mb-5 mt-2">

    <!-- Three columns of text below the carousel -->
    <div class="row" style="color: #055160;">
      <div class="col-lg-4">
        <div style="max-height:400px; overflow:hidden">
            <img src="{{ asset('storage/' . $beritadesa[0]->image) }}" alt="Gambar Berita" class="img-fluid" id="clip">
        </div>
        <h5 class="mt-3 mb-3">{{ $beritadesa[0]->title }}</h5>
        <p style="text-align: justify; text-justify: newspaper">{{ $beritadesa[0]->excerpt }}</p>
        <p><a class="btn btn-secondary" href="/beritadesa">Selengkapnya &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">

        <div style="max-height:400px; overflow:hidden">
          <img src="{{ asset('storage/' . $beritadesa[1]->image) }}" alt="Gambar Berita" class="img-fluid" id="clip">
        </div>  

        <h5 class="mt-3 mb-3">{{ $beritadesa[1]->title }}</h5>
        <p style="text-align: justify; text-justify: newspaper">{{ $beritadesa[1]->excerpt }}</p>
        <p><a class="btn btn-secondary" href="/beritadesa">Selengkapnya &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <div style="max-height:400px; overflow:hidden">
          <img src="{{ asset('storage/' . $beritadesa[2]->image) }}" alt="Gambar Berita" class="img-fluid" id="clip">
        </div>

        <h5 class="mt-3 mb-3">{{ $beritadesa[2]->title }}</h5>
        <p style="text-align: justify; text-justify: newspaper">{{ $beritadesa[2]->excerpt }}</p>
        <p><a class="btn btn-secondary" href="/beritadesa">Selengkapnya &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette" style="color: #055160;">
      <div class="col-md-7">
        <h2 class="featurette-heading">Desa Purwodadi Official <br>
          <span class="text-muted">Website Resmi Desa.</span></h2>
        <p class="lead">Mengenal lebih dekat Desa Purwodadi melalui Sistem Informasi Desa yang update setiap saat.</p>
      </div>
      <div class="col-md-5">
        <img src="/img/official.png" alt="" class="img-fluid">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- START THE ALBUM -->
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="text-center" style="color: #055160;">~ Galeri Foto & Video ~</h1>
          
        </div>
      </div>
      <hr style="width: 18%;margin:0 auto" class="mb-5 mt-2">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="/img/1.png" alt="" class="img-fluid">
            <div class="card-body">
              <p class="card-text">Berikut merupakan dokumentasi rapat kepengurusan Pemerintah Desa Purwodadi.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/img/1.png"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>  
                </div>
                <small class="text-muted">17-02-2022</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="/img/2.png" alt="" class="img-fluid">
            <div class="card-body">
              <p class="card-text">Berikut merupakan dokumentasi kegiatan sepakbola sehat Desa Purwodadi.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/img/2.png"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">02-03-2022</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="/img/3.png" alt="" class="img-fluid">
            <div class="card-body">
              <p class="card-text">Berikut merupakan dokumentasi pembangunan posko covid-19.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/img/3.png"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">29-03-2022</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="/img/4.png" alt="" class="img-fluid">
            <div class="card-body">
              <p class="card-text">Berikut merupakan dokumentasi penyaluran bansos pada masyarakat Desa Purwodadi.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/img/4.png"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">09-04-2022</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="/img/5.png" alt="" class="img-fluid">
            <div class="card-body">
              <p class="card-text">Berikut merupakan dokumentasi peresmian paud & TK Desa Purwodadi.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/img/5.png"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">22-06-2022</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <video controls>
              <source src="video/video1.mp4" type="video/mp4"/>
            </video>

            <div class="card-body">
              <p class="card-text">Berikut merupakan dokumentasi video Desa Purwodadi.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="video/video1.mp4"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">24-06-2022</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <video controls>
              <source src="video/video2.mp4" type="video/mp4"/>
            </video>

            <div class="card-body">
              <p class="card-text">Berikut merupakan dokumentasi video pemaparan sejarah Desa Purwodadi.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="video/video2.mp4"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">30-06-2022</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <video controls>
              <source src="video/video3.mp4" type="video/mp4"/>
            </video>

            <div class="card-body">
              <p class="card-text">Berikut merupakan dokumentasi video tradisi larung saji Desa Purwodadi.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="video/video3.mp4"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">17-07-2022</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.container -->
</main>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
    