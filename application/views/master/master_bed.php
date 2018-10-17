<!DOCTYPE html>
<html lang=en>
    <head>
        <?php $this->load->view('include/meta'); ?>
        <title>HMS | Master Bed</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddNewBed">
                        Add New Bed Type
                    </button>
                </div>
                <div class="row">
                     <div class="panel panel-info">
                        <div class="panel-heading">Bed List</div>
                        <div class="panel-body">
                            <table id="table">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Code Bed</th>
                                    <th>Name Bed</th>
                                    <th>Status Bed</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if($data_get == ''):
                                        echo 'No Data to Display';
                                    else:
                                        foreach($data_get as $data_bed):
                                        ?>
                                            <tr>
                                                <td><?php echo $data_bed['id_bed_type']?></td>
                                                <td><a class="go-edit" href="#" data-id-bed="<?php echo $data_bed['id_bed_type']?>"><?php echo $data_bed['kode_bed_type']?></a></td>
                                                <td><?php echo $data_bed['nama_bed_type']?></td>
                                                <td><?php echo $data_bed['status']?></td>
                                                <td><button class="btn btn-danger btn-delete-bed" data-id="<?php echo $data_bed['id_bed_type']?>">Delete</button></td>
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
            <?php $this->load->view('include/modal/modalAddNewBed'); ?>
            <?php $this->load->view('include/modal/modalEditBed'); ?>
        </div>
        <?php $this->load->view('include/script'); ?>
        <script type="text/javascript" src="<?php echo base_url('scripts/master/master_bed.js') ?>"></script>
    </body>
</html>
