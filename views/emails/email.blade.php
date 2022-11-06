@component('mail::message')
# Aspirasi Anda telah terkirim!

Terimakasih telah berpartisipasi dalam pengawasan kinerja Pemerintah Desa Purwodadi. Aspirasi Anda sangat bermanfaat bagi kami.

@component('mail::button', ['url' => ''])
Cek Aspirasi
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
