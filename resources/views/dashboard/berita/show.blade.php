
@extends('dashboard.tampilan.kerangka')

@section('container')

    <div class="row justify-content-center p-5">
        <div class="col">
          <h2 class="text-center mb-3 text-uppercase">
              {{ $berita->title }}
          </h2>
          <hr>

          @if ($berita->image)
            <div style="max-height:350px; overflow:hidden">
                <img src="{{ asset('storage/' . $berita->image) }}" alt="Gambar Berita" class="img-fluid mb-2 mt-2">
            </div>
          @else
            <img src="https://source.unsplash.com/1200x400?{{ $berita->kategori->name }}" alt="Gambar Berita" class="img-fluid mb-4 mt-3">
          @endif

          <article class="mb-3 mt-4" style="text-align: justify; text-justify:newspaper">
              {!! $berita->body !!}
          </article>

            <a href="/dashboard-beritadesa" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
            <a href="/dashboard-beritadesa/{{ $berita->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit berita</a>
            <form action="/dashboard-beritadesa/{{ $berita->slug }}" method="POST" class="d-inline">
                @csrf

                <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><span data-feather="x-circle"></span> Hapus </button>
            </form>

        </div>
    </div>
</div>

@endsection