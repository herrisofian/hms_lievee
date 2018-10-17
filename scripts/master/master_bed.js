$(document).ready( function () {
    $('#table').DataTable();
} );

$('.btn-delete-bed').on('click',function(e){
    var data_id = $(this).attr('data-id');
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "masterbed/delete",
        dataType: "json",
        data: {"id":data_id},
        success:function(response) {
           if(response.status != 0){
                alert(response.message);
                top.location.href= url+"masterbed";
           }
        }
    });
});
$('.btn-add-new-bed').on('click',function(e){
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "masterbed/add",
        dataType: "json",
        data: $('#formAddNewBed').serialize(),
        success:function(response) {
           if(response.status != 0){
                alert(response.message);
                top.location.href= url+"masterbed";
           }
        }
    });
});
$('.go-edit').on('click',function(e){
    var data_id = $(this).attr('data-id-bed');
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "masterbed/getedit",
        dataType: "json",
        data: {"id":data_id},
        success:function(response) {
            console.log(response);
            if(response.status != 0){
                $('#modalEditBed').modal('show');
                $('#modalEditBed').find('#edit-code-bed').val(response.data[0].kode_bed_type);
                $('#modalEditBed').find('#edit-name-bed').val(response.data[0].nama_bed_type);
                $('#modalEditBed').find('#edit-descr-bed').val(response.data[0].description);
                $('#modalEditBed').find('#edit-select-status').val(response.data[0].status);
                $('#modalEditBed').find('#edit-id-bed').val(response.data[0].id_bed_type);
           }
        }
    });
});
$('.btn-update-bed').on('click',function(e){
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "masterbed/update",
        dataType: "json",
        data: $('#formEditBed').serialize(),
        success:function(response) {
            console.log(response);
            if(response.status != 0){
                alert(response.message);
                top.location.href= url+"masterbed";
           }
        }
    });
});