<?php
$dPeserta = $db->getOnePeserta($_GET['id']);
$pecahLahir = explode('/', $dPeserta->peserta_tmp_tgl_lahir);
$umur = hitung_umur($pecahLahir[1]);
// var_dump($dPeserta);
?>
<div class="container-fluid">
    <!-- card awal -->
    <div class="card mt-3 mb-5">
        <div class="card-header">Detail Data Peserta <b><?php echo $dPeserta->peserta_nama ?></b></div>
        <div class="card-body">
            <!-- <h1 class="mt-4">Selamat Datang Di Halaman pesertaistrator</h1> -->
            <a href="index.php?page=pages/peserta/index" class="btn btn-success btn-sm mt-0 mb-3">Kembali</a>
            <div class="row">
                <div class="col-md-8">
                    <table id="" class="table table-borderless">
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td><?php echo $dPeserta->peserta_nama ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td><?php echo $dPeserta->peserta_jenis_kelamin ?></td>
                        </tr>
                        <tr>
                            <th>Tempat / Tanggal Lahir</th>
                            <td>:</td>
                            <td><?php echo $pecahLahir[0] . ' / ' . tgl_indo($pecahLahir[1]) ?></td>
                        </tr>
                        <tr>
                            <th>Umur</th>
                            <td>:</td>
                            <td><?php echo $umur ?> Tahun</td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td>:</td>
                            <td><?php echo $dPeserta->peserta_agama ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td><?php echo $dPeserta->peserta_alamat ?></td>
                        </tr>
                        <tr>
                            <th>No Hp/Tlp</th>
                            <td>:</td>
                            <td><?php echo $dPeserta->peserta_no_hp ?></td>
                        </tr>
                        <tr>
                            <th>Berkas</th>
                            <td>:</td>
                            <td><a target="_blank" href="assets/doc/peserta/<?php echo $dPeserta->peserta_berkas ?>">Download</a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail ">
                        <img width="300px" height="400px" class="img-responsive" src="assets/images/peserta/<?php echo $dPeserta->peserta_foto ?>" alt="No Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card akhir -->

</div>