$(document).ready( function () {
  var etlantai1M = $('#etlantai1M').DataTable({
    ajax: {
    url: "api/tableMonth1",
    dataSrc: "energy",
}
});

$('a[data-toggle="list"]').on('shown.bs.tab', function(e) {
  if (e.target.hash == '#list-month') {
    $('#etlantai1M').css('width','100%');
    etlantai1M.columns.adjust().draw();
  }
})
});
