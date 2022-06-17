@extends('tampilan.kerangka')

@section('container')
<div class="container">
  <section class="jumbotron text-center mb-5 mt-3">
      <div id="konten">
          <h1 class="text-center">Data Pendidikan Berdasarkan Kartu Keluarga</h1>
          <p class="text-center mb-1" style="font-size: 13px"><i class="bi bi-bookmarks-fill"></i> : Data Desa</p>
          <hr>
        
          <figure class="highcharts-figure">
            <div id="container"></div>
            <p class="highcharts-description mt-3">
              Diatas merupakan diagram lingkaran(Pie Chart) yang menunjukan data presentase Pendidikan Berdasarkan Kartu Keluarga. Data diatas menunjukan bahwa mayoritas penduduk desa berpendidikan lulusan SMA dan minoritas data adalah lulusan Strata II sedangkan masih banyak penduduk desa  Purwodadi yang tidak sekolah.
            </p>
          </figure>
          <script src="https://code.highcharts.com/highcharts.js"></script>
          <script src="https://code.highcharts.com/modules/exporting.js"></script>
          <script src="https://code.highcharts.com/modules/export-data.js"></script>
          <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        @foreach ($pendidikans as $pendidikan)
          <script>
              // Make monochrome colors
            var pieColors = (function () {
            var colors = [],
                base = Highcharts.getOptions().colors[0],
                i;

            for (i = 0; i < 10; i += 1) {
                // Start out with a darkened base color (negative brighten), and end
                // up with a much brighter color
                colors.push(Highcharts.color(base).brighten((i - 4) / 6).get());
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
                text: 'Berikut adalah data diagram Pendidikan berdasarkan kartu keluarga:'
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
                    value: 2
                    }
                }
                }
            },
            series: [{
                name: 'Presentase',
                data: [
                { name: 'Tidak Sekolah', y: {{ $pendidikan->tidak_sekolah }} },
                { name: 'Tamat SD', y: {{ $pendidikan->tamat_sd }} },
                { name: 'Tamat SMP', y: {{ $pendidikan->tamat_smp }} },
                { name: 'Tamat SMA', y: {{ $pendidikan->tamat_sma }} },
                { name: 'Strata I', y: {{ $pendidikan->strata1 }} },
                { name: 'Strata II', y: {{ $pendidikan->strata2 }} }
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
    
