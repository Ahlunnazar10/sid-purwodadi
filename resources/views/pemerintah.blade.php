@extends('tampilan.kerangka')

@section('container')
<div class="container" id="text">
  <button type="button" class="btn" id="info"><i class="bi bi-megaphone-fill"></i> Info</button><marquee direction=”left” class="pt-1">Selamat datang di sistem informasi desa & e-aspirasi desa purwodadi</marquee>
</div>
<div class="container">
  <section class="jumbotron text-center mb-5 mt-3">
      <div id="konten">
          <h1 class="text-center">Pemerintah Desa Purwodadi</h1>
          <p class="text-center mb-1" style="font-size: 13px"><i class="bi bi-bookmarks-fill"></i> : PERMENDAGRI NOMOR 84 TAHUN 2015 TENTANG SUSUNAN ORGANISASI DAN TATA KERJA PEMERINTAH DESA</p>
              <img src="/img/kantor.jpg" alt="Kantor Desa" class="img ban-img img-fluid mt-3 mb-3" id="img-konten">
              <h4 class="text-center mb-3 mt-4">TATA KERJA PEMERINTAH DESA PURWODADI KECAMATAN TIRTOYUDO KABUPATEN MALANG</h4>
              <p><strong>Kepala Desa</strong> bertugas menyelenggarakan Pemerintahan Desa, melaksanakan pembangunan, pembinaan kemasyarakatan, dan pemberdayaan masyarakat. Untuk melaksanakan tugas Kepala Desa memiliki fungsi-fungsi sebagai berikut:</p>
              <ol>
                  <li>Menyelenggarakan Pemerintahan Desa, seperti tata praja Pemerintahan, penetapan peraturan di desa, pembinaan masalah pertanahan, pembinaan ketentraman dan ketertiban, melakukan upaya perlindungan masyarakat, administrasi kependudukan, dan penataan dan pengelolaan wilayah.</li>
                  <li>Melaksanakan pembangunan, seperti pembangunan sarana prasarana perdesaan, dan pembangunan bidang pendidikan, kesehatan.</li>
                  <li>Pembinaan kemasyarakatan, seperti pelaksanaan hak dan kewajiban masyarakat, partisipasi masyarakat, sosial budaya masyarakat, keagamaan, dan ketenagakerjaan.</li>
                  <li>Pemberdayaan masyarakat, seperti tugas sosialisasi dan motivasi masyarakat di bidang budaya, ekonomi, politik, lingkungan hidup, pemberdayaan keluarga, pemuda, olahraga, dan karang taruna.</li>
                  <li>Menjaga hubungan kemitraan dengan lembaga masyarakat dan lembaga lainnya.</li>
              </ol>
              <p><strong>Sekretaris Desa</strong> berkedudukan sebagai unsur pimpinan Sekretariat Desa. Sekretaris Desa bertugas membantu Kepala Desa dalam bidang administrasi pemerintahan. Untuk melaksanakan tugas, Sekretaris Desa mempunyai fungsi:</p>
              <ol>
                <li>Melaksanakan urusan ketatausahaan seperti tata naskah, administrasi surat menyurat, arsip, dan ekspedisi.</li>
                <li>Melaksanakan urusan umum seperti penataan administrasi perangkat desa, penyediaan prasarana perangkat desa dan kantor, penyiapan rapat, pengadministrasian aset, inventarisasi, perjalanan dinas, dan pelayanan umum.</li>
                <li>Melaksanakan urusan keuangan seperti pengurusan administrasi keuangan, administrasi sumber-sumber pendapatan dan pengeluaran, verifikasi administrasi keuangan, dan admnistrasi penghasilan Kepala Desa, Perangkat Desa, BPD, dan lembaga pemerintahan desa lainnya.</li>
                <li>Melaksanakan urusan perencanaan seperti menyusun rencana anggaran pendapatan dan belanja desa, menginventarisir data-data dalam rangka pembangunan, melakukan monitoring dan evaluasi program, serta penyusunan laporan.</li>
            </ol>
            <p><strong>Kepala urusan</strong> berkedudukan sebagai unsur staf sekretariat. Kepala urusan bertugas membantu Sekretaris Desa dalam urusan pelayanan administrasi pendukung pelaksanaan tugas-tugas pemerintahan. Untuk melaksanakan tugas kepala urusan mempunyai fungsi:</p>
            <ol>
              <li><strong>Kepala urusan tata usaha dan umum</strong> memiliki fungsi seperti melaksanakan urusan ketatausahaan seperti tata naskah, administrasi surat menyurat, arsip, dan ekspedisi, dan penataan administrasi perangkat desa, penyediaan prasarana perangkat desa dan kantor, penyiapan rapat, pengadministrasian aset, inventarisasi, perjalanan dinas, dan pelayanan umum.</li>
              <li><strong>Kepala urusan keuangan</strong> memiliki fungsi seperti melaksanakan urusan keuangan seperti pengurusan administrasi keuangan, administrasi sumber-sumber pendapatan dan pengeluaran, verifikasi administrasi keuangan, dan admnistrasi penghasilan Kepala Desa, Perangkat Desa, BPD, dan lembaga pemerintahan desa lainnya.</li>
              <li><strong>Kepala urusan perencanaan</strong> memiliki fungsi mengoordinasikan urusan perencanaan seperti menyusun rencana anggaran pendapatan dan belanja desa, menginventarisir data-data dalam rangka pembangunan, melakukan monitoring dan evaluasi program, serta penyusunan laporan.</li>
          </ol>
          <p><strong>Kepala Kewilayahan</strong> atau sebutan lainnya berkedudukan sebagai unsur satuan tugas kewilayahan yang bertugas membantu Kepala Desa dalam pelaksanaan tugasnya di wilayahnya. Untuk melaksanakan tugas Kepala Kewilayahan/Kepala Dusun memiliki fungsi:</p>
              <ol>
                <li>Pembinaan ketentraman dan ketertiban, pelaksanaan upaya perlindungan masyarakat, mobilitas kependudukan, dan penataan dan pengelolaan wilayah.</li>
                <li>Mengawasi pelaksanaan pembangunan di wilayahnya.</li>
                <li>Melaksanakan pembinaan kemasyarakatan dalam meningkatkan kemampuan dan kesadaran masyarakat dalam menjaga lingkungannya.</li>
                <li>Melakukan upaya-upaya pemberdayaan masyarakat dalam menunjang kelancaran penyelenggaraan pemerintahan dan pembangunan.</li>
            </ol>
            <p><strong>Kepala seksi</strong> berkedudukan sebagai unsur pelaksana teknis. Kepala seksi bertugas membantu Kepala Desa sebagai pelaksana tugas operasional. Untuk melaksanakan tugas Kepala Seksi mempunyai fungsi:</p>
            <ol>
              <li><strong>Kepala seksi pemerintahan</strong> mempunyai fungsi melaksanakan manajemen tata praja Pemerintahan, menyusun rancangan regulasi desa, pembinaan masalah pertanahan, pembinaan ketentraman dan ketertiban, pelaksanaan upaya perlindungan masyarakat, kependudukan, penataan dan pengelolaan wilayah, serta pendataan dan pengelolaan Profil Desa.</li>
              <li><strong>Kepala seksi kesejahteraan</strong> mempunyai fungsi melaksanakan pembangunan sarana prasarana perdesaan, pembangunan bidang pendidikan, kesehatan, dan tugas sosialisasi serta motivasi masyarakat di bidang budaya, ekonomi, politik, lingkungan hidup, pemberdayaan keluarga, pemuda, olahraga, dan karang taruna.</li>
              <li><strong>Kepala seksi pelayanan</strong> memiliki fungsi melaksanakan penyuluhan dan motivasi terhadap pelaksanaan hak dan kewajiban masyarakat, meningkatkan upaya partisipasi masyarakat, pelestarian nilai sosial budaya masyarakat, keagamaan, dan ketenagakerjaan.</li>
          </ol>
      </div>
  </section>
</div>  
@endsection
    
