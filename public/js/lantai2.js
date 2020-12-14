var chart_lantai2;
var data2=[];
var cat2=[];
var div = count - Math.floor(count/2);

for(var k = 1 ; k <= count/2 ; k++){
  data2.push(0);
}

for (var l = div + 1; l <= count ; l++) {
  cat2.push(["Building "+l]);
}

function requestDatalantai2() {
  $.ajax({
    url: 'api/appliances2',
    success: function(value) {
      var div2 = Math.round(value.div/2);
      var point = [],
      newVal = [];

      for (var i = 1; i <= value.div; i++) {
        for (var j = 0; j < div2; j++) {
        point[i] = chart_lantai2.series[0].points[j];
        newVal[i] = value.power[j];
        point[i].update(newVal[i]);
        }
      }
        setTimeout(requestDatalantai2, 1000);
    },
  });
}

$(document).ready(function() {
  chart_lantai2 = new Highcharts.Chart({
    chart: {
      renderTo: lantai2,
      defaultSeriesType: 'bar',
      height: 140,
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
      labels: {
        style:{
          fontSize: 9.5
        },
      },
      categories: cat2,
      opposite: true
    },
    tooltip: {
      formatter: function() {
        return ''+
        this.series.name +': <b>'+ this.y +' kWh </b>';
      },
      shadow: false,
      style: {
        color: '#4c4c4c',
        font: '12px Aial, sans-serif'
      },
      borderRadius: 3
    },
    responsive: [{
      rules: {
        maxWidth: 500
      }
    }],
    yAxis: {
      reversed: true,
      gridLineColor: '#fff',
      labels: {
            enabled: false
        },
        title: {
        text: null
      },
      tickAmount: 2,
    },
    exporting: {
        enabled: false,
      },
      plotOptions: {
        bar: {
          dataLabels: {
            enabled: true,
            color: '#000'
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
          x1: 1,
          x2: 0,
          y1: 0,
          y2: 0
        },
      stops: [
        [0, 'blue'],
        [1, '#3583b8']
      ]},
      data: data2,
    }]
  });
});
