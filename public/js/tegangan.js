var chart_tegangan;
/**
 * Request data from the server, add it to the graph and set a timeout to request again
 */
function requestDataTegangan() {
  $.ajax({
    url: 'http://localhost/vuexy/public/api/random',
    success: function(point) {
      var series_tegangan = chart_tegangan.series[0],
        shift_tegangan = series_tegangan.data.length > 20; // shift if the series is longer than 20

      // add the point
      chart_tegangan.series[0].addPoint(eval(point), true, shift_tegangan);

      // call it again after one second
      setTimeout(requestDataTegangan, 1000);
    },
    cache: false
  });
}

$(document).ready(function() {
  chart_tegangan = new Highcharts.Chart({
    chart: {
      renderTo: 'tegangan',
      defaultSeriesType: 'area',
      width: 354,
      height: 90,
      events: {
        load: requestDataTegangan
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
    plotOptions: {
        area: {
            lineColor: '#15300f',
            fillColor: {
                linearGradient: {
                    x1: 1,
                    y1: 0,
                    x2: 1,
                    y2: 1
                },
                stops: [
                  [0, '#15300f'],
                  [1, '#0c331b'],
                ]
            },
            marker: {
                radius: 1,
            },
            lineWidth: 1,
            states: {
                hover: {
                    lineWidth: 1
                }
            },
            threshold: null
        },
    },
    title: {
      text: 'Voltage'
    },
    xAxis: {
      type: 'datetime',
      tickPixelInterval: 150,
      maxZoom: 20 * 1000
    },
    yAxis: {
      minPadding: 0.2,
      maxPadding: 0.2,
      title: {
        offset: 50,
        text: 'Volt',
        margin: 80
      }
    },
    legend:{
      enabled: false,
    },
    series: [{
      name: 'Voltage',
      color: '#15300f',
      data: []
    }]
  });
});
