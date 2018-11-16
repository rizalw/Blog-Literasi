<h3>User List</h3>
        </div>
    </div>
    <table class="table table-bordered table-responsive">
        <div class="Container">
            <a href="<?php echo base_url('tabel_pengguna')?>"; class="btn btn-default">Back</a>
    <form action="<?php echo base_url('tabel_pengguna/submit') ?>" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="Nama" class="col-md-2 text-right">Nama</label>
                <div class="col-md-10">
                    <input type="text" name="txt_name" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="Kelas" class="col-md-2 text-right">Kelas</label>
                <div class="col-md-10">
                    <input type="text" name="txt_kelas" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="Angakatan" class="col-md-2 text-right">Angkatan</label>
                <div class="col-md-10">
                    <input type="Text" name="int_Angkatan" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="username" class="col-md-2 text-right">Username</label>
                <div class="col-md-10">
                    <input type="text" name="txt_username" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-md-2 text-right">Password</label>
                <div class="col-md-10">
                    <input type="text" name="txt_password" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-right"></label>
                <div class="col-md-10">
                    <input type="submit" name="btnSave" class="btn btn-primary" value="Save">
                </div>
            </div>
    </form>
        </div>
    </table>
    </div>