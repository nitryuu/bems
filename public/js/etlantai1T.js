$(document).ready( function () {
  var etlantai1T = $('#etlantai1T').DataTable({
    ajax: {
    url: "api/tableToday1",
    dataSrc: "energy"
}});
$('a[data-toggle="list"]').on('shown.bs.tab', function(e) {
  if (e.target.hash == '#list-today') {
    etlantai1T.columns.adjust().draw();
    $('#etlantai1T').css('width','100%');
  }
})
});
