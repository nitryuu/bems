var chart_daya;
/**
 * Request data from the server, add it to the graph and set a timeout to request again
 */
function requestDataDaya() {
  $.ajax({
    url: 'http://localhost/vuexy/public/api/random',
    success: function(point) {
      var series_daya = chart_daya.series[0],
        shift_daya = series_daya.data.length > 20; // shift if the series is longer than 20

      // add the point
      chart_daya.series[0].addPoint(eval(point), true, shift_daya);

      // call it again after one second
      setTimeout(requestDataDaya, 1000);
    },
    cache: false
  });
}

$(document).ready(function() {
  chart_daya = new Highcharts.Chart({
    chart: {
      renderTo: daya,
      defaultSeriesType: 'area',
      width: 1200,
      height: 300,
      events: {
        load: requestDataDaya
      }
    },
    credits:{
      enabled: false
    },
    lang: {
      contextButtonTitle: 'Export Menu',
    },
    legend:{
      itemStyle:{
        color: '#131f8b',
        fontweight: 'bold'
      }
    },
    plotOptions: {
        area: {
            lineColor: '#131f8b',
            fillColor: {
                linearGradient: {
                    x1: 1,
                    y1: 0,
                    x2: 1,
                    y2: 1
                },
                stops: [
                  [0, '#131f8b'],
                  [1, '#2a2f57'],
                ]
            },
            marker: {
                radius: 2,
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
      text: 'Power Usage'
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
        text: 'Watt',
        margin: 80
      }
    },
    exporting: {
        enabled: false,
      }
    ,
    navigation: {
      buttonOptions: {
        symbolX: 23,
        symbolY: 21,
        height: 40,
        width: 48,
        symbolSize: 12,
        symbolStrokeWidth: 2
      }
    },
    series: [{
      name: 'Power',
      color: '#131f8b',
      data: []
    }]
  });
});
