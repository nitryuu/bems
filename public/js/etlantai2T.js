$(document).ready( function () {
  var etlantai2T = $('#etlantai2T').DataTable({
    ajax: {
    url: "api/tableToday2",
    dataSrc: "energy"
}});
$('a[data-toggle="list"]').on('shown.bs.tab', function(e) {
  if (e.target.hash == '#list-today') {
    etlantai2T.columns.adjust().draw();
    $('#etlantai2T').css('width','100%');
  }
})
});
