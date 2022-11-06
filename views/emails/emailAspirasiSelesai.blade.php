@component('mail::message')
# Aspirasi Telah Diproses!

Selamat Aspirasi Anda telah kami Proses. Mohon tetap memantau Aspirasi Anda hingga benar-benar terlaksana.

@component('mail::button', ['url' => 'https://sid.sid-purwodadi.web.id/beritadesa'])
Selengkapnya
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
