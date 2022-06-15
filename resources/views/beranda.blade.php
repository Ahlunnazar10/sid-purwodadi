@extends('tampilan.kerangka')

@section('container')
  <div class="container" id="text">
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
</div>

@endsection
    