  $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=aapl-c.json&callback=?', function (data) {
    // Create the chart
Highcharts.stockChart('ccost', {
      chart: {
        height: 400,
      },
      responsive: {
      rules: [{
        condition: {
          maxWidth: 100,
          minWidth: 100
        }
      }]
    },
    exporting: {
        enabled: false,
      },
        rangeSelector: {
            selected: 0,
            inputPosition: {
              align: 'left',
              x: -10,
            },
            buttonPosition: {
              align: 'right'
            },
        },
        yAxis: {
          gridLineColor: '#fff',
          endOfTick: false,
          minPadding: 0.2,
          maxPadding: 0.2,
          title: {
            text: null,
          },
          labels: {
            style: {
              color: 'black',
              fontSize: 15
            }
          }
        },
        credits:{
          enabled: false
        },
        title: {
            text: null
        },
        navigator: {
          series: {
            type: 'line'
          },
            xAxis: {
                gridLineColor: 'white'
            },
        },
        plotOptions: {
          area: {
            dataLabels:{
              enabled: true
            },
              lineColor: '#116f9e',
              fillColor: {
                  linearGradient: {
                      x1: 1,
                      y1: 0,
                      x2: 1,
                      y2: 1
                  },
                  stops: [
                    [0, '#116f9e'],
                    [1, '#2a179f'],
                  ]
              },
              marker: {
                  radius: 5,
              },
              lineWidth: 0,
              states: {
                  hover: {
                      lineWidth: 1
                  }
              },
              threshold: null
          },
          series: {
            dataLabels:{
              borderRadius: 5,
              backgroundColor: 'rgba(252, 255, 197, 0.7)',
              borderWidth: 1,
              borderColor: 'blue',
              y: -15
            },
            marker: {
              fillColor: '#fff',
              lineWidth: 2,
              radius: 5,
              lineColor: null
            }
          }
        },
        xAxis: {
            type: 'datetime',
            gridLineColor: '#fff',
            dateTimeLabelFormats: {
              day: '%b %e'
            }
        },
        series: [{
            name: 'Cost',
            color: '#116f9e',
            type: 'area',
            data: data,
            tooltip: {
                valueDecimals: 0
            }
        }],
        tooltip: {
          formatter: function() {
            return ''+
            'Cost: <b>'+ this.y +'k </b>';
          },
        },
    } ,
        function(chart){
              setTimeout(function () {
              $('input.highcharts-range-selector',
              $(chart.container).parent())
              .datepicker({
                changeMonth: true,
                changeYear: true
              });
            }, 0);
            });
});

$.datepicker.setDefaults({
    dateFormat: 'yy-mm-dd',
    onSelect: function () {
        this.onchange();
        this.onblur();
    }
});
