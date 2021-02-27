<?php
    include('config.php');
    $koneksi = new database();
    $koneksi->tambah_data_dosen($_POST['nip'],$_POST['nama_dosen'],$_POST['alamat']);
    header('location:tampilkan_data_dosen.php');
?>