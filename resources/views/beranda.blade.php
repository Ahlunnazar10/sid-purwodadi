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
        @if ($beritadesa[0]->image)
            <div style="max-height:400px; overflow:hidden">
                <img src="{{ asset('storage/' . $beritadesa[0]->image) }}" alt="Gambar Berita" class="img-fluid" id="clip">
            </div>
            
        @else
          <img src="https://source.unsplash.com/1200x300?{{ $beritadesa[0]->kategori->name }}" class="gambar">
        @endif    

        <h3 class="mt-2 mb-2">{{ $beritadesa[0]->title }}</h3>
        <p>{{ $beritadesa[0]->excerpt }}</p>
        <p><a class="btn btn-secondary" href="/beritadesa">Selengkapnya &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">

        @if ($beritadesa[1]->image)
        <div style="max-height:400px; overflow:hidden">
            <img src="{{ asset('storage/' . $beritadesa[1]->image) }}" alt="Gambar Berita" class="img-fluid" id="clip">
        </div>
        
        @else
          <img src="https://source.unsplash.com/1200x300?{{ $beritadesa[1]->kategori->name }}" class="gambar">
        @endif     

        <h3 class="mt-2 mb-2">{{ $beritadesa[1]->title }}</h3>
        <p>{{ $beritadesa[1]->excerpt }}</p>
        <p><a class="btn btn-secondary" href="/beritadesa">Selengkapnya &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        @if ($beritadesa[2]->image)
        <div style="max-height:400px; overflow:hidden">
            <img src="{{ asset('storage/' . $beritadesa[2]->image) }}" alt="Gambar Berita" class="img-fluid" id="clip">
        </div>
        
        @else
          <img src="https://source.unsplash.com/1200x300?{{ $beritadesa[2]->kategori->name }}" class="gambar">
        @endif  

        <h3 class="mt-2 mb-2">{{ $beritadesa[2]->title }}</h3>
        <p>{{ $beritadesa[2]->excerpt }}</p>
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
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/img/1.png"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>  
                </div>
                <small class="text-muted">17-06-2022</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="/img/2.png" alt="" class="img-fluid">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/img/2.png"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">17-06-2022</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="/img/3.png" alt="" class="img-fluid">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/img/3.png"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">17-06-2022</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="/img/4.png" alt="" class="img-fluid">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/img/4.png"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">17-06-2022</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="/img/5.png" alt="" class="img-fluid">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/img/5.png"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">17-06-2022</small>
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
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="video/video1.mp4"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">17-06-2022</small>
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
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="video/video2.mp4"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">17-06-2022</small>
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
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="video/video3.mp4"><button type="button" class="btn btn-sm btn-outline-secondary">Lihat detail</button></a>
                </div>
                <small class="text-muted">17-06-2022</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.container -->
</main>

  {{-- <div class="container" id="text">
    <button type="button" class="btn" id="info"><i class="bi bi-megaphone-fill"></i> Info</button><marquee direction=”left” class="pt-1">Selamat datang di sistem informasi desa & e-aspirasi desa purwodadi</marquee>
  </div>

  
<div class="container">
    <section class="jumbotron text-center mb-5" id="jumbotron">
      <div class="slides">
        <div class="slide">
          <img src="/img/gambar1.jpg" alt="gambar1" class="img ban-img img-fluid" id="gambar">
          <div id="short-text">
            <h5 class="title text-start">makmurkan warga dan maksimalkan potensi, pemdes purwodadi bentuk bumdes...</h5>
          </div>
        </div>
        <div class="slide">
          <img src="/img/gambar2.jpg" alt="gambar2" class="img ban-img img-fluid" id="gambar">
          <div>
            <h5 class="title text-start">kirab gunungan sejauh 2 kilometer warnai bersih desa purwodadi kabupaten malang...</h5>
          </div>
        </div>
        <div class="slide">
          <img src="/img/gambar3.jpg" alt="gambar3" class="img ban-img img-fluid" id="gambar">
          <div>
            <h5 class="title text-start">pendampingan fia ub bisa katrol kesejahteraan warga, ini harapan camat tirtoyudo...</h5>
          </div>
        </div>
        <div class="slide">
          <img src="/img/gambar4.jpg" alt="gambar4" class="img ban-img img-fluid" id="gambar">
          <div>
            <h5 class="title text-start">pantai banyu anjlok, objek wisata alam di malang yang indah dan unik...</h5>
          </div>
        </div>
        <div class="navigation">
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(-1)">&#10095;</a>
        </div>
      </div>
      <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("slide");
          if (n > slides.length)
          {
            slideIndex = 1;
          }
          if (n < 1)
          {
            slideIndex = slides.length
          }
          for (i = 0; i < slides.length;i++)
          {
            slides[i].style.display = "none";
          }
          slides[slideIndex-1].style.display = "block";
        }
      </script>

      <h2 class="text-center mt-5 mb-3 fw-bolder" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:#055160">Data Penduduk Desa Purwodadi</h2>
      <hr style="width: 30%;margin:0 auto">

      <div class="row mt-4" style="color:#055160">
        <div class="col-sm-4">
          <div class="card" style="background-color: #F5F5F5;border-radius:25px">
            <div class="card-body" style="background-color:#F5F5F5;border:1px solid #DEDEE0;border-radius:25px">
              <h4 class="card-title">Laki-laki</h4>
              <p class="card-text mb-3 mt-3 text-white fw-bold fs-5" style="color:#F5F5F5;background: rgba(0, 0, 0, 0.2); border-radius: 11px; border: 2px solid #999; padding: 11px; width:80px ; margin:0 auto">607</p>
              <a href="/wilayah" class="btn text-white fw-bold" style="background-color:#055160">Selengkapnya <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="background-color: #F5F5F5;border-radius:25px">
            <div class="card-body" style="background-color:#F5F5F5;border:1px solid #DEDEE0;border-radius:25px">
              <h4 class="card-title">Perempuan</h4>
              <p class="card-text mb-3 mt-3 text-white fw-bold fs-5" style="color:#F5F5F5;background: rgba(0, 0, 0, 0.2); border-radius: 11px; border: 2px solid #999; padding: 11px; width:80px ; margin:0 auto">607</p>
              <a href="/wilayah" class="btn text-white fw-bold" style="background-color:#055160">Selengkapnya <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="background-color: #F5F5F5;border-radius:25px">
            <div class="card-body" style="background-color:#F5F5F5;border:1px solid #DEDEE0;border-radius:25px">
              <h4 class="card-title">Total</h4>
              <p class="card-text mb-3 mt-3 text-white fw-bold fs-5" style="color:#F5F5F5;background: rgba(0, 0, 0, 0.2); border-radius: 11px; border: 2px solid #999; padding: 11px; width:80px ; margin:0 auto">607</p>
              <a href="/wilayah" class="btn text-white fw-bold" style="background-color:#055160">Selengkapnya <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <h2 class="text-center mb-3 fw-bolder" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:#055160; margin-top:100px">Galeri Video Desa Purwodadi</h2>
      <hr style="width: 30%;margin:0 auto">

      <div class="row">
        <div class="col-sm-4">
          <div class="card mt-5 mb-3" style="width: 21rem;">
            <video controls>
              <source src="video/video1.mp4" type="video/mp4"/>
            </video>
            <div class="card-body">
              <h5 class="card-title">Potensi Desa Purwodadi</h5>
              <p class="card-text">Berikut merupakan video yang membahas tentang potensi Desa Purwodadi.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card mt-5 mb-3" style="width: 21rem;">
            <video controls>
              <source src="video/video2.mp4" type="video/mp4"/>
            </video>
            <div class="card-body">
              <h5 class="card-title">Sejarah Desa Purwodadi</h5>
              <p class="card-text">Berikut merupakan video mengenai sejarah Desa Purwodadi.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card mt-5 mb-3" style="width: 21rem;">
            <video controls>
              <source src="video/video3.mp4" type="video/mp4"/>
            </video>
            <div class="card-body">
              <h5 class="card-title">Bersih Desa dan Larung Sesaji</h5>
              <p class="card-text">Berikut merupakan video upacara adat bersih desa dan larung sesaji.</p>
            </div>
          </div>
        </div>
      </div>

      <div style="color: #055160;text-align: justify;text-justify: newspaper; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top:100px">
        <h5 class="text-start mb-3">Pasal 86 UU No. 6 Tahun 2014 :</h5>
        <p class="text-start">~ Undang-Undang Tentang Desa pasal tentang Sistem Informasi Pembangunan Desa dan Pembangunan Kawasan Perdesaan ~</p>
        <ol class="text-start">
          <li>Desa berhak mendapatkan akses informasi melalui sistem informasi Desa yang dikembangkan oleh Pemerintah Daerah Kabupaten/Kota.</li>
          <li>Pemerintah dan Pemerintah Daerah wajib mengembangkan sistem informasi Desa dan pembangunan Kawasan Perdesaan</li>
          <li>Sistem informasi Desa sebagaimana dimaksud pada ayat (2) meliputi fasilitas perangkat keras dan perangkat lunak, jaringan, serta sumber daya manusia.</li>
          <li>Sistem informasi Desa sebagaimana dimaksud pada ayat (2) meliputi data Desa, data Pembangunan Desa, Kawasan Perdesaan, serta informasi lain yang berkaitan dengan Pembangunan Desa dan pembangunan Kawasan Perdesaan.</li>
          <li>Sistem informasi Desa sebagaimana dimaksud pada ayat (2) dikelola oleh Pemerintah Desa dan dapat diakses oleh masyarakat Desa dan semua pemangku kepentingan.</li>
          <li>Pemerintah Daerah Kabuten/Kota menyediakan informasi perencanaan pembangunan Kabupaten/Kota untuk Desa.</li>
        </ol>
      </div>

    </section>
</div> --}}

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
    