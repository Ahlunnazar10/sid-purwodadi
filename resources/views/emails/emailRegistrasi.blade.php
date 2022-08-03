@component('mail::message')
# Akun Berhasil Terdaftar!

Selamat Akun Anda telah Terdaftar pada sistem Kami. Silahkan klik tombol dibawah ini untuk melakukan login.

@component('mail::button', ['url' => 'https://sid.sid-purwodadi.web.id/login'])
Login
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent