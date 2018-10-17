<!DOCTYPE html>
<html lang=en>
    <head>
        <?php $this->load->view('include/meta'); ?>
        <title>HMS | Master Description</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddNewDesc">
                        Add New Description
                    </button>
                </div>
                <div class="row">
                     <div class="panel panel-info">
                        <div class="panel-heading">Description List</div>
                        <div class="panel-body">
                            <table id="table">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Code Description</th>
                                    <th>Name Description</th>
                                    <th>Status</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if($data_get == ''):
                                        echo 'No Data to Display';
                                    else:
                                        foreach($data_get as $data_desc):
                                        ?>
                                            <tr>
                                                <td><?php echo $data_desc['id_description']?></td>
                                                <td><a class="go-edit" href="#" data-id-desc="<?php echo $data_desc['id_description']?>"><?php echo $data_desc['kode_description']?></a></td>
                                                <td><?php echo $data_desc['nama_description']?></td>
                                                <td><?php echo $data_desc['status']?></td>
                                                <td><button class="btn btn-danger btn-delete-desc" data-id="<?php echo $data_desc['id_description']?>">Delete</button></td>
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
            <?php $this->load->view('include/modal/modalAddNewDesc'); ?>
            <?php $this->load->view('include/modal/modalEditDesc'); ?>
        </div>
        <?php $this->load->view('include/script'); ?>
        <script type="text/javascript" src="<?php echo base_url('scripts/master/master_desc.js') ?>"></script>
    </body>
</html>
