<?php
session_start();

include 'Conn.php';

class Db extends Conn
{
    // ========================Kriteria============================
    public function getKriteria()
    {
        $query = $this->get("SELECT max(kriteria_1) as maxK1,
                                    max(kriteria_2) as maxK2,
                                    max(kriteria_3) as maxK3,
                                    max(kriteria_4) as maxK4,
                                    max(kriteria_5) as maxK5,
                                    max(kriteria_6) as maxK6
                                    FROM tb_kriteria")[0];
        return $query;
    }
    // ========================Kriteria============================

    // Analisa R
    public function getAllAnalisa()
    {
        $query = $this->get("   SELECT * 
                                FROM tb_kriteria
                                JOIN tb_peserta
                                ON tb_kriteria.peserta_id = tb_peserta.peserta_id                                
                                ");
        return $query;
    }
    // Logout
    public function Logout()
    {
        session_destroy();
        echo    "<script>
                window.location='login.php'</script>
                ";
    }

    // Login
    public function Login($data)
    {
        global $conn;
        $username = $data['username'];
        $password = $data['password'];

        $query = "SELECT * FROM tb_user WHERE user_username = '$username' AND user_password = '$password'";
        $ambil = $conn->query($query);
        $cek = $ambil->num_rows;
        if ($cek == 1) {
            $_SESSION['akun'] = $ambil->fetch_object();
            echo "
                <script>alert('Selamat Datang');
                window.location='index.php'</script>
                ";
        } else {
            echo "
                <script>alert('Username / Password Anda Salah');
                window.location='login.php'</script>
                ";
        }
    }

    // User CRUD
    public function getAllUser()
    {
        $query = $this->get("SELECT * FROM tb_user");
        return $query;
    }

    public function saveUser($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $nama     = $data['nama'];
        $level    = $data['level'];
        global $conn;
        $query = "INSERT INTO tb_user  (user_username,
                                        user_password,
                                        user_nama,
                                        user_level) 
                                        VALUES (
                                            '$username',
                                            '$password',
                                            '$nama',
                                            '$level')";
        return $conn->query($query);
    }
    public function deleteUser($id)
    {
        global $conn;
        $query = "DELETE FROM tb_user WHERE user_id = '$id'";
        return $conn->query($query);
    }

    public function getOneUser($id)
    {
        $query = $this->get("SELECT * FROM tb_user WHERE user_id = '$id'")[0];
        return $query;
    }

    public function editUser($data)
    {
        global $conn;

        $id       = $data['id'];
        $username = $data['username'];
        $password = $data['password'];
        $nama     = $data['nama'];
        $level    = $data['level'];

        $query    = "UPDATE tb_user SET     user_username = '$username',
                                            user_password = '$password',
                                            user_nama     = '$nama',
                                            user_level    = '$level'
                                            WHERE
                                            user_id = '$id'";
        return $conn->query($query);
    }

    // Peserta CRUD
    public function getAllPeserta()
    {
        $query = $this->get("SELECT * FROM tb_peserta");
        return $query;
    }

    public function savePeserta($data, $foto, $berkas)
    {

        // Untuk Peserta
        $namaLengkap  = $data['namaLengkap'];
        $jenisKelamin = $data['jenisKelamin'];

        // Penggabungan Tgl & Tmp Lahir
        $tmpLahir    = $data['tmpLahir'];
        $tglLahir    = $data['tglLahir'];

        $tmpTglLahir = $tmpLahir . '/' . $tglLahir;

        $agama        = $data['agama'];
        $alamat       = $data['alamat'];
        $noHp         = $data['noHp'];

        // Upload Foto
        $namaFoto   = $foto['name'];
        $pecahFoto = explode('.', $namaFoto);
        $pecahFoto[0] = date('Ydmhis');
        $gabungFoto = $pecahFoto[0] . '.' . $pecahFoto[1];
        $tmpFoto    = $foto['tmp_name'];
        move_uploaded_file($tmpFoto, 'assets/images/peserta/' . $gabungFoto);

        // Upload Berkas
        $namaBerkas   = $berkas['name'];
        $pecahBerkas = explode('.', $namaBerkas);
        $pecahBerkas[0] = date('Ydmhis');
        $gabungBerkas = $pecahBerkas[0] . '.' . $pecahBerkas[1];
        $tmpBerkas    = $berkas['tmp_name'];
        move_uploaded_file($tmpBerkas, 'assets/doc/peserta/' . $gabungBerkas);
        // Untuk SPK
        $pendidikan   = $data['pendidikan'];
        $status       = $data['status'];

        // === Rumus BMI
        $tBadan       = $data['tBadan'] * 0.01; //Jadikan 1,11
        $bBadan       = $data['bBadan'];

        $ttBadan = $tBadan * $tBadan;
        $BMI = $bBadan / $ttBadan;

        if ($BMI > 19 && $BMI < 25) {
            $vBMI = 1;
        } else {
            $vBMI = 0;
        }
        // =====

        $tato         = $data['tato'];
        $cacat        = $data['cacat'];
        $umur = hitung_umur($tglLahir);

        if ($umur >= 19 && $umur <= 23) {
            $vUmur = 1;
        } elseif ($umur >= 24 && $umur <= 26) {
            $vUmur = 0.2;
        } elseif ($umur >= 27 && $umur <= 30) {
            $vUmur = 0.5;
        } elseif ($umur >= 31 && $umur <= 38) {
            $vUmur = 0.7;
        } elseif ($umur >= 40) {
            $vUmur = 0.9;
        }


        global $conn;
        $query = "INSERT INTO `tb_peserta` (`peserta_nama`, 
                                            `peserta_jenis_kelamin`, 
                                            `peserta_tmp_tgl_lahir`, 
                                            `peserta_agama`, 
                                            `peserta_alamat`, 
                                            `peserta_no_hp`, 
                                            `peserta_foto`, 
                                            `peserta_berkas`) 
                                            VALUES 
                                            (
                                                '$namaLengkap',
                                                '$jenisKelamin',
                                                '$tmpTglLahir',
                                                '$agama',
                                                '$alamat',
                                                '$noHp',
                                                '$gabungFoto',
                                                '$gabungBerkas'
                                            )";
        $conn->query($query);
        $idPersertaTerakhir = $conn->insert_id;

        $querySPK = "INSERT INTO `tb_kriteria`  (`peserta_id`, 
                                                `kriteria_1`, 
                                                `kriteria_2`, 
                                                `kriteria_3`, 
                                                `kriteria_4`, 
                                                `kriteria_5`, 
                                                `kriteria_6`) 
                                                VALUES 
                                                ('$idPersertaTerakhir',
                                                '$pendidikan',
                                                '$status',
                                                '$vBMI',
                                                '$vUmur',
                                                '$tato',
                                                '$cacat'
                                                )";
        return $conn->query($querySPK);
    }
    public function savePesertaFront($data, $foto, $berkas)
    {
        // Untuk Peserta
        $namaLengkap  = $data['namaLengkap'];
        $jenisKelamin = $data['jenisKelamin'];

        // Penggabungan Tgl & Tmp Lahir
        $tmpLahir    = $data['tmpLahir'];
        $tglLahir    = $data['tglLahir'];

        $tmpTglLahir = $tmpLahir . '/' . $tglLahir;

        $agama        = $data['agama'];
        $alamat       = $data['alamat'];
        $noHp         = $data['noHp'];

        // Upload Foto
        $namaFoto   = $foto['name'];
        $pecahFoto = explode('.', $namaFoto);
        $pecahFoto[0] = date('Ydmhis');
        $gabungFoto = $pecahFoto[0] . '.' . $pecahFoto[1];
        $tmpFoto    = $foto['tmp_name'];
        move_uploaded_file($tmpFoto, 'admin/assets/images/peserta/' . $gabungFoto);

        // Upload Berkas
        $namaBerkas   = $berkas['name'];
        $pecahBerkas = explode('.', $namaBerkas);
        $pecahBerkas[0] = date('Ydmhis');
        $gabungBerkas = $pecahBerkas[0] . '.' . $pecahBerkas[1];
        $tmpBerkas    = $berkas['tmp_name'];
        move_uploaded_file($tmpBerkas, 'admin/assets/doc/peserta/' . $gabungBerkas);
        // Untuk SPK
        $pendidikan   = $data['pendidikan'];
        $status       = $data['status'];

        // === Rumus BMI
        $tBadan       = $data['tBadan'] * 0.01; //Jadikan 1,11
        $bBadan       = $data['bBadan'];

        $ttBadan = $tBadan * $tBadan;
        $BMI = $bBadan / $ttBadan;

        if ($BMI > 19 && $BMI < 25) {
            $vBMI = 1;
        } else {
            $vBMI = 0;
        }
        // =====

        $tato         = $data['tato'];
        $cacat        = $data['cacat'];
        $umur = hitung_umur($tglLahir);

        if ($umur >= 19 && $umur <= 23) {
            $vUmur = 1;
        } elseif ($umur >= 24 && $umur <= 26) {
            $vUmur = 0.2;
        } elseif ($umur >= 27 && $umur <= 30) {
            $vUmur = 0.5;
        } elseif ($umur >= 31 && $umur <= 38) {
            $vUmur = 0.7;
        } elseif ($umur >= 40) {
            $vUmur = 0.9;
        }


        global $conn;
        $query = "INSERT INTO `tb_peserta` (`peserta_nama`, 
                                            `peserta_jenis_kelamin`, 
                                            `peserta_tmp_tgl_lahir`, 
                                            `peserta_agama`, 
                                            `peserta_alamat`, 
                                            `peserta_no_hp`, 
                                            `peserta_foto`, 
                                            `peserta_berkas`) 
                                            VALUES 
                                            (
                                                '$namaLengkap',
                                                '$jenisKelamin',
                                                '$tmpTglLahir',
                                                '$agama',
                                                '$alamat',
                                                '$noHp',
                                                '$gabungFoto',
                                                '$gabungBerkas'
                                            )";
        $conn->query($query);
        $idPersertaTerakhir = $conn->insert_id;

        $querySPK = "INSERT INTO `tb_kriteria`  (`peserta_id`, 
                                                `kriteria_1`, 
                                                `kriteria_2`, 
                                                `kriteria_3`, 
                                                `kriteria_4`, 
                                                `kriteria_5`, 
                                                `kriteria_6`) 
                                                VALUES 
                                                ('$idPersertaTerakhir',
                                                '$pendidikan',
                                                '$status',
                                                '$vBMI',
                                                '$vUmur',
                                                '$tato',
                                                '$cacat'
                                                )";
        return $conn->query($querySPK);
    }
    public function deletePeserta($id)
    {
        global $conn;
        $query = "DELETE FROM tb_peserta WHERE peserta_id = '$id'";
        $query_kriteria = "DELETE FROM tb_kriteria WHERE peserta_id =  '$id'";
        $conn->query($query_kriteria);
        return $conn->query($query);
    }

    public function getOnePeserta($id)
    {
        $query = $this->get("SELECT * FROM tb_peserta WHERE peserta_id = '$id'")[0];
        return $query;
    }
}
