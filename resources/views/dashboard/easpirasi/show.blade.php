
@extends('dashboard.tampilan.kerangka')

@section('container')

<div class="container">
    <div class="row justify-content-center p-5">
        <div class="col">
          <h2 class="text-center mb-3 text-uppercase">
              ASPIRASI {{ $aspirasi->nama }}
          </h2>

          
          <article class="mb-3 mt-4" style="text-align: justify; text-justify:newspaper">
            {!! $aspirasi->aspirasi !!}
          </article>
          
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Foto KTP :
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="mb-2" style="width:400px; height:250px; overflow:hidden">
                  <img src="{{ asset('storage/' . $aspirasi->ktp) }}" alt="Gambar Berita" class="img-fluid mb-2 mt-3">
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Bukti pendukung Aspirasi :
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                @if ($aspirasi->pendukung)
                  <div class="mb-2" style="width:400px; height:250px; overflow:hidden">
                      <img src="{{ asset('storage/' . $aspirasi->pendukung) }}" alt="Gambar Berita" class="img-fluid mb-2 mt-3">
                  </div>
                @else
                  
                @endif
              </div>
            </div>
          </div>

            <div class="mt-3">
              <a href="/dashboard/easpirasi" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
              <form action="/dashboard/easpirasi/{{ $aspirasi->id }}" method="POST" class="d-inline">
                  @csrf
  
                  <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><span data-feather="x-circle"></span> Hapus berita</button>
              </form>
            </div>

        </div>
    </div>
</div>

@endsection