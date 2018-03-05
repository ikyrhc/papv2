@extends('layout')

@section('title',"Mensajeria")

@section('content')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['gauge']});
    google.charts.setOnLoadCallback(drawGauge);

    var gaugeOptions = {min: 0, max: 280, yellowFrom: 200, yellowTo: 250,
      redFrom: 250, redTo: 280, minorTicks: 5};
    var gauge;

    function drawGauge() {
      gaugeData = new google.visualization.DataTable();
      gaugeData.addColumn('number', 'Guias');
      gaugeData.addColumn('number', 'Guias Cerradas');
      gaugeData.addRows(2);
      gaugeData.setCell(0, 0, 120);
      gaugeData.setCell(0, 1, 80);

      gauge = new google.visualization.Gauge(document.getElementById('gauge_div'));
      gauge.draw(gaugeData, gaugeOptions);
    }

    function changeTemp(dir) {
      gaugeData.setValue(0, 0, gaugeData.getValue(0, 0) + dir * 25);
      gaugeData.setValue(0, 1, gaugeData.getValue(0, 1) + dir * 20);
      gauge.draw(gaugeData, gaugeOptions);
    }
  </script>
  
   <div id="gauge_div" style="width:280px; height: 140px; float: left;"></div>

  <script type="text/javascript">
function drawSort() {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Mensajero');
  data.addColumn('number', 'Entregas');
  data.addColumn('boolean', 'Full Time');
  data.addRows(5);
  data.setCell(0, 0, 'Men1');
  data.setCell(0, 1, 100);
  data.setCell(0, 2, true);
  data.setCell(1, 0, 'Men2');
  data.setCell(1, 1, 250);
  data.setCell(1, 2, true);
  data.setCell(2, 0, 'Men3');
  data.setCell(2, 1, 800);
  data.setCell(2, 2, false);
  data.setCell(3, 0, 'Men4');
  data.setCell(3, 1, 200);
  data.setCell(3, 2, true);
  data.setCell(4, 0, 'Men5');
  data.setCell(4, 1, 120);
  data.setCell(4, 2, false);

  var formatter = new google.visualization.NumberFormat({prefix: '$'});
  formatter.format(data, 1); // Apply formatter to second column

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1]);

  var table = new google.visualization.Table(document.getElementById('table_sort_div'));
  table.draw(view, {width: '100%', height: '100%'});

  var chart = new google.visualization.BarChart(document.getElementById('chart_sort_div'));
  chart.draw(view);

  google.visualization.events.addListener(table, 'sort',
      function(event) {
        data.sort([{column: event.column, desc: !event.ascending}]);
        chart.draw(view);
      });
}  
 </script>
 
 <script src="js/Chart.js"></script>
<canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
@endsection