var id,value;
var stat1,stat2,stat3,stat4,stat5,stat6,
    stat7,stat8,stat9,stat10,stat11,stat12;
var feature;

$(document).ready(function(){
  $('#mlantai1').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'success',
    offstyle: 'danger'
  });

  $('#mlantai1').change(function(){
    if($(this).prop('checked'))
    {
      idm = '1';
      checkFeature();
      $('#l1r1').bootstrapToggle('enable');
      $('#l1r2').bootstrapToggle('enable');
      $('#l1r3').bootstrapToggle('enable');
      $('#l1r4').bootstrapToggle('enable');
      $('#l1r5').bootstrapToggle('enable');
      $('#l1r6').bootstrapToggle('enable');
      if(feature == 'on'){
        getPreviousValue();
      }else{
        $('#l1r1').bootstrapToggle('on');
        $('#l1r2').bootstrapToggle('on');
        $('#l1r3').bootstrapToggle('on');
        $('#l1r4').bootstrapToggle('on');
        $('#l1r5').bootstrapToggle('on');
        $('#l1r6').bootstrapToggle('on');
      }
      $('#hidden_mlantai1').val('on');
      valuem = $('#hidden_mlantai1').val();
      postMasterValue(idm,valuem);
    }
    else
    {
      $('#l1r1').bootstrapToggle('off');
      $('#l1r2').bootstrapToggle('off');
      $('#l1r3').bootstrapToggle('off');
      $('#l1r4').bootstrapToggle('off');
      $('#l1r5').bootstrapToggle('off');
      $('#l1r6').bootstrapToggle('off');
      $('#l1r1').bootstrapToggle('disable');
      $('#l1r2').bootstrapToggle('disable');
      $('#l1r3').bootstrapToggle('disable');
      $('#l1r4').bootstrapToggle('disable');
      $('#l1r5').bootstrapToggle('disable');
      $('#l1r6').bootstrapToggle('disable');
      $('#hidden_mlantai1').val('off');
      idm = '1';
      valuem = $('#hidden_mlantai1').val();
      postMasterValue(idm,valuem);
    }
  });

  $('#mlantai2').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'info',
    offstyle: 'warning'
  });

  $('#mlantai2').change(function(){
    if($(this).prop('checked'))
    {
      idm = '2';
      checkFeature();
      $('#l2r1').bootstrapToggle('enable');
      $('#l2r2').bootstrapToggle('enable');
      $('#l2r3').bootstrapToggle('enable');
      $('#l2r4').bootstrapToggle('enable');
      $('#l2r5').bootstrapToggle('enable');
      $('#l2r6').bootstrapToggle('enable');
      if(feature == 'on'){
        getPreviousValue()
      }else{
        $('#l2r1').bootstrapToggle('on');
        $('#l2r2').bootstrapToggle('on');
        $('#l2r3').bootstrapToggle('on');
        $('#l2r4').bootstrapToggle('on');
        $('#l2r5').bootstrapToggle('on');
        $('#l2r6').bootstrapToggle('on');
      }
      $('#hidden_mlantai2').val('on');
      valuem = $('#hidden_mlantai2').val();
      postMasterValue(idm,valuem);
    }
    else
    {
      $('#l2r1').bootstrapToggle('off');
      $('#l2r2').bootstrapToggle('off');
      $('#l2r3').bootstrapToggle('off');
      $('#l2r4').bootstrapToggle('off');
      $('#l2r5').bootstrapToggle('off');
      $('#l2r6').bootstrapToggle('off');
      $('#l2r1').bootstrapToggle('disable');
      $('#l2r2').bootstrapToggle('disable');
      $('#l2r3').bootstrapToggle('disable');
      $('#l2r4').bootstrapToggle('disable');
      $('#l2r5').bootstrapToggle('disable');
      $('#l2r6').bootstrapToggle('disable');
      $('#hidden_mlantai2').val('off');
      idm = '2';
      valuem = $('#hidden_mlantai2').val();
      postMasterValue(idm,valuem);
    }
  });

  $('#l1r1').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'primary',
    offstyle: 'secondary'
  });

  $('#l1r1').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_l1r1').val('on');
      id = '1';
      value = $('#hidden_l1r1').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
    else
    {
      $('#hidden_l1r1').val('off');
      id = '1';
      value = $('#hidden_l1r1').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
  });

  $('#l1r2').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'customR2-on',
    offstyle: 'customR2-off'
  });

  $('#l1r2').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_l1r2').val('on');
      id = '2';
      value = $('#hidden_l1r2').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
    else
    {
      $('#hidden_l1r2').val('off');
      id = '2';
      value = $('#hidden_l1r2').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
  });

  $('#l1r3').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'customR3-on',
    offstyle: 'customR3-off'
  });

  $('#l1r3').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_l1r3').val('on');
      id = '3';
      value = $('#hidden_l1r3').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
    else
    {
      $('#hidden_l1r3').val('off');
      id = '3';
      value = $('#hidden_l1r3').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
  });

  $('#l1r4').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'customR4-on',
    offstyle: 'customR4-off'
  });

  $('#l1r4').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_l1r4').val('on');
      id = '4';
      value = $('#hidden_l1r4').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
    else
    {
      $('#hidden_l1r4').val('off');
      id = '4';
      value = $('#hidden_l1r4').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
  });

  $('#l1r5').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'customR5-on',
    offstyle: 'customR5-off'
  });

  $('#l1r5').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_l1r5').val('on');
      id = '5';
      value = $('#hidden_l1r5').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
    else
    {
      $('#hidden_l1r5').val('off');
      id = '5';
      value = $('#hidden_l1r5').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
  });

  $('#l1r6').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'customR6-on',
    offstyle: 'customR6-off'
  });

  $('#l1r6').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_l1r6').val('on');
      id = '6';
      value = $('#hidden_l1r6').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
    else
    {
      $('#hidden_l1r6').val('off');
      id = '6';
      value = $('#hidden_l1r6').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
  });

  $('#l2r1').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'primary',
    offstyle: 'secondary'
  });

  $('#l2r1').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_l2r1').val('on');
      id = '7';
      value = $('#hidden_l2r1').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
    else
    {
      $('#hidden_l2r1').val('off');
      id = '7';
      value = $('#hidden_l2r1').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
  });

  $('#l2r2').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'customR2-on',
    offstyle: 'customR2-off'
  });

  $('#l2r2').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_l2r2').val('on');
      id = '8';
      value = $('#hidden_l2r2').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
    else
    {
      $('#hidden_l2r2').val('off');
      id = '8';
      value = $('#hidden_l2r2').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
  });

  $('#l2r3').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'customR3-on',
    offstyle: 'customR3-off'
  });

  $('#l2r3').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_l2r3').val('on');
      id = '9';
      value = $('#hidden_l2r3').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
    else
    {
      $('#hidden_l2r3').val('off');
      id = '9';
      value = $('#hidden_l2r3').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
  });

  $('#l2r4').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'customR4-on',
    offstyle: 'customR4-off'
  });

  $('#l2r4').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_l2r4').val('on');
      id = '10';
      value = $('#hidden_l2r4').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
    else
    {
      $('#hidden_l2r4').val('off');
      id = '10';
      value = $('#hidden_l2r4').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
  });

  $('#l2r5').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'customR5-on',
    offstyle: 'customR5-off'
  });

  $('#l2r5').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_l2r5').val('on');
      id = '11';
      value = $('#hidden_l2r5').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
    else
    {
      $('#hidden_l2r5').val('off');
      id = '11';
      value = $('#hidden_l2r5').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
  });

  $('#l2r6').bootstrapToggle({
    on: 'ON',
    off: 'OFF',
    onstyle: 'customR6-on',
    offstyle: 'customR6-off'
  });

  $('#l2r6').change(function(){
    if($(this).prop('checked'))
    {
      $('#hidden_l2r6').val('on');
      id = '12';
      value = $('#hidden_l2r6').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
    else
    {
      $('#hidden_l2r6').val('off');
      id = '12';
      value = $('#hidden_l2r6').val();
      checkID(id,value);
      postValueThingspeak(id_button);
      postValue(id,value);
    }
  });
})


function postMasterValue(idm,valuem){
  $.ajax({
    type: 'POST',
    url: 'api/postMasterValue',
    data: {idm:idm,valuem:valuem},
    success: function(data){
    }
  })
}


function postValue(id,value){
  setTimeout(function(){
    $.ajax({
    type: 'POST',
    url: 'api/postValue',
    data: {id:id,value:value},
    success: function(data){
    }
  })
},1000);
}

function postValueThingspeak(id_button,value){
  setTimeout(function(){
    $.ajax({
      type: 'POST',
      url: 'https://api.thingspeak.com/talkbacks/38418/commands.json?api_key=K5Q0ZNC7CEZBYU7N&',
      data: {command_string:id_button},
      success: function(data){

      }
    })
  },1000);
}

function checkID(id,value){
  id_button = id;
  value_button = value;
  if(value_button == 'on')
  {
    if(id_button == '1'){
      id_button = 'RELAY1_ON';
    }
    else if(id_button == '2'){
      id_button = 'RELAY2_ON'
    }
    else if(id_button == '3'){
      id_button = 'RELAY3_ON';
    }
    else if(id_button == '4'){
      id_button = 'RELAY4_ON'
    }
    else if(id_button == '5'){
      id_button = 'RELAY5_ON';
    }
    else if(id_button == '6'){
      id_button = 'RELAY6_ON'
    }
    else if(id_button == '7'){
      id_button = 'RELAY7_ON';
    }
    else if(id_button == '8'){
      id_button = 'RELAY8_ON'
    }
    else if(id_button == '9'){
      id_button = 'RELAY9_ON';
    }
    else if(id_button == '10'){
      id_button = 'RELAY10_ON'
    }
    else if(id_button == '11'){
      id_button = 'RELAY11_ON';
    }
    else if(id_button == '12'){
      id_button = 'RELAY12_ON'
    }
  }else if(value_button == 'off')
  {
    if(id_button == '1'){
      id_button = 'RELAY1_OFF';
    }
    else if(id_button == '2'){
      id_button = 'RELAY2_OFF'
    }
    else if(id_button == '3'){
      id_button = 'RELAY3_OFF';
    }
    else if(id_button == '4'){
      id_button = 'RELAY4_OFF'
    }
    else if(id_button == '5'){
      id_button = 'RELAY5_OFF';
    }
    else if(id_button == '6'){
      id_button = 'RELAY6_OFF'
    }
    else if(id_button == '7'){
      id_button = 'RELAY7_OFF';
    }
    else if(id_button == '8'){
      id_button = 'RELAY8_OFF'
    }
    else if(id_button == '9'){
      id_button = 'RELAY9_OFF';
    }
    else if(id_button == '10'){
      id_button = 'RELAY10_OFF'
    }
    else if(id_button == '11'){
      id_button = 'RELAY11_OFF';
    }
    else if(id_button == '12'){
      id_button = 'RELAY12_OFF'
    }
  }

}


function getPreviousValue(){
  $.ajax({
    type: 'GET',
    url: 'api/getPreviousValue',
    success: function(data){
      if(idm == '1'){
        stat1 = data[0]['log_status'];
        if(stat1 == 'on'){
          $('#l1r1').bootstrapToggle('on');
        }else{
          $('#l1r1').bootstrapToggle('off');
        }
        stat2 = data[1]['log_status'];
        if(stat2 == 'on'){
          $('#l1r2').bootstrapToggle('on');
        }else{
          $('#l1r2').bootstrapToggle('off');
        }

        stat3 = data[2]['log_status'];
        if(stat3 == 'on'){
          $('#l1r3').bootstrapToggle('on');
        }else{
          $('#l1r3').bootstrapToggle('off');
        }

        stat4 = data[3]['log_status'];
        if(stat4 == 'on'){
          $('#l1r4').bootstrapToggle('on');
        }else{
          $('#l1r4').bootstrapToggle('off');
        }

        stat5 = data[4]['log_status'];
        if(stat5 == 'on'){
          $('#l1r5').bootstrapToggle('on');
        }else{
          $('#l1r5').bootstrapToggle('off');
        }

        stat6 = data[5]['log_status'];
        if(stat6 == 'on'){
          $('#l1r6').bootstrapToggle('on');
        }else{
          $('#l1r6').bootstrapToggle('off');
        }
      }
      else if(idm == '2'){

        stat7 = data[6]['log_status'];
        if(stat7 == 'on'){
          $('#l2r1').bootstrapToggle('on');
        }else{
          $('#l2r1').bootstrapToggle('off');
        }
        stat8 = data[7]['log_status'];
        if(stat8 == 'on'){
          $('#l2r2').bootstrapToggle('on');
        }else{
          $('#l2r2').bootstrapToggle('off');
        }

        stat9 = data[8]['log_status'];
        if(stat9 == 'on'){
          $('#l2r3').bootstrapToggle('on');
        }else{
          $('#l2r3').bootstrapToggle('off');
        }

        stat10 = data[9]['log_status'];
        if(stat10 == 'on'){
          $('#l2r4').bootstrapToggle('on');
        }else{
          $('#l2r4').bootstrapToggle('off');
        }

        stat11 = data[10]['log_status'];
        if(stat11 == 'on'){
          $('#l2r5').bootstrapToggle('on');
        }else{
          $('#l2r5').bootstrapToggle('off');
        }

        stat12 = data[11]['log_status'];
        if(stat12 == 'on'){
          $('#l2r6').bootstrapToggle('on');
        }else{
          $('#l2r6').bootstrapToggle('off');
        }
      }
    }
  })
}

function checkFeature(){
  $.ajax({
    type: 'GET',
    url: 'api/checkFeature',
    async: false,
    success: function(data){
      feature = data[0];
    }
  })
}
