var chart_daya;
/**
 * Request data from the server, add it to the graph and set a timeout to request again
 */
function requestDataDaya() {
  $.ajax({
    url: 'api/valueToday',
    success: function(points) {
      var point = chart_daya.series[0].points[0],
      newVal = points[0].p;
      point.update(newVal);
      setTimeout(requestDataDaya, 1000);
    },
  });
}


$(document).ready(function() {
  chart_daya = new Highcharts.Chart({
    chart: {
      renderTo: 'daya',
      height: 145,
      events: {
        load: requestDataDaya
      }
    },
    navigation: {
      buttonOptions: {
        enabled: false
      }
    },
    yAxis: {
      stops: [
        [0.1, '#55BF3B'],
        [0.5, '#DDDF0D'],
        [0.9, '#DF5353']
      ],
      lineWidth: 0,
      tickWidth: 0,
      minorTickInterval: null,
      tickAmount: 2,
      title: {
        y: -70
      },
      labels: {
        y: 16
      }
    },
    responsive: {
        rules: [{
          condition: {
            maxWidth: 1000
          }
        }]
      },
    plotOptions: {
      solidgauge: {
        dataLabels: {
          y: 5,
          borderWidth: 0,
          useHTML: true
        }
      }
    },
    pane: {
    center: ['50%', '85%'],
    size: '130%',
    startAngle: -90,
    endAngle: 90,
    background: {
      backgroundColor:
        Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
      innerRadius: '60%',
      outerRadius: '100%',
      shape: 'arc'
    }
    },
    tooltip: {
      enabled: false
    },
    credits: {
    enabled: false
    },
    series: [{
        type: 'solidgauge',
        name: 'Total Energy Usages',
        data: [0],
        dataLabels: {
          format:
            '<div style="text-align:center">' +
            '<span style="font-size:15px">{y:.3f}</span><br/>' +
            '<span style="font-size:12px;opacity:0.4">KWH</span>' +
            '</div>'
        },
        tooltip: {
          valueSuffix: ' KWH'
        }
      }]
  });
});
