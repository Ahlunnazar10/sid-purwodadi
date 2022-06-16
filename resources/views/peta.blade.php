@extends('tampilan.kerangka')

@section('container')

<div class="container">
  <section class="jumbotron text-center mb-5 mt-3">
      <div id="konten">
          <h1 class="text-center">Peta Wilayah Desa Purwodadi</h1>
          <p class="text-center mb-1" style="font-size: 13px"><i class="bi bi-bookmarks-fill"></i> : Google Maps</p>
          <hr>
          <div id="peta">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63157.616489767606!2d112.78837727740384!3d-8.367087540306546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd60f706dad2e5f%3A0x175f687fd299ef41!2sPurwodadi%2C%20Kec.%20Tirtoyudo%2C%20Kabupaten%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1650617911630!5m2!1sid!2sid" width="600" height="450" style="border:0; width:125%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
          </div>
      </div>
  </section>
</div>    

@endsection
    
