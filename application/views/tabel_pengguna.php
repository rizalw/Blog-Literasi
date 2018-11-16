    <h3>User List</h3>
            <?php
                if($this->session->flashdata('success_msg')){
            ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('success_msg'); ?>
                </div>
            <?php
            }
            ?>

            <?php
                if($this->session->flashdata('error_msg')){
            ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('error_msg'); ?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <table class="table table-bordered table-responsive">
    <div class="Container">
    <a href="<?php echo base_url('tabel_pengguna/add')?>"; class="btn btn-primary">Add New</a>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Angkatan</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody
    <?php
        if($data){
            foreach($data as $a){

    ?>
        <tr>
            <td><?php echo $a->ID; ?></td>
            <td><?php echo $a->Nama; ?></td>
            <td><?php echo $a->Kelas; ?></td>
            <td><?php echo $a->Angkatan; ?></td>
            <td><?php echo $a->Username; ?></td>
            <td><?php echo $a->Password; ?></td>
            <td href="<?php echo base_url('tabel_pengguna\edit'. $a->ID);?>" class="btn btn-info">Edit</td>
            <td class="btn btn-danger">Delete</td>
        </tr>
    <?php
            }
        }
    ?>
    </tbody>
    </table>