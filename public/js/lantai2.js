var chart_lantai2;
/**
 * Request data from the server, add it to the graph and set a timeout to request again
 */


function requestDatalantai2() {
  $.ajax({
    url: 'http://localhost/vuexy/public/api/random',
    success: function(value) {
      var point1 = chart_lantai2.series[0].points[0],
      point2 = chart_lantai2.series[0].points[1],
      point3 = chart_lantai2.series[0].points[2],
      point4 = chart_lantai2.series[0].points[3],
      point5 = chart_lantai2.series[0].points[4],

      newVal1 = value.y[0],
      newVal2 = value.y[1],
      newVal3 = value.y[2];
      newVal4 = value.y[3];
      newVal5 = value.y[4];

      point1.update(newVal1);
      point2.update(newVal2);
      point3.update(newVal3);
      point4.update(newVal4);
      point5.update(newVal5);

      setTimeout(requestDatalantai2, 1000);
    },
  });
}

$(document).ready(function() {
  chart_lantai2 = new Highcharts.Chart({
    chart: {
      renderTo: lantai2,
      defaultSeriesType: 'bar',
      width: 185,
      height: 150,
      events: {
        load: requestDatalantai2
      }
    },
    credits:{
      enabled: false
    },
    legend:{
      enabled: false
    },
    xAxis: {
      categories: ['Ruang 1','Ruang 2','Ruang 3','Ruang 4','Ruang 5'],
      opposite: true
    },
    tooltip: {
      formatter: function() {
        return ''+
        this.series.name +': '+ this.y +' kWh';
      },
      shadow: false,
      style: {
        color: '#4c4c4c',
        font: '12px Aial, sans-serif'
      },
      borderRadius: 3
    },
    yAxis: {
      reversed: true,
      gridLineColor: '#fff',
      labels: {
            enabled: false
        },
        title: {
        text: null
      },
      min: 0,
      max: 100,
      tickAmount: 2,
    },
    exporting: {
        enabled: false,
      },
      plotOptions: {
        bar: {
          dataLabels: {
            enabled: true
          },
          borderColor: '#fff',
          borderWidth: 0,
          shadow: false,
          groupPadding: 0.15,
          pointPadding: 0
        }
      },
    series: [{
      name: 'Power',
      color: {
        linearGradient: {
          x1: 0,
          x2: 0,
          y1: 0,
          y2: 1
        },
      stops: [
        [0, 'blue'],
        [1, '#3583b8']
      ]},
      data: [0,0,0,0,0],
    }]
  });
});