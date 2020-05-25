$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=aapl-c.json&callback=?', function (data) {
    // Create the chart
    Highcharts.stockChart('ccost', {
      chart: {
        height: 400
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
        enabled: true,
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
          }
        },
        credits:{
          enabled: false
        },
        title: {
            text: null
        },
        navigator: {
            xAxis: {
                gridLineColor: 'white'
            },
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
            data: data,
            tooltip: {
                valueDecimals: 0
            }
        }],
        tooltip: {
          formatter: function() {
            return ''+
            'Cost' +': <b>'+ this.y +'k </b>';
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
