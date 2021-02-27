<?php
    include('config.php');
    $koneksi = new database();
    $koneksi->tambah_data_krs($_POST['nim_krs'],$_POST['nama_mhs'],
        $_POST['matkul'],$_POST['smt'],$_POST['dosen']);
    header('location:lihat_krs_mahasiswa.php');
?>
