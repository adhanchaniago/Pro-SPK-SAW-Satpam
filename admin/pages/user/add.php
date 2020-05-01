<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($db->saveUser($_POST) > 0) {
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
            <div class="card-header">Tamba Data Tabel User</div>
            <div class="card-body">
                <!-- <h1 class="mt-4">Selamat Datang Di Halaman Administrator</h1> -->
                <form method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input autofocus required name="username" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input required name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input required name="nama" type="text" class="form-control" placeholder="Nama">
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