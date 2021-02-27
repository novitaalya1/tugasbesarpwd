<?php
include('config.php');
$koneksi = new database();
$koneksi->tambah_data_krs($_POST['id_mahasiswa'],$_POST['id_kelas']);
header('location:tampilkan_krs.php');
?>