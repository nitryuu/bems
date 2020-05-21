var chart_daya_details;
/**
 * Request data from the server, add it to the graph and set a timeout to request again
 */
function requestDataDaya_details() {
  $.ajax({
    url: 'http://localhost/vuexy/public/api/random2',
    success: function(point) {
      var series_daya_details = chart_daya_details.series[0],
        shift_daya_details = series_daya_details.data.length > 20; // shift if the series is longer than 20

        chart_daya_details.series[0].addPoint(eval(point), true, shift_daya_details);

      setTimeout(requestDataDaya_details, 1000);
    },
  });
}

$(document).ready(function() {
  chart_daya_details = new Highcharts.Chart({
    time: {
      useUTC: false
    },
    chart: {
      zoomType: 'x',
      resetZoomButton: {
        position: {
          x: 0,
          y: -10
        }
      },
      renderTo: 'daya-details',
      defaultSeriesType: 'area',
      height: 75,
      events: {
        load: requestDataDaya_details
      }
    },
    navigation: {
      buttonOptions: {
        enabled: false
      }
    },
    credits:{
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
        area: {
            lineColor: 'red',
            fillColor: {
                linearGradient: {
                    x1: 1,
                    y1: 0,
                    x2: 1,
                    y2: 1
                },
                stops: [
                  [0, '#6f2121'],
                  [1, '#c84a4a'],
                ]
            },
            marker: {
                radius: 0,
            },
            lineWidth: 0,
            states: {
                hover: {
                    lineWidth: 1
                }
            },
            threshold: null
        },
    },
    title: {
      text: null
    },
    xAxis: {
      type: 'datetime',
      dateTimeLabelFormats: {
            day: '%e %b'
        },
        pointInterval: 150,
        minRange: 20 * 1000
    },
    yAxis: {
      min: 0,
      title: {
        offset: 50,
        text: 'kWh',
        margin: 80
      }
    },
    legend:{
      enabled: false,
    },
    series: [{
      name: 'Energy',
      pointStart: Date.now(),
      color: '#6f2121',
      data: []
    }]
  });
});
