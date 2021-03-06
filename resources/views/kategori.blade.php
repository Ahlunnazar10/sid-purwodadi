@extends('tampilan.kerangka')

@section('container')
<style>
  #text {
    color: #055160;
    width: 98%;
    text-transform: uppercase;
    font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    background-color: whitesmoke;
    border: 1px solid whitesmoke;
    border-radius: 15px;
    margin-left: 10px;
    padding: 5px;
    margin-bottom: 10px;
}
#info {
    color: white;
    background-color: #055160;
    border-radius: 15px;
    margin-left: -7px;
    padding: 10.5px;
    margin-top: -6px;
    position: absolute;
    z-index: 1;
    font-style: oblique;
}
#jumbotron {
    /* filter: brightness(100%); */
    background-color: whitesmoke;
    border: 1px solid #fff;
    border-radius: 15px;
    padding: 15px;
}
.button {
    display: inline-block;
    color: #dedee0;
    text-decoration: none;
    padding: 5px 10px;
    border: 2px solid #dedee0;
    border-radius: 10px;
}
.button:hover {
    animation: pulsate 1s ease-in-out;
    color: #dedee0;
}
#konten {
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
#up {
    color: #055160;
    text-decoration: none;
    margin-top: -50px;
    float: right;
    font-size: 50px;
}
.b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, 0.1);
    border: solid rgba(0, 0, 0, 0.15);
    border-width: 1px 0;
    box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
        inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
}

.bi {
    vertical-align: -0.125em;
    fill: currentColor;
}

#text-footer {
    color: #055160;
    margin-left: 18px;
    margin-top: 20px;
    font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
    font-size: 30px;
}
.verikal_center {
    position: sticky;
    color: #055160;
    position: absolute;
    border-left: 2px solid #055160;
    margin-top: 15px;
    height: 110px;
    width: 2px;
}
#footer-alamat {
    color: #055160;
    margin-left: 15px;
    margin-top: 25px;
    font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
}
#footer-bawah {
    color: #212529;
    margin-top: -20px;
}
.tombol {
    color: #fff;
    margin: auto;
    width: 120px;
    height: 40px;
    border-radius: 45px;
    cursor: pointer;
    border: none;
    /* text-transform: uppercase; */
    letter-spacing: 2px;
    font-weight: bold;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.4);
    transition: all 0.3s ease;
}
.tombol:hover {
    background: #f18f01;
    transform: translateY(-2px);
    color: #fff;
    box-shadow: 0px 5px 15px rgba(142, 218, 216, 0.445);
}
.dropdown:hover > .dropdown-menu {
    display: block;
    border-bottom: solid #fff;
}
#dropdown:hover {
    background-color: #f18f01;
}
</style>
<div id="konten">
  
<div class="container">

    <h1 class="text-center mb-5 mt-5" style="padding: 15px">Kategori Berita : {{ $kategori }}</h1>

    <div class="container">
        <div class="row">
            @foreach ($berita as $b)
            <div class="col-md-4 mb-3">
              <div class="card">
                <div>
                  <a href="/kategories/{{ $b->kategori->slug }}"><small class="position-absolute p-2 text-white" style="background-color: rgba(0, 0, 0, 0.6)">{{ $b->kategori->name }}</small></a>  
                </div>
                    <img src="{{ asset('storage/' . $b->image) }}" alt="Gambar Berita" class="img-fluid" style="height: 200px">
                <div class="card-body">
                  <h5 class="card-title">{{ $b->title }}</h5>
                  <p>
                    <small class="text-muted">
                      <img src="/img/user.svg" alt="" style="margin-top: -6px"> <a href="/penulis/{{ $b->author->username }}" class="text-decoration-none">{{ $b->author->name }}</a>&nbsp; <img src="/img/clock.svg" height="14" alt="" style="margin-top: -4px"> {{ $b->created_at->diffForHumans() }} 
                    </small>
                  </p>
                  <p class="card-text">{{ $b->excerpt }}</p>
                  <a href="/beritadesa/{{ $b->slug }}" class="btn text-white" style="background-color:#055160">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
      
      <a href="/beritadesa" style="padding: 15px">Kembali</a>
    </section>
</div>
</div>

@endsection
    