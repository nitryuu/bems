$(document).ready( function () {
  var etlantai2Y = $('#etlantai2Y').DataTable({
    ajax: {
    url: "http://localhost/vuexy/public/api/year3",
    dataSrc: "x"
}});
$('a[data-toggle="list"]').on('shown.bs.tab', function(e) {
  if (e.target.hash == '#list-year') {
    $('#etlantai2Y').css('width','100%');
    etlantai2Y.columns.adjust().draw();
  }
})
});
