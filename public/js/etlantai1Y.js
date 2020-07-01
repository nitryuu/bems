$(document).ready( function () {
  var etlantai1Y = $('#etlantai1Y').DataTable({
    ajax: {
    url: "api/tableYear1",
    dataSrc: "energy"
}});
$('a[data-toggle="list"]').on('shown.bs.tab', function(e) {
  if (e.target.hash == '#list-year') {
    $('#etlantai1Y').css('width','100%');
    etlantai1Y.columns.adjust().draw();
  }
})
});
