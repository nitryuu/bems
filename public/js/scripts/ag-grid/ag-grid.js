$(document).ready(function(){
  var columnDefs = [
                       {headerName: "Make", field: "make", rowGroupIndex: 0 , width: 500},
                       {headerName: "Price", field: "price", width: 500}
                   ];

                   var autoGroupColumnDef = {
                       headerName: "Model",
                       width: 500,
                       field: "model",
                       cellRenderer:'agGroupCellRenderer',
                       cellRendererParams: {
                           checkbox: true
                       }
                   }

                   // let the grid know which columns and what data to use
                   var gridOptions = {
                       columnDefs: columnDefs,
                       enableSorting: true,
                       pagination: true,
                       autoGroupColumnDef: autoGroupColumnDef,
                       groupSelectsChildren: true,
                       rowSelection: 'multiple'
                   };

                   // lookup the container we want the Grid to use
                   var eGridDiv = document.querySelector('#table');

                   // create the grid passing in the div to use together with the columns & data we want to use
                   new agGrid.Grid(eGridDiv, gridOptions);

                   getData();

                   function getData(){
                     fetch('https://api.myjson.com/bins/ly7d1').then(function(response) {
                         return response.json();
                     }).then(function(data) {
                         gridOptions.api.setRowData(data);
                         getRows();
                     })
                   };

                   function getRows() {
                       const selectedNodes = gridOptions.api.getSelectedNodes()
                       const selectedData = selectedNodes.map( function(node) { return node.data })
                       const selectedDataStringPresentation = selectedData.map( function(node) { return node.make + ' ' + node.model }).join(', ');
                   }});
