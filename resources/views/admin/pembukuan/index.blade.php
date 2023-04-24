@extends('layouts.admin.app')

@section('title', 'Chart')

@section('content')

  <div class="card-header py-4">
      <h4 class="text-center">
          <b>Pembukuan Usaha</b>
      </h4>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <div class="chart">
                <canvas id="barChart" style="min-height: 450px; height: 450px; max-height: 650px; max-width: 100%;"></canvas>
              </div>
            </div>
          </div>
        <canvas id="areaChart" style="min-height: 450px; height: 450px; max-height: 650px; max-width: 100%;"></canvas>
      </div>
    </div>
  </section>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
    /* ChartJS
    * -------
    * Here we will create a few charts using ChartJS
    */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
        labels  : ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
        datasets: [
        {
            label               : 'Pengeluaran',
            backgroundColor     : '#DD9797',
            borderColor         : '#DD9797',
            pointRadius          : false,
            pointColor          : '#DD9797',
            pointStrokeColor    : '#DD9797',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: '#DD9797',
            data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
            label               : 'Pemasukan',
            backgroundColor     : '#58AFAA',
            borderColor         : '#58AFAA',
            pointRadius         : false,
            pointColor          : '#58AFAA',
            pointStrokeColor    : '#58AFAA',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: '#58AFAA',
            data                : [65, 59, 80, 81, 56, 55, 40]
        },
        ]
    }

    
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
    }

    new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
    })

    })
</script>

@include('admin.menu')
@endsection

  