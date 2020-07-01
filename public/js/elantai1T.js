var chart_elantai1T;

Highcharts.setOptions({
    global: {
        timezoneOffset: (-7) * 60
    }
});

$(document).ready(function() {
  $.ajax({
    url: 'api/usageToday1',
    success: function(value) {
        chart_elantai1T = new Highcharts.Chart({
          chart: {
            renderTo: elantai1T,
            defaultSeriesType: 'column',
            height: 200,
          },
          credits:{
            enabled: false
          },
          xAxis:{
            type: 'datetime',
            dateTimeLabelFormats: {
              day: '%H:%H'
            }
          },
          yAxis: {
            gridLineColor: '#fff',
            endOfTick: false,
            minPadding: 0.2,
            maxPadding: 0.2,
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
        plotOptions: {
          column: {
            dataLabels: {
              enabled: true,
              formatter: function () {
                  return Highcharts.numberFormat(this.y,2);
              }
            },
            borderColor: '#fff',
            borderWidth: 0,
            shadow: false,
            groupPadding: 0.15,
            pointPadding: 0
          }
        },
          exporting: {
              enabled: false,
            },
            series: [{
              name: 'Energy',
              data : value.power,
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
