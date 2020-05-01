<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if ($db->savePeserta($_POST, $_FILES['foto'], $_FILES['berkas']) > 0) {
        echo "
        <script>
        window.location='index.php?page=pages/peserta/index';
        </script>
        ";
    } else {
        echo "
        <script>
        window.location='index.php?page=pages/peserta/index';
        </script>
        ";
    }
}
?>
<div class="container-fluid">

    <!-- card awal -->
    <div class="col-12">
        <div class="card mt-3 mb-5">
            <div class="card-header">Tamba Data Tabel Peserta</div>
            <div class="card-body">
                <!-- <h1 class="mt-4">Selamat Datang Di Halaman Administrator</h1> -->
                <form enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input autofocus required name="namaLengkap" type="text" class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" required name="jenisKelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input required name="tmpLahir" type="text" class="form-control" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input required name="tglLahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select name="agama" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No HP/Tlp</label>
                                <input name="noHp" type="number" placeholder="No HP/Tlp" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Alamat Lengkap</label>
                                <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Lengkap"></textarea>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Pendidikan</label>
                                <select name="pendidikan" class="form-control">
                                    <option value="0.10">Tidak Sekolah</option>
                                    <option value="0.8">SD Sederajat</option>
                                    <option value="0.6">SMP Sederajat</option>
                                    <option value="0.4">SMA Sederajat</option>
                                    <option value="0.2">D3 Sederajat</option>
                                    <option value="1">S1 Sederajat</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1">Lajang</option>
                                    <option value="1">Dara</option>
                                    <option value="0.4">Menikah</option>
                                    <option value="0.8">Duda</option>
                                    <option value="0.8">Janda</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tinggi Badang</label>
                                <input min="150" max="200" name="tBadan" type="number" placeholder="Tinggi Badang" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Berat Badan</label>
                                <input min="40" max="150" name="bBadan" type="number" placeholder="Berat Badan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mempunyai Tato / Tindik</label>
                                <select name="tato" class="form-control">
                                    <option value="0.2">Ya</option>
                                    <option value="1">Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Cata Badan/Penyakit Serius</label>
                                <select name="cacat" class="form-control">
                                    <option value="0.8">Ya</option>
                                    <option value="1">Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input name="foto" type="file" placeholder="Foto" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Berkas</label>
                                <input name="berkas" type="file" placeholder="Berkas" class="form-control" required="">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!-- card akhir -->

</div>