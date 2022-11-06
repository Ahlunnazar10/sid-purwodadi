<style>
  @media screen and (max-width: 600px) {
    #center {
        text-align: center;
        width: 50%;
        margin: auto;
    }
}
</style>

<div class="container-fluid" style="background-image:url('/img/batik.png');">
  <section class="jumbotron text-center">
    <div class="row">
      <div class="col">
        <img src="/img/Malang.png" alt="Logo Kab.Malang" class="img ban-img img-fluid mt-3" width="180">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h3 style="font-weight: 700; color:#055160">Sistem Informasi Desa Purwodadi</h3>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="fs-6" style="color:#055160;font-weight:500">Kec. Tirtoyudo - Kab. Malang - Prov. Jawa Timur</p>

      </div>
    </div>
  </section>
</div>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#198754">
  <div class="container">
    <button class="navbar-toggler m-auto mb-2 mt-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto fw-bold">
        <li class="nav-item ">
          <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" href="/">Beranda</a>
        </li>

        {{-- Profile --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Sejarah") ? 'active' : '' }} {{ ($title === "Karakteristik") ? 'active' : '' }} {{ ($title === "Peta & Potensi Desa") ? 'active' : '' }} {{ ($title === "Wisata") ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdown-profile">Profil Desa <span class="caret"></span></a>

          <ul class="dropdown-menu bg-sucess" style="background-color:#198754" id="center">
            <li><a class="dropdown-item text-white" href="/sejarah" id="dropdown">Sejarah Desa</a></li>
            <li><a class="dropdown-item text-white" href="/karakter" id="dropdown">Karakteristik Desa</a></li>
            <li><a class="dropdown-item text-white" href="/peta" id="dropdown">Peta Potensi Desa</a></li>
            <li><a class="dropdown-item text-white" href="/wisata" id="dropdown">Wisata</a></li>
          </ul>
        </li>
        {{-- End Profile --}}

        {{-- Pemerintahan Desa --}}

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Pemerintah Desa") ? 'active' : '' }} {{ ($title === "Visi & Misi") ? 'active' : '' }} {{ ($title === "Struktur Desa") ? 'active' : '' }} {{ ($title === "BPD Purwodadi") ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pemerintahan Desa <span class="caret"></span></a>

          <ul class="dropdown-menu bg-sucess" style="background-color:#198754" id="center">
            <li><a class="dropdown-item text-white" href="/pemerintah" id="dropdown">Pemerintah Desa</a></li>
            <li><a class="dropdown-item text-white" href="/visimisi" id="dropdown">Visi dan Misi</a></li>
            <li><a class="dropdown-item text-white" href="/struktur" id="dropdown">Struktur Organisasi</a></li>
            <li><a class="dropdown-item text-white" href="/bpd" id="dropdown">BPD Purwodadi</a></li>
          </ul>
        </li>
        {{-- End Pemerintahan Desa --}}

        {{-- Pelayanan Desa --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Pelayanan Surat") ? 'active' : '' }} {{ ($title === "Layanan Dokumen") ? 'active' : '' }} {{ ($title === "Permohonan Surat") ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pelayanan <span class="caret"></span></a>

          <ul class="dropdown-menu bg-sucess" style="background-color:#198754" id="center">
            <li><a class="dropdown-item text-white" href="/pelayanansurat" id="dropdown">Pelayanan Surat</a></li>
            <li><a class="dropdown-item text-white" href="/dokumen" id="dropdown">Layanan Dokumen</a></li>
          </ul>
        </li>
        {{-- End Pelayanan Desa --}}

        {{-- Pelayanan Desa --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Wilayah Administrasi") ? 'active' : '' }} {{ ($title === "Data Pendidikan") ? 'active' : '' }} {{ ($title === "Data Pekerjaan") ? 'active' : '' }} {{ ($title === "Data Agama") ? 'active' : '' }} {{ ($title === "Data Perkawinan") ? 'active' : '' }} {{ ($title === "Data Jenis Kelamin") ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Data Desa <span class="caret"></span></a>

          <ul class="dropdown-menu bg-sucess" style="background-color:#198754" id="center">
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
          <a class="nav-link dropdown-toggle {{ ($title === "E-Aspirasi") ? 'active' : '' }} {{ ($title === "Cek E-Aspirasi") ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">E-Aspirasi <span class="caret"></span></a>

          <ul class="dropdown-menu bg-sucess" style="background-color:#198754" id="center">
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
          <a href="/login" class="nav-link tombol active "><i class="bi bi-box-arrow-in-right"></i> Login </a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>