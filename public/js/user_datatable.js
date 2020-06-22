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
                ' <a title="Delete User" id="delete_button" data-id=' + row['id'] + '><i class="fa fa-times fa-lg" style="color: #d82929"></i></a>'
              }
            }
         }
      ],
  });
});



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

var user_id;

$(document).on('click','#delete_button',function(){
  user_id = $('#delete_button').attr('data-id');
  $('#confirmation').modal('show');
  $('#confirmation').css('background','rgba(0,0,0,0.5)');
});

$('#delete_confirmation').click(function(){
  $.ajax({
    url: 'delete/'+user_id,
    beforeSend: function(){
      $('#delete_confirmation').text('DELETING...');
    },
    success: function(data){
      setTimeout(function(){
        $('#confirmation').modal('hide');
        $('#userst').DataTable().ajax.reload();
      }, 1000);
    }
  })

})
