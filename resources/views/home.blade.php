@extends('template.header')





@section('content_header')
<style type="text/css">
  
  .banner{
    position: relative;
    width: 100%;
    height: calc(95vh - 50px);
    background-color: #F5F5F5;
    background-size:cover; 
    background-position: center;
    transition: all .1s ease-in-out;
    background-image: url('images/f22.jpg');
    animation: banner 60s  infinite linear;
  }
  .banner-content{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    color:#FFF;
    background-color: rgba(0,0,0,.6); 
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .banner-content h1{
    margin: 0;
    padding: 0;
    padding-bottom: 30px;
    font-size: 40px;
    text-align: center;
  }
  @keyframes banner{
    0%{
      background-image: url('images/f11.jpg');
    }
    25%{
      background-image: url('images/f22.jpg');
    }
    26%{
      background-image: url('images/f33.jpg');
    }
    50%{
     background-image: url('images/f11.jpg');
    }
    51%{
      background-image: url('images/f22.jpg');
    }
    75%{
      background-image: url('images/f33.jpg');
    }
    76%{
  background-image: url('images/f11.jpg');
    }
    100%{
      background-image: url('images/f22.jpg');
    }

  }
</style>

@stop



@section('content')
<div class="card">
  <div class="card-body">
    <div class="row">
  <div class="col-md-12">
    <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-primary card-round">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center">
                        <i class="flaticon-users"></i>
                      </div>
                    </div>
                    <div class="col-7 col-stats">
                      <div class="numbers">
                        <p class="card-category">Visitors</p>
                        <h4 class="card-title">1,294</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-info card-round">
                <div class="card-body">
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center">
                        <i class="flaticon-interface-6"></i>
                      </div>
                    </div>
                    <div class="col-7 col-stats">
                      <div class="numbers">
                        <p class="card-category">Subscribers</p>
                        <h4 class="card-title">1303</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-success card-round">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center">
                        <i class="flaticon-graph"></i>
                      </div>
                    </div>
                    <div class="col-7 col-stats">
                      <div class="numbers">
                        <p class="card-category">Sales</p>
                        <h4 class="card-title">$ 1,345</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-secondary card-round">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center">
                        <i class="flaticon-success"></i>
                      </div>
                    </div>
                    <div class="col-7 col-stats">
                      <div class="numbers">
                        <p class="card-category">Order</p>
                        <h4 class="card-title">576</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <div class="card-head-row">
                    <div class="card-title">Visitas a la tarjeta de presentación  </div>
                    
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="statisticsChart"></canvas>
                  </div>
                  <div id="myChartLegend"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Users Percentage</h4>
                  <p class="card-category">
                  Users percentage this month</p>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="usersChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>
</div>
  </div>
</div>


@endsection

@section('jscustom')

<script type="text/javascript">
 var ctx = document.getElementById('statisticsChart').getContext('2d');


var statisticsChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [

      @foreach($consulta as $consult)
      '{{$consult->dia}}',
      @endforeach

      ],
   datasets: [{
          label: "Usuarios Activos",
          borderColor: "#1d7af3",
          pointBorderColor: "#FFF",
          pointBackgroundColor: "#1d7af3",
          pointBorderWidth: 2,
          pointHoverRadius: 4,
          pointHoverBorderWidth: 1,
          pointRadius: 4,
          backgroundColor: 'transparent',
          fill: true,
          borderWidth: 2,
      data: [
         @foreach($consulta as $consult)
      '{{$consult->cantidad}}',
      @endforeach
        ]
    }]
  },
  options : {
    responsive: true, 
    maintainAspectRatio: false,
    legend: {
      display: false
    },
    tooltips: {
      bodySpacing: 4,
      mode:"nearest",
      intersect: 0,
      position:"nearest",
      xPadding:10,
      yPadding:10,
      caretPadding:10
    },
    layout:{
      padding:{left:15,right:15,top:15,bottom:15}
    },
    scales: {
      yAxes: [{
        ticks: {
          fontColor: "rgba(0,0,0,0.5)",
          fontStyle: "500",
          beginAtZero: false,
          maxTicksLimit: 5,
          padding: 20
        },
        gridLines: {
          drawTicks: false,
          display: false
        }
      }],
      xAxes: [{
        gridLines: {
          zeroLineColor: "transparent"
        },
        ticks: {
          padding: 20,
          fontColor: "rgba(0,0,0,0.5)",
          fontStyle: "500"
        }
      }]
    }, 
    legendCallback: function(chart) { 
      var text = []; 
      text.push('<ul class="' + chart.id + '-legend html-legend">'); 
      for (var i = 0; i < chart.data.datasets.length; i++) { 
        text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>'); 
        if (chart.data.datasets[i].label) { 
          text.push(chart.data.datasets[i].label); 
        } 
        text.push('</li>'); 
      } 
      text.push('</ul>'); 
      return text.join(''); 
    }  
  }
});
var ctx2 = document.getElementById('usersChart').getContext('2d');

var usersChart = new Chart(ctx2, {
  type: 'pie',
  data: {
    datasets: [{
      data: [50, 35, 15],
      "backgroundColor":["rgb(23, 125, 255)","rgb(255, 100, 109)","rgb(253, 190, 70)"],
      borderWidth: 0
    }],
    labels: ['Active Users', 'Subscribers' , 'New Visitors'] 
  },
  options : {
    responsive: true, 
    maintainAspectRatio: false,
    legend: {
      position : 'bottom',
      labels : {
        fontColor: 'rgb(154, 154, 154)',
        fontSize: 11,
        usePointStyle : true,
        padding: 20
      }
    },
    pieceLabel: {
      render: 'percentage',
      fontColor: 'white',
      fontSize: 14,
    },
    tooltips: false,
    layout: {
      padding: {
        left: 20,
        right: 20,
        top: 20,
        bottom: 20
      }
    }
  }
});

</script>
@endsection