var chart2; // global
   /**
     * Request data from the server, add it to the graph and set a timeout to request again
     */
    function requestData2() {
        $.ajax({
            url: 'api/custom2', 
            success: function(point) {
                var series = chart2.series[0],
                    shift = series.data.length > 20; // shift if the series is longer than 20
                // add the point
                chart2.series[0].addPoint(eval(point['data']), true, shift);

                // call it again after one second
                setTimeout(requestData2, 1000);  
            }
        });
    }

    $(document).ready(function() {
        chart2 = new Highcharts.Chart({
             time: {
              useUTC: false
            },
            chart: {
                renderTo: 'customChart2',
                defaultSeriesType: 'area',
                height: 380,
                events: {
                    load: requestData2
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