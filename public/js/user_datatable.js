$(function() {
  $('#userst').DataTable({
      ajax: 'api/userList',
      columns: [
          { data: 'name', name: 'name' },
          { data: 'email', name: 'email' },
          { data: 'created_at', name: 'created_at' },
          {  mRender: function (data, type, row) {
            if(row['id'] == '1'){
              return 'SUPER ADMIN'
            }else{
                return '<a title="Edit User" id="edit_button" data-id= ' + row['id'] + ' style="color: #8c4411" data-toggle="modal" data-target="#edit-user"><i class="fa fa-edit fa-lg"></i></a> '
                + '|' +
                ' <a title="Forgot Password" id="forgot_password" data-id=' + row['id'] + '><i class="fa fa-unlock-alt fa-lg" style="color: blue"></i></a> '
                + '|' +
                ' <a title="Delete User" id="delete_button" data-id=' + row['id'] + '><i class="fa fa-times fa-lg" style="color: #d82929"></i></a>'
              }
            }
         }
      ],
  });
});


var user_id;
$(document).on('click','#forgot_password',function(){
  user_id = $(this).attr('data-id');
  $('#reset_confirmation').modal('show');
  $('#reset_confirmation').css('background','rgba(0,0,0,0.5)');
});

$('#reset_text').click(function(){
  $.ajax({
    url: 'reset/'+user_id,
    beforeSend: function(){
      $('#reset_text').text('RESETING..');
    },
    success: function(data){
      setTimeout(function(){
        $('#reset_confirmation').modal('hide');
        $('#reset_text').text('RESET');
      }, 1000);
    }
  })

})

$(document).on('click','#edit_button',function(){
  var id = $(this).attr('data-id');
  $.ajax({
    url: 'edit/'+id,
    success: function(data){
      $('#id_edit').val(data['id']);
      $('#name_edit').val(data['name']);
      $('#email_edit').val(data['email']);
    }
  })
})


$(document).on('click','#delete_button',function(){
  user_id = $(this).attr('data-id');
  $('#confirmation').modal('show');
  $('#confirmation').css('background','rgba(0,0,0,0.5)');
});

$('#delete_confirmation').click(function(){
  $.ajax({
    url: 'delete/'+user_id,
    beforeSend: function(){
      $('#delete_confirmation').text('DELETING..');
    },
    success: function(data){
      setTimeout(function(){
        $('#confirmation').modal('hide');
        $('#userst').DataTable().ajax.reload();
        $('#delete_confirmation').text('DELETE');
      }, 1000);
    }
  })

})
