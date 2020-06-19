var id, status;
$(document).ready(function(){
  setTimeout(function(){
    $.ajax({
      type: 'GET',
      url: 'http://localhost/vuexy/public/api/getStatus',
      success: function(data){
        data.forEach(function(a){
          id = a['id'];
          status = a['status'];
          if(id == '1'){
            if(status == 'on'){
              $('#l1r1').bootstrapToggle('on');
            }else{
              $('#l1r1').bootstrapToggle('off');
            }
          }
          else if(id == '2'){
            if(status == 'on'){
              $('#l1r2').bootstrapToggle('on');
            }else{
              $('#l1r2').bootstrapToggle('off');
            }
          }
          else if(id == '3'){
            if(status == 'on'){
              $('#l1r3').bootstrapToggle('on');
            }else{
              $('#l1r3').bootstrapToggle('off');
            }
          }
          else if(id == '4'){
            if(status == 'on'){
              $('#l1r4').bootstrapToggle('on');
            }else{
              $('#l1r4').bootstrapToggle('off');
            }
          }
          else if(id == '5'){
            if(status == 'on'){
              $('#l1r5').bootstrapToggle('on');
            }else{
              $('#l1r5').bootstrapToggle('off');
            }
          }
          else if(id == '6'){
            if(status == 'on'){
              $('#l1r6').bootstrapToggle('on');
            }else{
              $('#l1r6').bootstrapToggle('off');
            }
          }
          else if(id == '7'){
            if(status == 'on'){
              $('#l2r1').bootstrapToggle('on');
            }else{
              $('#l2r1').bootstrapToggle('off');
            }
          }
          else if(id == '8'){
            if(status == 'on'){
              $('#l2r2').bootstrapToggle('on');
            }else{
              $('#l2r2').bootstrapToggle('off');
            }
          }
          else if(id == '9'){
            if(status == 'on'){
              $('#l2r3').bootstrapToggle('on');
            }else{
              $('#l2r3').bootstrapToggle('off');
            }
          }
          else if(id == '10'){
            if(status == 'on'){
              $('#l2r4').bootstrapToggle('on');
            }else{
              $('#l2r4').bootstrapToggle('off');
            }
          }
          else if(id == '11'){
            if(status == 'on'){
              $('#l2r5').bootstrapToggle('on');
            }else{
              $('#l2r5').bootstrapToggle('off');
            }
          }
          else if(id == '12'){
            if(status == 'on'){
              $('#l2r6').bootstrapToggle('on');
            }else{
              $('#l2r6').bootstrapToggle('off');
            }
          }

        });
      }
    })
  },1000);
})
