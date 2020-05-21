$(document).ready( function () {
  var etlantai2T = $('#etlantai2T').DataTable({
    ajax: {
    url: "http://localhost/vuexy/public/api/today3",
    dataSrc: "x"
}});
$('a[data-toggle="list"]').on('shown.bs.tab', function(e) {
  if (e.target.hash == '#list-today') {
    etlantai2T.columns.adjust().draw();
    $('#etlantai2T').css('width','100%');
  }
})
});
