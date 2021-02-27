<?php
include('config.php');
$koneksi = new Database();
$koneksi->edit_data_mata_kuliah($_POST['kode_mata_kuliah'], $_POST['nama_mata_kuliah'], $_POST['tingkat'], $_POST['smt']);
header('location:tampilkan_data_mata_kuliah.php');

?>