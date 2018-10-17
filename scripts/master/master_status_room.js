$(document).ready( function () {
    $('#table').DataTable();
} );

$('.btn-delete-stat').on('click',function(e){
    var data_id = $(this).attr('data-id');
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "masterstatroom/delete",
        dataType: "json",
        data: {"id":data_id},
        success:function(response) {
           if(response.status != 0){
                alert(response.message);
                top.location.href= url+"masterstatroom";
           }
        }
    });
});
$('.btn-add-new-stat').on('click',function(e){
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "masterstatroom/add",
        dataType: "json",
        data: $('#formAddNewStat').serialize(),
        success:function(response) {
           if(response.status != 0){
                top.location.href= url+"masterstatroom";
           }
        }
    });
});
$('.go-edit').on('click',function(e){
    var data_id = $(this).attr('data-id-stat');
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "masterstatroom/getedit",
        dataType: "json",
        data: {"id":data_id},
        success:function(response) {
            if(response.status != 0){
                $('#modalEditStatRoom').modal('show');
                $('#modalEditStatRoom').find('#edit-code-stat').val(response.data[0].kode_status_room);
                $('#modalEditStatRoom').find('#edit-name-stat').val(response.data[0].nama_status_room);
                $('#modalEditStatRoom').find('#edit-descr-stat').val(response.data[0].description);
                $('#modalEditStatRoom').find('#edit-select-status').val(response.data[0].status);
                $('#modalEditStatRoom').find('#edit-id-stat').val(response.data[0].id_status_room);
           }
        }
    });
});
$('.btn-update-stat').on('click',function(e){
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "masterstatroom/update",
        dataType: "json",
        data: $('#formEditStat').serialize(),
        success:function(response) {
            if(response.status != 0){
                alert(response.message);
                top.location.href= url+"masterstatroom";
           }
        }
    });
});