
@extends('dashboard.tampilan.kerangka')

@section('container')

<h1 class="text-center mb-5 mt-3" style="padding: 15px">Kategori Berita : {{ $kategoris->name }}</h1>

<div class="card bg-dark text-white">
    <img src="https://source.unsplash.com/300x200?{{ $kategoris->name }}" class="card-img" alt="{{ $kategoris->name }}" style="height: 300px">
    <div class="card-img-overlay d-flex align-items-center p-0">
      <h3 class="card-title text-center flex-fill p-3" style="background-color: rgba(0, 0, 0, 0.6)" > ~{{ $kategoris->name }}~</h3>
    </div>
  </div>
@endsection