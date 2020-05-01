<div class="container-fluid">

    <!-- card awal -->
    <div class="card mt-3 mb-5">
        <div class="card-header">Data Tabel Hasil Analisa</div>
        <div class="card-body">
            <!-- <h1 class="mt-4">Selamat Datang Di Halaman analisaistrator</h1> -->
            <h2>Hasil Analisa</h2>
            <small class="mb-5"><i>Daftar Nilai Peserta Berdasarkan Analisa Dengan Menggunakan Metode Simple Addictive Weight </i></small>
            <table class="table table-bordered mt-2">
                <thead>
                    <tr>
                        <th width='10px'>No</th>
                        <th width='20px'>Alernatif</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $dAnalisas = $db->getAllAnalisa();
                    $dKriteria = $db->getKriteria();
                    // var_dump($dKriteria);
                    // var_dump($dAnalisas);
                    foreach ($dAnalisas as $no => $dAnalisa) :
                    ?>
                        <tr>
                            <td><?php echo ++$no ?></td>
                            <td><?php echo 'A-0' . $alt2++ ?></td>
                            <td><?php echo $dAnalisa->peserta_nama ?></td>
                            <td><?php
                                echo round(($dAnalisa->kriteria_1 / $dKriteria->maxK1) * 0.25, 2) +
                                    round(($dAnalisa->kriteria_2 / $dKriteria->maxK2) * 0.10, 2) +
                                    round(($dAnalisa->kriteria_3 / $dKriteria->maxK3) * 0.25, 2) +
                                    round(($dAnalisa->kriteria_4 / $dKriteria->maxK4) * 0.10, 2) +
                                    round(($dAnalisa->kriteria_5 / $dKriteria->maxK5) * 0.15, 2) +
                                    round(($dAnalisa->kriteria_6 / $dKriteria->maxK6) * 0.15, 2) ?>
                            </td>
                            <!-- <td width='140px'>
                                <a href="index.php?page=pages/analisa/edit&id=<?php echo $dAnalisa->analisa_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a onclick="return confirm('Anda yakin hapus ?')" href="index.php?page=pages/analisa/delete&id=<?php echo $dAnalisa->analisa_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td> -->
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- card akhir -->

</div>