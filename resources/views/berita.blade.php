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
</style>
<div id="konten">
  <div class="container" id="text">
    <button type="button" class="btn" id="info"><i class="bi bi-megaphone-fill"></i> Info</button><marquee direction=”left” class="pt-1">Selamat datang di sistem informasi desa & e-aspirasi desa purwodadi</marquee>
  </div>

  
<div class="container">
    <section class="jumbotron mt-3 mb-5" id="jumbotron">

    <div class="container">
      <div class="row justify-content-center p-5">
          <div class="col">
            <h2 class="text-center">
                {{ $berita->title }}
            </h2>

            <p class="text-center mb-4">By: <a href="/penulis/{{ $berita->author->username }}" class="text-decoration-none">{{ $berita->author->name }}</a> in <a href="/kategories/{{ $berita->kategori->slug }}" class="text-decoration-none">{{ $berita->kategori->name }}</a> </p>

            <div class="mb-4" style="max-height:400px; overflow:hidden">
            @if ($berita->image)
                <img src="{{ asset('storage/' . $berita->image) }}" alt="Gambar Berita" class="img-fluid">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $berita->kategori->name }}" alt="Gambar Berita" class="img-fluid mb-4">
            @endif
            </div>
            

            <article class="mb-3">
                {!! $berita->body !!}
            </article>

            <a href="/beritadesa">Kembali</a>
          </div>
      </div>
    </div>
        
    </section>
</div>
</div>

{{-- Artikel::create([
    'title' => 'Postingan Ketiga',
    'kategori_id' => 3,
    'slug' => 'postingan-ketiga',
    'excerpt' => 'Excerpt Postingan Ketiga',
    'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dolores repellendus iste, consequatur totam nostrum voluptate odio ad vel laborum esse deleniti, exercitationem cupiditate? Iste cupiditate deleniti laborum sed pariatur doloremque ad necessitatibus minima dolor tempore repudiandae odit error, harum voluptatibus sint temporibus, omnis labore corrupti, enim assumenda rerum aspernatur. Possimus voluptatibus voluptatem temporibus atque delectus doloremque consectetur.</p> <p>Commodi quisquam eveniet ducimus! Sapiente velit veniam ut. Sint veritatis suscipit quae? Reiciendis recusandae nihil, delectus a sit dignissimos commodi architecto adipisci error perspiciatis ut ipsa sunt est, voluptate animi obcaecati, expedita voluptatum officia perferendis. Iste molestias asperiores itaque accusamus libero natus aliquam excepturi ipsam! Consectetur, consequuntur, debitis doloribus quasi voluptate aperiam deserunt facilis harum nam blanditiis saepe, eaque nesciunt totam laboriosam in eius quam veniam mollitia nemo vel eveniet? Culpa velit ducimus, facilis ab harum quas ipsa repudiandae laboriosam delectus debitis libero hic, saepe molestias laudantium, nulla illum vero dolor numquam odit deleniti.</p> <p>Ducimus necessitatibus, nihil sed reiciendis unde distinctio aliquid vel minus, laudantium ad itaque! Eligendi excepturi error deleniti? Laudantium error suscipit iure repellat fugit ipsa amet aliquid hic architecto explicabo distinctio sint atque est, quisquam libero voluptates corporis. Non architecto doloremque vel possimus! Placeat ipsum aspernatur repellendus molestiae omnis obcaecati debitis quia, amet explicabo optio cupiditate dolorum, incidunt autem nobis atque dignissimos esse libero quis quaerat ipsa quo unde! Eaque earum omnis, itaque molestias saepe incidunt, ea possimus, soluta rerum id voluptates qui quam? Recusandae, ipsa facere impedit earum soluta perferendis quisquam vitae laborum error illo ad dolorem velit voluptate ex tenetur odio quos ipsam natus culpa ab. Consectetur possimus sit id, maxime architecto vitae hic laborum excepturi quisquam, minima error sequi dolorum! Dignissimos, iure. Ullam odio quas inventore atque animi modi vero architecto iusto vitae fuga, expedita veniam, perferendis quasi quaerat nihil quidem voluptatibus provident? Id, ipsam sequi.</p>'
]) --}}

@endsection
    