var chart_lantai1;
var data1= [];
var cat1= [];

for(var k = 1 ; k <= Math.round(count/2); k++){
  data1.push(0);  
}

for (var l = 1; l <= Math.round(count/2); l++) {
  cat1.push(["Building "+l]);
}

function requestDatalantai1() {
  $.ajax({
    url: 'api/appliances1',
    success: function(value) {
      var div2 = Math.round(value.div/2),
      point = [],
      newVal = [];
      
      for (var i = 1; i <= value.div; i++) {
        for (var j = 0; j < div2; j++) {
        this["point"+i] = chart_lantai1.series[0].points[j];
        this["newVal"+i] = value.power[j];
        this["point"+i].update(this["newVal"+i]);
        }
      }
        setTimeout(requestDatalantai1, 1000);
    },
  });
}

$(document).ready(function() {
  chart_lantai1 = new Highcharts.Chart({
    chart: {
      renderTo: lantai1,
      defaultSeriesType: 'bar',
      height: 140,
      events: {
        load: requestDatalantai1
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
      categories: cat1
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
          x1: 0,
          x2: 0,
          y1: 0,
          y2: 1
        },
      stops: [
        [0, '#3583b8'],
        [1, 'blue']
      ]},
      data: data1,
    }]
  });
});
