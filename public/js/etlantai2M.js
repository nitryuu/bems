$(document).ready( function () {
  var etlantai2M = $('#etlantai2M').DataTable({
    ajax: {
    url: "http://localhost/vuexy/public/api/month3",
    dataSrc: "x"
}});
$('a[data-toggle="list"]').on('shown.bs.tab', function(e) {
  if (e.target.hash == '#list-month') {
    $('#etlantai2M').css('width','100%');
    etlantai2M.columns.adjust().draw();

  }
})
});
