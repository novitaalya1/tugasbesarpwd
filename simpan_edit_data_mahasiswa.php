<?php
include('config.php');
$koneksi = new Database();
$koneksi->edit_data_mahasiswa($_POST['nim'],$_POST['nama'],
            $_POST['tempat_lahir'], $_POST['tanggal_lahir'],$_POST['alamat'],
            $_POST['kode_prodi']);
header('location:tampilkan_data.php');

?>