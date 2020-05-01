<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($db->editUser($_POST) > 0) {
        echo "
        <script>
        window.location='index.php?page=pages/user/index';
        </script>
        ";
    } else {
        echo "
    <script>
    window.location='index.php?page=pages/user/index';
    </script>
    ";
    }
}
?>
<div class="container-fluid">
    <!-- card awal -->
    <div class="col-6">
        <div class="card mt-3">
            <div class="card-header">Edit Data Tabel User</div>
            <div class="card-body">
                <!-- <h1 class="mt-4">Selamat Datang Di Halaman Administrator</h1> -->
                <?php $dUser = $db->getOneUser($_GET['id']); ?>
                <form method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input name="id" value="<?php echo $dUser->user_id ?>" type="hidden" class="form-control" placeholder="Username">
                        <input name="username" value="<?php echo $dUser->user_username ?>" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" value="<?php echo $dUser->user_password ?>" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" value="<?php echo $dUser->user_nama ?>" type="text" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" name="level" id="level">
                            <option value="1">Admin</option>
                            <option value="2">Pimpinan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!-- card akhir -->

</div>