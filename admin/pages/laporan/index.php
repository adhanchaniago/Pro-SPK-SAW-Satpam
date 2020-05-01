<?php
include '../../assets/model/Db.php';
$db = new Db();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>PT. Kyara Multi Baraka</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/simple-sidebar.css" rel="stylesheet">
</head>

<body onload=" window.print()">
    <div class="container">
        <div class="container-fluid">
            <div class="mb-5 mt-5" id="corp">
                <div class="row">
                    <div class="col-md-4">
                        <img src="../../assets/images/logo.jpeg" class="img-responsive" alt="No Image">
                    </div>
                    <div class="col-md-8">
                        <h4>PT. Kyara Multi Baraka</h4>
                        <p>
                            Instagram : <i>@ptkyaramulti</i>
                            <br>
                            Website : <i>https://picbabun.com/ptkyaramulti</i>
                            <br>
                            Alamat : Jln. Batang Kabung Ganting, Kec. Koto Tangah, Kota Padang, Sumatera Barat 25586</p>
                    </div>
                </div>
            </div>
            <div class="mb-5 mt-3">
                <h2 class="text-center">Laporan Analisa</h2>
                <h4>Matrix Awal</h4>
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
                <h4>Matrix Normalisasi</h4>
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
                <h4>Hasil Analisa</h4>
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
            <!-- card akhir -->

        </div>
</body>

</html>