$(document).ready(function() {
  var request = function() {
    $.ajax({
      url: 'http://localhost/vuexy/public/api/random',
      success: function(data) {
        var $data = data.y;
        var $cost = $data / 1000 * 1352;
        var n = $cost.toFixed(2);
        $( "#guts" ).data( "power", { first : $data, last : n } );
        $( "#power-ac4" ).first().text( $( "#guts" ).data( "power" ).first );
        $( "#cost-ac4" ).last().text( $( "#guts" ).data( "power" ).last );
      },
      error: function() {
        console.log(data);
      }
    });
  };
  setInterval(request, 1000);
});
