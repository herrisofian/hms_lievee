$(document).ready( function () {
    $('#table').DataTable();
} );

$('.btn-delete-tower').on('click',function(e){
    var data_id = $(this).attr('data-id');
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "mastertower/delete",
        dataType: "json",
        data: {"id":data_id},
        success:function(response) {
           if(response.status != 0){
                alert(response.message);
                top.location.href= url+"mastertower";
           }
        }
    });
});
$('.btn-add-new-tower').on('click',function(e){
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "mastertower/add",
        dataType: "json",
        data: $('#formAddNewTower').serialize(),
        success:function(response) {
           if(response.status != 0){
                top.location.href= url+"mastertower";
           }
        }
    });
});
$('.go-edit').on('click',function(e){
    var data_id = $(this).attr('data-id-tower');
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "mastertower/getedit",
        dataType: "json",
        data: {"id":data_id},
        success:function(response) {
            if(response.status != 0){
                $('#modalEditTower').modal('show');
                $('#modalEditTower').find('#edit-code-tower').val(response.data[0].kode_tower);
                $('#modalEditTower').find('#edit-name-tower').val(response.data[0].nama_tower);
                $('#modalEditTower').find('#edit-descr-tower').val(response.data[0].description);
                $('#modalEditTower').find('#edit-select-status').val(response.data[0].status);
                $('#modalEditTower').find('#edit-id-tower').val(response.data[0].id_tower);
           }
        }
    });
});
$('.btn-update-tower').on('click',function(e){
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url + "mastertower/update",
        dataType: "json",
        data: $('#formEditTower').serialize(),
        success:function(response) {
            if(response.status != 0){
                alert(response.message);
                top.location.href= url+"mastertower";
           }
        }
    });
});