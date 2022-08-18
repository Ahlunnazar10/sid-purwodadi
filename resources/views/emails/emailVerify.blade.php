@component('mail::message')
@foreach ($users as $user)
# User {{ $user->name }} telah melakukan registrasi pada Sistem!

Anda dapat melakukan verifikasi akun tersebut agar dapat melakukan login pada sistem!

@component('mail::button', ['url' => 'https://sid.sid-purwodadi.web.id/login'])
Verifikasi
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endforeach
@endcomponent