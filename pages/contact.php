<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($db->savePesertaFront($_POST, $_FILES['foto'], $_FILES['berkas']) > 0) {
        echo "<script>  
                alert('Terimakasih Telah Mendaftar, Kami akan Menghubungi Anda Jika Lolos Tahap Seleksi');
               
            </script>";
    } else {
        echo "<script>
                alert('Pendaftaran Gagal Mohon Isi dengan Teliti');
            </script>";
    }
}
?>
<section id="daftar" class="contact bg-mega fix">
    <div class="container">
        <div class="row">
            <div class="main_contact roomy-100 text-white">
                <div class="col-md-4">
                    <div class="rage_widget">
                        <div class="widget_head">
                            <h3 class="text-white">Isi Kolom Pendaftaran</h3>
                            <div class="separator_small"></div>
                        </div>
                        <p>
                            Mohon di isi dengan teliti dan seksama, kami akan menghubungi Anda jika lolos tahap seleksi</p>

                        <div class="widget_socail m-top-30">
                            <ul class="list-inline">
                                <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://www.whatsapp.com"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="http://www.instagram.com/egovaflavia"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 sm-m-top-30">
                    <form enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input name="namaLengkap" type="text" placeholder="Nama Lengkap" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenisKelamin" class="form-control">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input name="tmpLahir" type="text" placeholder="Tempat Lahir" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tanggal lahir</label>
                                        <input name="tglLahir" type="date" placeholder="Tanggal Lahir" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select name="agama" class="form-control">
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>No HP/Tlp</label>
                                        <input name="noHp" type="number" placeholder="No HP/Tlp" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input name="foto" type="file" placeholder="Foto" class="form-control " required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Berkas (KTP, IJAZAH, KK, SKCK) Dalam 1 File Format PDF</label>
                                        <input name="berkas" type="file" placeholder="Berkas" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Alamat Lengkap</label>
                                        <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Lengkap"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                                <h4>Wawancara Singkat</h4>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
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
                                </div>
                                <div class="col-sm-6">
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
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tinggi Badang</label>
                                        <input min="150" max="200" name="tBadan" type="number" placeholder="Tinggi Badang" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Berat Badan</label>
                                        <input min="40" max="150" name="bBadan" type="number" placeholder="Berat Badan" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mempunyai Tato / Tindik</label>
                                        <select name="tato" class="form-control">
                                            <option value="0.2">Ya</option>
                                            <option value="1">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Cata Badan/Penyakit Serius</label>
                                        <select name="cacat" class="form-control">
                                            <option value="0.8">Ya</option>
                                            <option value="1">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-block btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!--End off row -->
    </div>
    <!--End off container -->
</section>