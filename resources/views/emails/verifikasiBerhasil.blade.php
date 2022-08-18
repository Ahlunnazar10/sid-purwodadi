@component('mail::message')
# Verifikasi Berhasil!

Selamat akun Anda telah berhasil diverifikasi oleh Administrator. Silahkan klik tombol dibawah untuk melakukan login!

@component('mail::button', ['url' => 'https://sid.sid-purwodadi.web.id/login'])
Login
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent