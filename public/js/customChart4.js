var chart4; // global
   /**
     * Request data from the server, add it to the graph and set a timeout to request again
     */
    function requestData4() {
        $.ajax({
            url: 'api/custom4', 
            success: function(point) {
                var series = chart4.series[0],
                    shift = series.data.length > 20; // shift if the series is longer than 20
                // add the point
                chart4.series[0].addPoint(eval(point['data']), true, shift);

                // call it again after one second
                setTimeout(requestData4, 1000);  
            }
        });
    }

    $(document).ready(function() {
        chart4 = new Highcharts.Chart({
             time: {
              useUTC: false
            },
            chart: {
                renderTo: 'customChart4',
                defaultSeriesType: 'area',
                height: 380,
                events: {
                    load: requestData4
                }
            },
 
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 150,
                maxZoom: 20 * 1000,
            },
            yAxis: {
              gridLineColor: '#fff',
              min: 0,
              title: {
                offset: 50,
                margin: 80
              }
            },
             navigation: {
              buttonOptions: {
                enabled: false
              }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Realtime Data',
                pointStart: Date.now(),
                data: []
            }]
        });     
    });