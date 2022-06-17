@extends('tampilan.kerangka')

@section('container')
<style>
  .konten {
    color: #055160;
    text-align: justify;
    text-justify: newspaper;
    /* background-color: whitesmoke;
    border: 1px solid #fff;
    border-radius: 15px;
    padding: 30px; */
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
}
</style>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="/img/desa.jpg" class="d-block w-100" alt="Gambar Berita" id="gelap">
      </div>
  </div>
      <div class="container">
          <div class="carousel-caption">
          <h1>Berita & Informasi Desa Purwodadi.</h1>
          <p>Berikut halaman yang memuat Berita, Informasi, & Pengumuman Seputar Desa Purwodadi, Kecamatan Tirtoyudo, Kabupaten Malang.</p>
          <p><a class="btn btn-lg btn-primary" href="#berita">Jelajahi Berita</a></p>
          </div>
      </div>
</div>

<div class="konten">
  <div class="container">
        <h3 class="text-center mb-3 mt-5" style="padding: 15px;font-weight:300;padding-top:30px" id="berita">Mau cari berita apa hari ini?</h3>
        <div class="row justify-content-center mb-3">
          <div class="col-md-8">
            <form action="/beritadesa">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari berita seputar desa Purwodadi disini.." name="cari" value="{{ request('cari') }}">
                <button class="btn btn-outline-secondary" type="submit" href="#berita"><i class="bi bi-search"></i></button>
              </div>
            </form>
          </div>
        </div>

        @if ($beritadesa->count() )
          <div class="card mb-3">
            @if ($beritadesa[0]->image)
            <div style="max-height:400px; overflow:hidden">
                <img src="{{ asset('storage/' . $beritadesa[0]->image) }}" alt="Gambar Berita" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x300?{{ $beritadesa[0]->kategori->name }}" class="gambar">
            @endif

            {{-- <img src="https://source.unsplash.com/1200x400?{{ $beritadesa[0]->kategori->name }}" class="gambar"> --}}

            <div class="card-body text-center">
              <a href="/beritadesa/{{ $beritadesa[0]->slug }}" class="text-decoration-none"> <h4 class="card-title" style="color:#055160">{{ $beritadesa[0]->title }}</h4> </a>
              <p>
                <small class="text-muted">
                  By: <a href="/penulis/{{ $beritadesa[0]->author->username }}" class="text-decoration-none">{{ $beritadesa[0]->author->name }}</a> in <a href="/kategories/{{ $beritadesa[0]->kategori->slug }}" class="text-decoration-none">{{ $beritadesa[0]->kategori->name }}</a> {{ $beritadesa[0]->created_at->diffForHumans() }} 
                </small>
              </p>
              <p class="card-text">{{ $beritadesa[0]->excerpt }}</p>
              <a href="/beritadesa/{{ $beritadesa[0]->slug }}" class="text-decoration-none text-white btn" style="background-color:#055160">Selengkapnya <i class="bi bi-arrow-right"></i> </a>
            </div>
          </div>

          <div class="container">
            <div class="row">
              @foreach ($beritadesa->skip(1) as $berita)
              <div class="col-md-4 mb-3">
                <div class="card mb-5">
                  <div>
                    <a href="/kategories/{{ $berita->kategori->slug }}"><small class="position-absolute p-2 text-white" style="background-color: rgba(0, 0, 0, 0.6)">{{ $berita->kategori->name }}</small></a>  
                  </div>

                  @if ($berita->image)
                    <img src="{{ asset('storage/' . $berita->image) }}" alt="Gambar Berita" class="img-fluid" style="height: 200px">
                  @else
                    <img src="https://source.unsplash.com/300x200?{{ $berita->kategori->name }}" class="card-img-top" alt="Gambar Berita">
                  @endif
                  

                  <div class="card-body">
                    <h5 class="card-title text-start">{{ $berita->title }}</h5>
                    <p>
                      <small class="text-muted">
                        By: <a href="/penulis/{{ $berita->author->username }}" class="text-decoration-none">{{ $berita->author->name }}</a> {{ $berita->created_at->diffForHumans() }} 
                      </small>
                    </p>
                    <p class="card-text">{{ $berita->excerpt }}</p>
                    <a href="/beritadesa/{{ $berita->slug }}" class="btn text-white" style="background-color:#055160">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              
              @endforeach
              
            </div>

              <ul class="pagination justify-content-end">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="/beritadesa?page=1">1</a></li>
                <li class="page-item"><a class="page-link" href="/beritadesa?page=2">2</a></li>
                <li class="page-item"><a class="page-link" href="/beritadesa?page=3">3</a></li>
                <li class="page-item"><a class="page-link" href="/beritadesa?page=4">4</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
   
            {{ $beritadesa->links() }}
            
            
          </div>
          
          @else
          <p class="text-center fs-4">Berita tidak ditemukan</p>
          @endif

  </div>
  
</div>

@endsection


    
