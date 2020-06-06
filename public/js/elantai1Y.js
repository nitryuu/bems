var chart_elantai1Y;

$(document).ready(function() {
  $.ajax({
    url: 'http://localhost/vuexy/public/api/year',
    success: function(value) {

        chart_elantai1Y = new Highcharts.Chart({
          chart: {
            renderTo: elantai1Y,
            defaultSeriesType: 'column',
            height: 200,
          },
          credits:{
            enabled: false
          },
          xAxis:{
            type: 'datetime',
            dateTimeLabelFormats: {
              month: '%B'
            }
          },
          yAxis: {
            gridLineColor: '#fff',
            endOfTick: false,
            minPadding: 0.2,
            maxPadding: 0.2,
            min: 0,
            max: 150,
            title: {
              text: null,
            }
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
          plotOptions: {
            column: {
              dataLabels: {
                enabled: true
              }
            }
          },
          legend:{
            enabled: false
          },
          responsive: {
          rules: [{
            condition: {
              maxWidth: 500,
              minWidth: 100
            }
          }]
        },
          exporting: {
              enabled: false,
            },
            series: [{
              name: 'Energy',
              data : value.x,
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
            }]
        });
    },
    cache: false
  });
});
