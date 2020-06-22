setInterval(function(){
  $.ajax({
    url: 'api/getData',
    success: function(data){
      if(data>30){
        $('#connection_problem').css('display','unset');
        $('#theoverlay').css('display','unset');
      }else{
        $('#connection_problem').css('display','none');
        $('#theoverlay').css('display','none');
      }
    }
  });
},2000);
