$(document).ready(function(){

  $('#statdev1').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'success',
    offstyle: 'danger'
  });

  $('#statdev1').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_statdev1').val('on');
    }
    else
    {
      $('#hidden_statdev1').val('off');
    }
  });


  $('#statdev2').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'success',
    offstyle: 'danger'
  });

  $('#statdev2').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_statdev2').val('on');
    }
    else
    {
      $('#hidden_statdev2').val('off');
    }
  });

  $('#statdev3').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'success',
    offstyle: 'danger'
  });

  $('#statdev3').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_statdev3').val('on');
    }
    else
    {
      $('#hidden_statdev3').val('off');
    }
  });

  $('#statdev4').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'success',
    offstyle: 'danger'
  });

  $('#statdev4').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_statdev4').val('on');
    }
    else
    {
      $('#hidden_statdev4').val('off');
    }
  });

})
