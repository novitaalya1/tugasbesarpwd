<?php
    include('config.php');
    $koneksi = new database();
    $koneksi->tambah_data($_POST['nim'],$_POST['nama'],
        $_POST['tempat_lahir'],$_POST['tanggal_lahir'],$_POST['alamat'],$_POST['kode_prodi']);
    header('location:tampilkan_data.php');
?>
