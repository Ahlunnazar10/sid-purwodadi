<div class="container-fluid" style="background-image:url('/img/batik.png');margin-bottom:-16px;height:235px">
  <section class="jumbotron text-center">
    <img src="/img/Malang.png" alt="Logo Kab.Malang" class="img ban-img img-fluid mt-3" style="height: 140px;">
    <h3 style="font-weight: 700; color:#055160;margin-top:-10px">Sistem Informasi Desa Purwodadi</h3>
    <p class="fs-6" style="color:#055160;margin-top:-10px;font-weight:500">Kec. Tirtoyudo - Kab. Malang - Prov. Jawa Timur</p>
  </section>
</div>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#198754">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav text-center fw-bold">
        <li class="nav-item ">
          <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" href="/">Beranda</a>
        </li>

        {{-- Profile --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Sejarah") ? 'active' : '' }} {{ ($title === "Karakteristik") ? 'active' : '' }} {{ ($title === "Peta") ? 'active' : '' }} {{ ($title === "Wisata") ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdown-profile" href="/profil">Profil Desa <span class="caret"></span></a>

          <ul class="dropdown-menu bg-sucess" style="background-color:#198754">
            <li><a class="dropdown-item text-white" href="/sejarah" id="dropdown">Sejarah Desa</a></li>
            <li><a class="dropdown-item text-white" href="/karakter" id="dropdown">Karakteristik Desa</a></li>
            <li><a class="dropdown-item text-white" href="/peta" id="dropdown">Peta Desa</a></li>
            <li><a class="dropdown-item text-white" href="/wisata" id="dropdown">Wisata</a></li>
          </ul>
        </li>
        {{-- End Profile --}}

        {{-- Pemerintahan Desa --}}

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Pemerintah Desa") ? 'active' : '' }} {{ ($title === "Visi & Misi") ? 'active' : '' }} {{ ($title === "Struktur Desa") ? 'active' : '' }} {{ ($title === "BPD Purwodadi") ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="/profil">Pemerintahan Desa <span class="caret"></span></a>

          <ul class="dropdown-menu bg-sucess" style="background-color:#198754">
            <li><a class="dropdown-item text-white" href="/pemerintah" id="dropdown">Pemerintah Desa</a></li>
            <li><a class="dropdown-item text-white" href="/visimisi" id="dropdown">Visi dan Misi</a></li>
            <li><a class="dropdown-item text-white" href="/struktur" id="dropdown">Struktur Organisasi</a></li>
            <li><a class="dropdown-item text-white" href="/bpd" id="dropdown">BPD Purwodadi</a></li>
          </ul>
        </li>
        {{-- End Pemerintahan Desa --}}

        {{-- Pelayanan Desa --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Pelayanan Surat") ? 'active' : '' }} {{ ($title === "Layanan Dokumen") ? 'active' : '' }} {{ ($title === "Permohonan Surat") ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="/profil">Pelayanan <span class="caret"></span></a>

          <ul class="dropdown-menu bg-sucess" style="background-color:#198754">
            <li><a class="dropdown-item text-white" href="/pelayanansurat" id="dropdown">Pelayanan Surat</a></li>
            <li><a class="dropdown-item text-white" href="/dokumen" id="dropdown">Layanan Dokumen</a></li>
          </ul>
        </li>
        {{-- End Pelayanan Desa --}}

        {{-- Pelayanan Desa --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Wilayah Administrasi") ? 'active' : '' }} {{ ($title === "Data Pendidikan") ? 'active' : '' }} {{ ($title === "Data Pekerjaan") ? 'active' : '' }} {{ ($title === "Data Agama") ? 'active' : '' }} {{ ($title === "Data Perkawinan") ? 'active' : '' }} {{ ($title === "Data Jenis Kelamin") ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="/profil">Data Desa <span class="caret"></span></a>

          <ul class="dropdown-menu bg-sucess" style="background-color:#198754">
            <li><a class="dropdown-item text-white" href="/wilayah" id="dropdown">Wilayah Administrasi</a></li>
            <li><a class="dropdown-item text-white" href="/pendidikan" id="dropdown">Data Pendidikan</a></li>
            <li><a class="dropdown-item text-white" href="/pekerjaan" id="dropdown">Data Pekerjaan</a></li>
            <li><a class="dropdown-item text-white" href="/agama" id="dropdown">Data Agama</a></li>
            <li><a class="dropdown-item text-white" href="/perkawinan" id="dropdown">Data Perkawinan</a></li>
            <li><a class="dropdown-item text-white" href="/jeniskelamin" id="dropdown">Data Jenis Kelamin</a></li>
          </ul>
        </li>
        {{-- End Pelayanan Desa --}}

        {{-- Berita Desa --}}
        <li class="nav-item ">
          <a class="nav-link {{ ($title === "Berita Desa") ? 'active' : '' }}" href="/beritadesa">Berita Desa</a>
        </li>
        {{-- End Berita Desa --}}

        {{-- E-Aspirasi --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "E-Aspirasi") ? 'active' : '' }} {{ ($title === "Cek E-Aspirasi") ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="/easpirasi">E-Aspirasi <span class="caret"></span></a>

          <ul class="dropdown-menu bg-sucess" style="background-color:#198754">
            <li>
              <a class="dropdown-item text-white" href="/easpirasi" id="dropdown">Buat Aspirasi</a></li>
            <li>
            <li>
              <a class="dropdown-item text-white" href="/easpirasi-cek" id="dropdown">Cek Aspirasi</a>
            </li>
          </ul>
        </li>
        {{-- End E-Aspirasi --}}

      </ul>
      
      <ul class="nav navbar-nav ms-auto fw-bold">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            |  Hai, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#198754">
            <li><a class="dropdown-item text-white" href="/dashboard" id="dropdown"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item text-white" id="dropdown"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
  
        @else
        <li class="nav-item"> 
          <a href="/login" class="nav-link tombol active"><i class="bi bi-box-arrow-in-right"></i> Login </a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

{{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste hic ea animi. Corporis rem excepturi, consectetur facilis maxime voluptate ratione quidem repellat mollitia temporibus, consequatur distinctio esse maiores necessitatibus, autem nam cum! Aut, maxime exercitationem perferendis quod sequi fuga accusantium eos minima assumenda placeat rerum veniam, dicta doloribus alias quos. Laborum dolorem unde odit? Dolor delectus, soluta reprehenderit nemo perferendis neque natus ratione veniam deserunt dolore dicta, inventore, animi repudiandae odio velit itaque! Architecto totam doloribus sequi impedit? A ea temporibus obcaecati, inventore aliquam eveniet modi eligendi magnam doloremque esse ab fugit adipisci quos quae enim nostrum debitis nulla cumque tenetur voluptatem repellat voluptas, deserunt odit! Reprehenderit, dignissimos. 

Optio hic tempora placeat veritatis commodi necessitatibus alias repellat voluptatem soluta culpa? Nisi eaque perspiciatis error qui cupiditate nulla laborum officia suscipit accusantium atque, totam hic eveniet delectus eligendi magni facilis modi corrupti. Est, ratione velit. Distinctio, fugit qui in aperiam aliquid corrupti recusandae totam nobis sint est vitae similique dolorum maiores ad expedita ipsa inventore. Tempore obcaecati molestias sunt quasi consectetur eum aut. Quos ipsa modi deleniti, veritatis, consequatur provident iste voluptatem autem voluptate totam aspernatur iusto quidem fuga dolorem amet labore facere in vitae inventore velit magni molestiae odio tenetur vero. Et totam repellat quo mollitia sunt, sed deserunt. Autem quaerat nemo libero commodi illum sapiente, unde explicabo maxime sed architecto praesentium cupiditate omnis facilis. 

Repellat sequi cupiditate ratione! Asperiores obcaecati vitae exercitationem earum ea harum iure, beatae assumenda. Culpa labore distinctio laborum quae ab velit autem non sed fugiat iure quidem commodi, aut sit ut fugit debitis, sint dicta magnam molestiae aliquid! Voluptates nobis delectus voluptatem voluptatibus molestiae nemo est praesentium nulla modi exercitationem aspernatur, ratione sed? Quisquam culpa deleniti ullam quos. Exercitationem consequuntur officia iusto esse, vitae doloremque laborum at voluptate quam recusandae similique sunt, aspernatur numquam ut. --}}