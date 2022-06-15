@extends('tampilan.kerangka')

@section('container')
<div class="container" id="text">
  <button type="button" class="btn" id="info"><i class="bi bi-megaphone-fill"></i> Info</button><marquee direction=”left” class="pt-1">Selamat datang di sistem informasi desa & e-aspirasi desa purwodadi</marquee>
</div>
<div class="container">
  <section class="jumbotron text-center mb-5 mt-3">
      <div id="konten">
          <h1 class="text-center">Data Jenis Kelamin Berdasarkan Kartu Keluarga</h1>
          <p class="text-center mb-1" style="font-size: 13px"><i class="bi bi-bookmarks-fill"></i> : Data Desa</p>
          <hr>
        
          <figure class="highcharts-figure">
            <div id="container"></div>
            <p class="highcharts-description mt-3">
              Diatas merupakan diagram lingkaran(Pie Chart) yang menunjukan data presentase Jenis Kelamin Berdasarkan Kartu Keluarga. Data diatas menunjukan bahwa mayoritas penduduk desa Purwodadi berjeniskelamin Laki-laki dan minoritas data adalah yang berjeniskelamin Perempuan.
            </p>
          </figure>
          <script src="https://code.highcharts.com/highcharts.js"></script>
          <script src="https://code.highcharts.com/modules/exporting.js"></script>
          <script src="https://code.highcharts.com/modules/export-data.js"></script>
          <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        @foreach ($jeniskelamins as $jeniskelamin)
          <script>
              // Make monochrome colors
            var pieColors = (function () {
            var colors = [],
                base = Highcharts.getOptions().colors[0],
                i;

            for (i = 0; i < 10; i += 1) {
                // Start out with a darkened base color (negative brighten), and end
                // up with a much brighter color
                colors.push(Highcharts.color(base).brighten((i - 6) / 8).get());
            }
            return colors;
            }());

            // Build the chart
            Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Berikut adalah data diagram Jenis Kelamin berdasarkan kartu keluarga:'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                colors: pieColors,
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                    distance: -50,
                    filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                    }
                }
                }
            },
            series: [{
                name: 'Presentase',
                data: [
                { name: 'Pria', y: {{ $jeniskelamin->pria }} },
                { name: 'Wanita', y: {{ $jeniskelamin->wanita }} }
                ]
            }]
            });
          </script>
        @endforeach
        </div>
      </div>
  </section>
</div> 
@endsection
    
