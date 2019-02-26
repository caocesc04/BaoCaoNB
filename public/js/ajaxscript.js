$(document).ready(function() {
  $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text("Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#noidung').val($(this).data('noidung'));
        $('#donvitinh').val($(this).data('donvitinh'));
        $('#myModal').modal('show');
    });
    $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text("Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.did').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.dname').html($(this).data('noidung'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.edit', function() {

        $.ajax({
            type: 'post',
            url: '/editpl01',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'noidung': $('#noidung').val(),
                'donvitinh': $('#donvitinh').val()
            },
            success: function(data) {
            	console.log(data);
                $('.item' + data.id).replaceWith("<tr class='item"+data.id+"'><td></td><td>"+ data.tenthuoctinh +"</td><td>"+data.donvitinh+"</td><td style='text-align: center;'><button class='btn btn-outline btn-success  dim edit-modal' data-id='"+ data.id+"' data-noidung='"+ data.tenthuoctinh+"' data-donvitinh='"+data.donvitinh+"' style='padding: 1px 9px;'><i class='fa fa-paint-brush'></i>Edit</button> <button class='btn btn-outline btn-danger  dim delete-modal' data-id='"+data.id+"' data-noidung='"+data.tenthuoctinh+"' type='submit' style= 'padding: 1px 9px;'><i class='fa fa-trash'></i>Delete</button></td></tr>");
            }
        });
    });
    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/deleteItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
                $('.item' + $('.did').text()).remove();
            }
        });
    });
});
