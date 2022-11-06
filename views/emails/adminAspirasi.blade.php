@component('mail::message')
@foreach ($aspirasis as $aspirasi)
# Terdapat Aspirasi dari {{ $aspirasi->nama }}!

Berikut merupakan isi Aspirasi :
{!! $aspirasi->aspirasi !!}

@component('mail::button', ['url' => 'https://sid.sid-purwodadi.web.id/login'])
Selengkapnya
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endforeach
@endcomponent