var chart_arus;
/**
 * Request data from the server, add it to the graph and set a timeout to request again
 */
function requestDataArus() {
  $.ajax({
    url: 'http://localhost/vuexy/public/api/random',
    success: function(point) {
      var series_arus = chart_arus.series[0],
        shift_arus = series_arus.data.length > 20; // shift if the series is longer than 20

      // add the point
      chart_arus.series[0].addPoint(eval(point), true, shift_arus);

      // call it again after one second
      setTimeout(requestDataArus, 1000);
    },
    cache: false
  });
}

$(document).ready(function() {
  chart_arus = new Highcharts.Chart({
    chart: {
      renderTo: 'arus',
      defaultSeriesType: 'area',
      width: 354,
      height: 90,
      events: {
        load: requestDataArus
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
      text: 'Current'
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
        text: 'Ampere',
        margin: 80
      }
    },
    legend:{
      enabled: false,
    },
    series: [{
      name: 'Current',
      color: '#6f2121',
      data: []
    }]
  });
});
