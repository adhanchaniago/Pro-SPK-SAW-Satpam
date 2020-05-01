<div class="container-fluid">

    <!-- card awal -->
    <div class="card mt-3 mb-5">
        <div class="card-header">Data Tabel Analisa</div>
        <div class="card-body">
            <!-- <h1 class="mt-4">Selamat Datang Di Halaman analisaistrator</h1> -->
            <a href="index.php?page=pages/peserta/add" class="btn btn-primary btn-sm mt-0 mb-3">Tambah Data Alternatif</a>
            <h2>Matrix Awal</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width='10px'>No</th>
                        <th width='20px'>Alernatif</th>
                        <th>Nama</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                        <th>C6</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $dAnalisas = $db->getAllAnalisa();
                    // var_dump($dAnalisas);
                    foreach ($dAnalisas as $no => $dAnalisa) :
                    ?>
                        <tr>
                            <td><?php echo ++$no ?></td>
                            <td><?php echo 'A-0' . $alt++ ?></td>
                            <td><?php echo $dAnalisa->peserta_nama ?></td>
                            <td><?php echo $dAnalisa->kriteria_1 ?></td>
                            <td><?php echo $dAnalisa->kriteria_2 ?></td>
                            <td><?php echo $dAnalisa->kriteria_3 ?></td>
                            <td><?php echo $dAnalisa->kriteria_4 ?></td>
                            <td><?php echo $dAnalisa->kriteria_5 ?></td>
                            <td><?php echo $dAnalisa->kriteria_6 ?></td>
                            <!-- <td width='140px'>
                                <a href="index.php?page=pages/analisa/edit&id=<?php echo $dAnalisa->analisa_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a onclick="return confirm('Anda yakin hapus ?')" href="index.php?page=pages/analisa/delete&id=<?php echo $dAnalisa->analisa_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td> -->
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <hr>
            <h2>Matrix Normalisasi</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width='10px'>No</th>
                        <th width='20px'>Alernatif</th>
                        <th>Nama</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                        <th>C6</th>
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
                            <td><?php echo 'A-0' . $alt1++ ?></td>
                            <td><?php echo $dAnalisa->peserta_nama ?></td>
                            <td><?php echo round($dAnalisa->kriteria_1 / $dKriteria->maxK1, 2) ?></td>
                            <td><?php echo round($dAnalisa->kriteria_2 / $dKriteria->maxK2, 2) ?></td>
                            <td><?php echo round($dAnalisa->kriteria_3 / $dKriteria->maxK3, 2) ?></td>
                            <td><?php echo round($dAnalisa->kriteria_4 / $dKriteria->maxK4, 2) ?></td>
                            <td><?php echo round($dAnalisa->kriteria_5 / $dKriteria->maxK5, 2) ?></td>
                            <td><?php echo round($dAnalisa->kriteria_6 / $dKriteria->maxK6, 2) ?></td>
                            <!-- <td width='140px'>
                                <a href="index.php?page=pages/analisa/edit&id=<?php echo $dAnalisa->analisa_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a onclick="return confirm('Anda yakin hapus ?')" href="index.php?page=pages/analisa/delete&id=<?php echo $dAnalisa->analisa_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td> -->
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <hr>
            <h2>Hasil Analisa</h2>
            <table class="table table-bordered">
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