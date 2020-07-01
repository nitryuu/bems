var chart_tcost;
/**
 * Request data from the server, add it to the graph and set a timeout to request again
 */


function requestDataTcost() {
  $.ajax({
    url: 'api/totalCost',
    success: function(value) {
      //chart
      var point1 = chart_tcost.series[0].points[0],
      point2 = chart_tcost.series[0].points[1],

      thisMonth=value.month[0],
      prevMonth=value.month[1],

      newVal1 = value.cost[0],
      newVal2 = value.cost[1];

      chart_tcost.xAxis[0].setCategories([thisMonth,prevMonth]);
      point1.update(newVal1);
      point2.update(newVal2);

      //value
      var change = newVal2 - newVal1,
      formula = change/newVal1 * 100,
      tcost = formula.toFixed(2);

      if(change > 0) {
        $( "#guts" ).data( "tcost", { first : tcost , last : 'increase in cost' } );
        $( "#tcost-value" ).first().html("<span style='color: red'> <i class='fa fa-caret-up'></i> " + $( "#guts" ).data( "tcost" ).first + "% </span>" );
        $( "#tcost-text" ).last().html( $( "#guts" ).data( "tcost" ).last );
      }
      else
      {
        $( "#guts" ).data( "tcost", { first : tcost * -1 , last : 'decrease in cost' } );
        $( "#tcost-value" ).first().html("<span style='color: green'> <i class='fa fa-caret-down'></i> " + $( "#guts" ).data( "tcost" ).first + "% </span>" );
        $( "#tcost-text" ).last().html( $( "#guts" ).data( "tcost" ).last );
      }

      setTimeout(requestDataTcost, 1000);
    },
  });
}

$(document).ready(function() {
  chart_tcost = new Highcharts.Chart({
    chart: {
      renderTo: tcost,
      defaultSeriesType: 'column',
      height: 200,
      events: {
        load: requestDataTcost
      }
    },
    credits:{
      enabled: false
    },
    legend:{
      enabled: false
    },
    xAxis: {
      type: 'categories'
    },
    responsive: {
    rules: [{
      condition: {
        maxWidth: 500,
        minWidth: 100
      }
    }]
  },
    tooltip: {
      formatter: function() {
        return ''+
        this.series.name +': <b>Rp'+ Highcharts.numberFormat(this.y,2) +'</b>';
      },
      shadow: false,
      style: {
        color: '#4c4c4c',
        font: '12px Aial, sans-serif'
      },
      borderRadius: 3
    },
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
        column : {
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
    series: [{
      name: 'Cost',
      color: {
        linearGradient: {
          x1: 0,
          x2: 0,
          y1: 0,
          y2: 1
        },
      stops: [
        [0, 'green'],
        [1, '#668572']
      ]},
      data: [0,0],
    }]
  });
});
