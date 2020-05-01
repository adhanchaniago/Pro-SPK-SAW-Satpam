<div class="container-fluid">

    <!-- card awal -->
    <div class="card mt-3">
        <div class="card-header">Data Tabel User</div>
        <div class="card-body">
            <!-- <h1 class="mt-4">Selamat Datang Di Halaman Useristrator</h1> -->
            <a href="index.php?page=pages/user/add" class="btn btn-primary btn-sm mt-0 mb-3">Tambah Data</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width='10px'>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $dUsers = $db->getAllUser();
                    // var_dump($dUsers);
                    foreach ($dUsers as $no => $dUser) :
                    ?>
                        <tr>
                            <td><?php echo ++$no ?></td>
                            <td><?php echo $dUser->user_username ?></td>
                            <td><?php echo $dUser->user_password ?></td>
                            <td><?php echo $dUser->user_nama ?></td>
                            <td><?php echo $dUser->user_level == 1 ? "Admin" : "Pimpinan" ?></td>
                            <td width='140px'>
                                <a href="index.php?page=pages/user/edit&id=<?php echo $dUser->user_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a onclick="return confirm('Anda yakin hapus ?')" href="index.php?page=pages/user/delete&id=<?php echo $dUser->user_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- card akhir -->

</div>