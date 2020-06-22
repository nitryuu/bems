
    var defined = Highcharts.defined,
      each = Highcharts.each,
      pick = Highcharts.pick,
      win = Highcharts.win,
      doc = win.document,
      seriesTypes = Highcharts.seriesTypes,
      downloadAttrSupported = doc.createElement('a').download !== undefined;

    Highcharts.Chart.prototype.getDataRows = function(multiLevelHeaders) {
      var time = this.time,
        csvOptions = (this.options.exporting && this.options.exporting.csv) || {},
        xAxis,
        xAxes = this.xAxis,
        rows = {},
        rowArr = [],
        dataRows,
        topLevelColumnTitles = [],
        columnTitles = [],
        columnTitleObj,
        i,
        x,
        xTitle,
        // Options
        columnHeaderFormatter = function(item, key, keyLength) {
          if (csvOptions.columnHeaderFormatter) {
            var s = csvOptions.columnHeaderFormatter(item, key, keyLength);
            if (s !== false) {
              return s;
            }
          }

          if (!item) {
            return 'Category';
          }

          if (item instanceof Highcharts.Axis) {
            return (item.options.title && item.options.title.text) ||
              (item.isDatetimeAxis ? 'DateTime' : 'Category');
          }

          if (multiLevelHeaders) {
            return {
              columnTitle: keyLength > 1 ? key : item.name,
              topLevelColumnTitle: item.name
            };
          }

          return item.name + (keyLength > 1 ? ' (' + key + ')' : '');
        },
        xAxisIndices = [];

      // Loop the series and index values
      i = 0;

      this.setUpKeyToAxis();

      each(this.series, function(series) {
        var keys = series.options.keys,
          pointArrayMap = keys || series.pointArrayMap || ['y'],
          valueCount = pointArrayMap.length,
          xTaken = !series.requireSorting && {},
          categoryMap = {},
          datetimeValueAxisMap = {},
          xAxisIndex = Highcharts.inArray(series.xAxis, xAxes),
          mockSeries,
          j;

        // Map the categories for value axes
        each(pointArrayMap, function(prop) {
          var axisName = (
            (series.keyToAxis && series.keyToAxis[prop]) ||
            prop
          ) + 'Axis';

          categoryMap[prop] = (
            series[axisName] &&
            series[axisName].categories
          ) || [];
          datetimeValueAxisMap[prop] = (
            series[axisName] &&
            series[axisName].isDatetimeAxis
          );
        });

        if (
          series.options.includeInCSVExport !== false &&
          !series.options.isInternal &&
          series.visible !== false // #55
        ) {

          // Build a lookup for X axis index and the position of the first
          // series that belongs to that X axis. Includes -1 for non-axis
          // series types like pies.
          if (!Highcharts.find(xAxisIndices, function(index) {
              return index[0] === xAxisIndex;
            })) {
            xAxisIndices.push([xAxisIndex, i]);
          }

          // Compute the column headers and top level headers, usually the
          // same as series names
          j = 0;
          while (j < valueCount) {
            columnTitleObj = columnHeaderFormatter(
              series,
              pointArrayMap[j],
              pointArrayMap.length
            );
            columnTitles.push(
              columnTitleObj.columnTitle || columnTitleObj
            );
            if (multiLevelHeaders) {
              topLevelColumnTitles.push(
                columnTitleObj.topLevelColumnTitle || columnTitleObj
              );
            }
            j++;
          }

          mockSeries = {
            chart: series.chart,
            autoIncrement: series.autoIncrement,
            options: series.options,
            pointArrayMap: series.pointArrayMap
          };

          // Export directly from options.data because we need the uncropped
          // data (#7913), and we need to support Boost (#7026).

          each(series.options.data, function eachData(options, pIdx) {
            var key,
              prop,
              val,
              name,
              point;

            point = {
              series: mockSeries
            };

            series.pointClass.prototype.applyOptions.apply(
              point,
              [options]
            );

            if (point.x >= series.xAxis.min && point.x <= series.xAxis.max) {
              key = point.x;
              name = series.data[pIdx] && series.data[pIdx].name;

              if (xTaken) {
                if (xTaken[key]) {
                  key += '|' + pIdx;
                }
                xTaken[key] = true;
              }

              j = 0;

              // Pies, funnels, geo maps etc. use point name in X row
              if (!series.xAxis || series.exportKey === 'name') {
                key = name;
              }

              //console.log(point)
              if (!rows[key]) {
                // Generate the row
                rows[key] = [];
                // Contain the X values from one or more X axes
                rows[key].xValues = [];
              }
              rows[key].x = point.x;
              rows[key].name = name;
              rows[key].xValues[xAxisIndex] = point.x;

              while (j < valueCount) {
                prop = pointArrayMap[j]; // y, z etc
                val = point[prop];
                rows[key][i + j] = pick(
                  categoryMap[prop][val], // Y axis category if present
                  datetimeValueAxisMap[prop] ?
                  time.dateFormat(csvOptions.dateFormat, val) :
                  null,
                  val
                );
                j++;
              }
            }

          });
          i = i + j;
        }
      });

      // Make a sortable array
      for (x in rows) {
        if (rows.hasOwnProperty(x)) {
          rowArr.push(rows[x]);
        }
      }

      var xAxisIndex, column;

      // Add computed column headers and top level headers to final row set
      dataRows = multiLevelHeaders ? [topLevelColumnTitles, columnTitles] : [columnTitles];

      i = xAxisIndices.length;
      while (i--) { // Start from end to splice in
        xAxisIndex = xAxisIndices[i][0];
        column = xAxisIndices[i][1];
        xAxis = xAxes[xAxisIndex];

        // Sort it by X values
        rowArr.sort(function(a, b) { // eslint-disable-line no-loop-func
          return a.xValues[xAxisIndex] - b.xValues[xAxisIndex];
        });

        // Add header row
        xTitle = columnHeaderFormatter(xAxis);
        dataRows[0].splice(column, 0, xTitle);
        if (multiLevelHeaders && dataRows[1]) {
          // If using multi level headers, we just added top level header.
          // Also add for sub level
          dataRows[1].splice(column, 0, xTitle);
        }

        // Add the category column
        each(rowArr, function(row) { // eslint-disable-line no-loop-func
          var category = row.name;
          if (xAxis && !defined(category)) {
            if (xAxis.dateTime) {
              if (row.x instanceof Date) {
                row.x = row.x.getTime();
              }
              category = time.dateFormat(
                csvOptions.dateFormat,
                row.x
              );
            } else if (xAxis.categories) {
              category = pick(
                xAxis.names[row.x],
                xAxis.categories[row.x],
                row.x
              );
            }
          }

          // Add the X/date/category
          row.splice(column, 0, category);
        });
      }
      dataRows = dataRows.concat(rowArr);

      Highcharts.fireEvent(this, 'exportData', {
        dataRows: dataRows
      });

      return dataRows;
    };


  $.getJSON('http://localhost/vuexy/public/api/statistic', function (data) {

Highcharts.stockChart('energy_stat', {
      chart: {
        height: 480,
      },
      title: {
        text: 'Energy Usages'
      },
      responsive: {
      rules: [{
        condition: {
          maxWidth: 100,
          minWidth: 100
        }
      }]
    },
    navigation: {
    buttonOptions: {
        x: 5,
        y: 0,
        theme: {
            style: {
                fontSize: 10,
                color: '#039'
                }
            }
        }
    },
    exporting: {
        filename: 'Energy Usages Statistic',
        buttons: {
            contextButton: {
              enabled: false
            },
            exportButton: {
                text: 'Download',
                menuItems: ['downloadCSV','downloadXLS']
            },
        },
        csv: {
          dateFormat: '%Y-%m-%d'
        }
      },
        rangeSelector: {
            selected: 0,
            inputPosition: {
              align: 'left',
              x: -40
            },
            buttonPosition: {
              align: 'right',
              x: -30
            },
        },
        yAxis: {
          opposite: false,
          gridLineColor: '#fff',
          endOfTick: false,
          minPadding: 0.2,
          maxPadding: 0.2,
          title: {
            text: null,
          },
          min: 0,
          labels: {
            style: {
              color: 'black',
              fontSize: 10
            }
          }
        },
        credits:{
          enabled: false
        },
        navigator: {
          series: {
            type: 'line',
            includeInCSVExport: false
          },
            xAxis: {
                gridLineColor: 'white'
            },
        },
        plotOptions: {
          area: {
            dataLabels:{
              enabled: false
            },
              lineColor: 'blue',
              fillColor: {
                  linearGradient: {
                      x1: 1,
                      y1: 0,
                      x2: 1,
                      y2: 1
                  },
                  stops: [
                    [0, '#5f23de'],
                    [1, '#3c1c77'],
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
            title: {
              text: 'Date'
            },
            type: 'datetime',
            gridLineColor: '#fff',
            dateTimeLabelFormats: {
              day: '%b %e'
            }
        },
        series: [{
            name: 'Energy',
            color: '#5f23de',
            type: 'area',
            data: data,
            tooltip: {
                valueDecimals: 0
            }
        }],
        tooltip: {
          formatter: function() {
            return ''+
            '<b>Energy: '+ this.y +'kWh</b><br />'+ '<strong>' +
            Highcharts.dateFormat('%b %e, %Y %H:%S ' ,
                                                new Date(this.x)) + '</strong>';
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
