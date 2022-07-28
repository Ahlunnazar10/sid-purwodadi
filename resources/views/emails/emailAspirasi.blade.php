@component('mail::message')
# Aspirasi Telah Terkirim!

Selamat Aspirasi Anda telah terkirim pada Sistem Kami. Mohon menunggu hingga maksimal 14 hari kerja Kemudian Anda akan kami konfirmasi kembali jika Aspirasi Anda telah kami proses.

@component('mail::button', ['url' => 'http://sid-purwodadi.web.id/easpirasi-cek'])
Cek Aspirasi
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
