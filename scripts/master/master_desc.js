$(document).ready( function () {
    $('#table').DataTable();
} );

$('.btn-delete-desc').on('click',function(e){
    var data_id = $(this).attr('data-id');
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "masterdescroom/delete",
        dataType: "json",
        data: {"id":data_id},
        success:function(response) {
           if(response.status != 0){
                alert(response.message);
                top.location.href= url+"masterdescroom";
           }
        }
    });
});
$('.btn-add-new-desc').on('click',function(e){
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "masterdescroom/add",
        dataType: "json",
        data: $('#formAddNewDesc').serialize(),
        success:function(response) {
           if(response.status != 0){
                top.location.href= url+"masterdescroom";
           }
        }
    });
});
$('.go-edit').on('click',function(e){
    var data_id = $(this).attr('data-id-desc');
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "masterdescroom/getedit",
        dataType: "json",
        data: {"id":data_id},
        success:function(response) {
            if(response.status != 0){
                $('#modalEditDesc').modal('show');
                $('#modalEditDesc').find('#edit-code-desc').val(response.data[0].kode_description);
                $('#modalEditDesc').find('#edit-name-desc').val(response.data[0].nama_description);
                $('#modalEditDesc').find('#edit-select-status').val(response.data[0].status);
                $('#modalEditDesc').find('#edit-id-desc').val(response.data[0].id_description);
           }
        }
    });
});
$('.btn-update-desc').on('click',function(e){
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "masterdescroom/update",
        dataType: "json",
        data: $('#formEditDesc').serialize(),
        success:function(response) {
            if(response.status != 0){
                alert(response.message);
                top.location.href= url+"masterdescroom";
           }
        }
    });
});