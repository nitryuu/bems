$(document).ready( function () {
  var etlantai1T = $('#etlantai1T').DataTable({
    ajax: {
    url: "http://localhost/vuexy/public/api/today2",
    dataSrc: "x"
}});
$('a[data-toggle="list"]').on('shown.bs.tab', function(e) {
  if (e.target.hash == '#list-today') {
    etlantai1T.columns.adjust().draw();
    $('#etlantai1T').css('width','100%');
  }
})
});
