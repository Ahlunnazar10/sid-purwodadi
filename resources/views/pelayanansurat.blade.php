@extends('tampilan.kerangka')

@section('container')
<div class="container" id="text">
  <button type="button" class="btn" id="info"><i class="bi bi-megaphone-fill"></i> Info</button><marquee direction=”left” class="pt-1">Selamat datang di sistem informasi desa & e-aspirasi desa purwodadi</marquee>
</div>
<div class="container">
  <section class="jumbotron text-center mb-5 mt-3">
      <div id="konten">
          <h1 class="text-center">Pelayanan Surat</h1>
          <p class="text-center mb-1" style="font-size: 13px"><i class="bi bi-bookmarks-fill"></i> : Peraturan Desa</p>
          <hr>

          <p class=" mt-4"><strong>1. LEGALISIR:</strong></p>
            <p> Kepada masyarakat Desa Purwodadi yang ingin mengurus administrasi kependudukan seperti E-KTP, Kartu Keluarga, Akte Kelahiran dan lain-lain bisa datang ke kantor desa dengan membawa persyaratan yang dibutuhkan.</p>
            <p>Untuk pengurusan dokumen kependudukan bisa diurus sendiri ke Dinas Kabupaten terkait. Namun pihak desa juga bisa memfasilitasi hal tersebut. Jadi bagi anda yang memerlukan informasi lainnya bisa menghubungi kantor desa.</p>

            <p class=" mt-4"><strong>2. SURAT IZIN USAHA MIKRO KECIL (IUMK)</strong></p>
            <p> Syarat- Syarat Pengurusan Surat Izin Usaha Mikro Kecil :</p>
            <ul>
                <li>Fotocopy KTP yang masih Berlaku = 1 lembar</li>
                <li>Fotocopy Kartu Keluarga  = 1 lembar</li>
                <li>Rekomendasi dari Kelurahan/Desa Tempat Usaha Asli = 1 lembar</li>
                <li>Pengantar dari RT Tempat Berdirinya Usaha Asli = 1 lembar</li>
                <li>Pas Photo warna ukuran 4×6 = 2 lembar</li>
            </ul>

          <p class=" mt-4"><strong>3. SURAT IZIN REKLAME</strong></p>
            <p> Syarat – Syarat Pengurusan Surat Izin Reklame :</p>
            <ul>
                <li>Permohonan diatas kertas bermaterai Rp. 6000,-</li>
                <li>Rekomendasi dari Kelurahan / Desa yang bersangkutan</li>
                <li>Foto Copy KTP yang masih berlaku</li>
                <li>Foto Copy lunas Pajak Retribusi Daerah</li>
                <li>Materai Rp. 6000 = 2 lembar</li>
                <li>Pas Photo 3 x 4 = 2 lembar</li>
                <li>Surat Izin pemilik tanah jika Reklame ditanah orang lain</li>
                <li>Berita Acara Pemasangan Reklame (Trantib)</li>
            </ul>

          <p class=" mt-4"><strong>4. SURAT IZIN USAHA PERDAGANGAN (SIUP)</strong></p>
            <p> Syarat- Syarat Pengurusan Surat Izin Usaha Perdagangan :</p>
            <ul>
                <li>Fotocopy KTP yang masih Berlaku = 1 lembar</li>
                <li>Fotocopy Bukti Pembayaran Pajak Retribusi Daerah (HO) = 1lembar</li>
                <li>Fotocopy Bukti Pembayaran Pajak Bumi Bangunan (PBB) = 1 lembar</li>
                <li>Rekomendasi dari Kelurahan/Desa Tempat berdirinya Usaha Asli = 1 lembar</li>
                <li>Fotocopy Surat Tanah / Perjanjian Sewa-menyewa = 1 rangkap</li>
                <li>Fotocopy Surat Rekomendasi / Surat Keterangan Kesehatan dari UPTD Kesehatan (untuk usaha Apotik, Praktek</li>
                <li>Bidan/Dokter, Toko Makanan/Kue, Rumah makan, dsb) = 1 lembar</li>
                <li>Fotocopy Akta Pendirian Bagi Koperasi (untuk koperasi yang bermodalkan Kurang dari atau sama dengan Rp. 200.000.000,-) = 1 rangkap</li>
                <li>Pas Photo warna ukuran 3×4 = 2 lembar</li>
                <li>Materai 6.000 = 2 lembar</li>
            </ul>

          <p class=" mt-4"><strong>5. SURAT IZIN TEMPAT USAHA ( SITU )</strong></p>
            <p> Syarat – Syarat Pengurusan Surat Izin Tempar Usaha :</p>
            <ul>
                <li>Fotocopy Kartu Tanda Penduduk ( KTP ) yang masih berlaku</li>
                <li>Pajak Retribusi Daerah</li>
                <li>Fotocopy Pajak Bumi bangunan ( PBB )</li>
                <li>Rekomendasi dari Kelurhan/ Desa</li>
                <li>Fotocopy Surat Tanah
                </li>
                <li>Fotocopy Kepesertaan atau bukti pembayaran iuran BPJS Ketenagakerjaan ( PT, CV )
                    Melaporkan Surat Rekomendasi/ Surat Keterangan dari Kesehatan ( Dokter, Usaha Jualan Makanan, Apotik )</li>
                <li>Akta pendirian bagi PT, CV, yayasan, UD / Koperasi</li>
                <li>Surat Penunjukan bagi Perusahaan Cabang / Perwakilan / akta Pendirian Cabang</li>
                <li>Pas Foto ukuran 3 x 4 sebanyak 2 (dua) Lembar</li>
                <li>Materai Rp. 6000,- 1 (satu) Lembar</li>
                <li>Map 1 (satu) Pcs</li>
                <li>Fotocopy izin HO</li>
            </ul>

          <p class=" mt-4"><strong>6. SURAT IZIN BERKANTOR ( SIB )</strong></p>
            <p> Syarat- Syarat Pengurusan surat izin Berkantor :</p>
            <ul>
                <li>Fotocopy KTP yang Masih berlaku = 1 lembar</li>
                <li>Fotocopy SKRD Retribusi HO tahun berjalan = 1 lembar (Perpanjangan)</li>
                <li>Fotocopy Retribusi Sampah = 1 Lembar</li>
                <li>Fotocopy Rekomendasi Lurah/ Kades = 1 lembar</li>
                <li>Fotocopy Surat Tanah/Perjanjian sewa-menyewa = 1 rangkap
                </li>
                <li>Fotocopy PBB tahun berjalan = 1 rangkap</li>
                <li>Fotocopy Akta Pendirian dari Notaris = 1 rangkap</li>
                <li>Fotocopy SK Kemenhum & HAM ( Perpanjangan )</li>
                <li>Fotocopy akta Pendirian Cabang/Surat penunjukan Pimpinan Cabang = 1 rangkap/ Surat Kuasa</li>
                <li>Fotocopy Surat rekomendasi/petunjuk teknis/keterangan instansi terkait</li>
                <li>Fotocopy Bukti Kepesertaan/Bukti Pembayaran iuran BPJS Ketenagakerjaan</li>
                <li>FotoCopy IMB = 1 rangkap</li>
                <li>Fotocopy Dokumen Amdal/UPL-UKL/SPPL</li>
                <li>Map 1 Pcs</li>
                <li>Materai Rp. 6000,- = 2 lembar</li>
            </ul>

          <p class=" mt-4"><strong>7. SURAT KETERANGAN AHLI WARIS</strong></p>
            <p> Syarat – Syarat Pengurusan Surat Keterangan Ahli waris :</p>
            <ul>
                <li>Surat Keterangan Kematian Asli dari Kelurahan/ Desa</li>
                <li>Surat Pernyataan Ahli Waris diatas materai yang diketahui minimal 2 orang saksi</li>
                <li>Surat Keterangan Ahli Waris dari kelurahan/ Desa</li>
                <li>Kartu Keluarga (KK) Asli yang meninggal dunia</li>
                <li>Foto Copy KTP Ahli Waris= 1 Lembar</li>
                <li>Foto Copy Surat Nikah = 1 Lembar</li>
            </ul>

          <p class=" mt-4"><strong>8. SURAT PINDAH KELUAR</strong></p>
            <p> Syarat – Syarat Pengurusan Surat Pindah Keluar :</p>
            <ul>
                <li>Surat Keterangan Pindah dari Kelurahan/ Desa</li>
                <li>Kartu Keluarga ( KK ) Asli Pemohon Pindah</li>
                <li>Fotocopy Kartu Keluarga (KK) = 1 Lembar</li>
                <li>Fotocopy KTP Kepala Keluarga= 1 Lembar</li>
            </ul>

          <p class=" mt-4"><strong>9. SURAT KETERANGAN TIDAK MAMPU (SKTM)</strong></p>
            <p> Syarat – Syarat Pengurusan Surat Keterangan Tidak Mampu :</p>
            <ul>
                <li>Surat Keterangan tidak mampu dari kelurahan / Desa yang</li>
                <li>Akan diketahui oleh Camat</li>
                <li>Menunjukkan Kartu Keluarga (KK) asli</li>
                <li>Photo Copy Kartu Keluarga (KK) = 1 Lembar</li>
            </ul>

          <p class=" mt-4"><strong>10. REKOMENDASI YAYASAN/ ORGANISASI</strong></p>
            <p> Syarat – Syarat Pengurusan Rekomendasi Yayasan/ Organisasi :</p>
            <ul>
                <li>Foto Copy KTP Ketua, Sekretaris dan Bendahara</li>
                <li>Akte Pendirian Notaris</li>
                <li>Susunan Pengurus</li>
                <li>Surat Keterangan Berdomisili dari Kelurahan / Desa</li>
                <li>Permohonan Rekomendasi yang ditujukan Kepada Camat</li>
            </ul>
      </div>
  </section>
</div> 
@endsection
    
