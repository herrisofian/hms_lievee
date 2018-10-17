<!DOCTYPE html>
<html lang=en>
    <head>
        <?php $this->load->view('include/meta'); ?>
        <title>HMS | Master Status Room</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddNewStatRoom">
                        Add New Status Room
                    </button>
                </div>
                <div class="row">
                     <div class="panel panel-info">
                        <div class="panel-heading">Status Room List</div>
                        <div class="panel-body">
                            <table id="table">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Code Status Room</th>
                                    <th>Descr</th>
                                    <th>Status</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if($data_get == ''):
                                        echo 'No Data to Display';
                                    else:
                                        foreach($data_get as $data_status):
                                        ?>
                                            <tr>
                                                <td><?php echo $data_status['id_status_room']?></td>
                                                <td><a class="go-edit" href="#" data-id-stat="<?php echo $data_status['id_status_room']?>"><?php echo $data_status['kode_status_room']?></a></td>
                                                <td><?php echo $data_status['nama_status_room']?></td>
                                                <td><?php echo $data_status['status']?></td>
                                                <td><button class="btn btn-danger btn-delete-stat" data-id="<?php echo $data_status['id_status_room']?>">Delete</button></td>
                                            </tr>
                                        <?php    
                                        endforeach;    
                                    endif;    
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>               
            </div>
            <?php $this->load->view('include/modal/modalAddNewStatRoom'); ?>
            <?php $this->load->view('include/modal/modalEditStatRoom'); ?>
        </div>
        <?php $this->load->view('include/script'); ?>
        <script type="text/javascript" src="<?php echo base_url('scripts/master/master_status_room.js') ?>"></script>
    </body>
</html>
