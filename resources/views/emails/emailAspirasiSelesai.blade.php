@component('mail::message')
# Aspirasi Telah Diproses!

Selamat Aspirasi Anda telah kami Proses. Mohon tetap memantau Aspirasi Anda hingga benar-benar selesai terlaksana.

@component('mail::button', ['url' => ''])
Selengkapnya
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
