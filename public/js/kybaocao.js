$(document).ready(function() {
	var date = function(dateObject) {
    var d = new Date(dateObject.substring(0, 10));
    var day = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    if (day < 10) {
        day = "0" + day;
    }
    if (month < 10) {
        month = "0" + month;
    }
    var date = day + "-" + month + "-" + year;
    return date;
    };
  $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text("Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.modal-title').text('Edit');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#tenky').val($(this).data('tenky'));
        $('#thoigianbd').val($(this).data('ngaybatdau'));
        $('#thoigiankt').val($(this).data('ngayketthuc'));
        $('#myModal').modal('show');
    });
    $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text("Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.modal-title').text('Delete');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.did').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.dname').html($(this).data('noidung'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.edit', function() {

        $.ajax({
            type: 'post',
            url: '/editkybaocao',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'tenky': $('#tenky').val(),
                'ngaybatdau': $('#thoigianbd').val(),
                'ngayketthuc': $('#thoigiankt').val()
            },
            success: function(data) {
            	console.log(data);
                $('.item' + data.id).replaceWith("<tr class='item"+data.id+"'><td></td><td>"+ data.tenky +"</td><td>"+date(data.thoigianbatdau)+"</td><td>"+date(data.thoigianketthuc)+"</td><td style='text-align: center;'><button class='btn btn-outline btn-success  dim edit-modal' data-id='"+ data.id+"' data-tenky='"+ data.tenky+"' data-ngaybatdau='"+date(data.thoigianbatdau)+"' data-ngayketthuc='"+date(data.thoigianketthuc)+"' style='padding: 1px 9px;'><i class='fa fa-paint-brush'></i>Edit</button> <button class='btn btn-outline btn-danger  dim delete-modal' data-id='"+data.id+"' data-noidung='"+data.tenky+"' type='submit' style= 'padding: 1px 9px;'><i class='fa fa-trash'></i>Delete</button></td></tr>");
            }
        });
    });
    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/deletekybaocao',
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
