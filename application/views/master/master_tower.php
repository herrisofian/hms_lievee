<!DOCTYPE html>
<html lang=en>
    <head>
        <?php $this->load->view('include/meta'); ?>
        <title>HMS | Master Tower</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddNewTower">
                        Add New Tower
                    </button>
                </div>
                <div class="row">
                     <div class="panel panel-info">
                        <div class="panel-heading">Tower List</div>
                        <div class="panel-body">
                            <table id="table">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Code Tower</th>
                                    <th>Name Tower</th>
                                    <th>Status</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if($data_get == ''):
                                        echo 'No Data to Display';
                                    else:
                                        foreach($data_get as $data_tower):
                                        ?>
                                            <tr>
                                                <td><?php echo $data_tower['id_tower']?></td>
                                                <td><a class="go-edit" href="#" data-id-tower="<?php echo $data_tower['id_tower']?>"><?php echo $data_tower['kode_tower']?></a></td>
                                                <td><?php echo $data_tower['nama_tower']?></td>
                                                <td><?php echo $data_tower['status']?></td>
                                                <td><button class="btn btn-danger btn-delete-tower" data-id="<?php echo $data_tower['id_tower']?>">Delete</button></td>
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
            <?php $this->load->view('include/modal/modalAddNewTower'); ?>
            <?php $this->load->view('include/modal/modalEditTower'); ?>
        </div>
        <?php $this->load->view('include/script'); ?>
        <script type="text/javascript" src="<?php echo base_url('scripts/master/master_tower.js') ?>"></script>
    </body>
</html>
