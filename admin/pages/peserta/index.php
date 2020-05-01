<div class="container-fluid">

    <!-- card awal -->
    <div class="card mt-3">
        <div class="card-header">Data Tabel Peserta</div>
        <div class="card-body">
            <!-- <h1 class="mt-4">Selamat Datang Di Halaman pesertaistrator</h1> -->
            <a href="index.php?page=pages/peserta/add" class="btn btn-primary btn-sm mt-0 mb-3">Tambah Data</a>
            <table id="" class="table table-bordered">
                <thead>
                    <tr>
                        <th width='10px'>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tmp/Tgl Lahir</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $dPesertas = $db->getAllPeserta();
                    foreach ($dPesertas as $no => $dPeserta) :
                        // var_dump($dPeserta);
                        $pecahLahir = explode('/', $dPeserta->peserta_tmp_tgl_lahir);
                    ?>
                        <tr>
                            <td><?php echo ++$no ?></td>
                            <td><?php echo $dPeserta->peserta_nama ?></td>
                            <td><?php echo $dPeserta->peserta_jenis_kelamin ?></td>
                            <td><?php echo $pecahLahir[0] . ' / ' . tgl_indo($pecahLahir[1]) ?></td>
                            <td><?php echo $dPeserta->peserta_alamat ?></td>
                            <td><?php echo $dPeserta->peserta_no_hp ?></td>
                            <td width='150px'>
                                <a href="index.php?page=pages/peserta/detail&id=<?php echo $dPeserta->peserta_id ?>" class="btn btn-success btn-sm">Detail</a>
                                <a onclick="return confirm('Anda yakin hapus ?')" href="index.php?page=pages/peserta/delete&id=<?php echo $dPeserta->peserta_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- card akhir -->

</div>