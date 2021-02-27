<?php
include('config.php');
$koneksi = new Database();
$koneksi->edit_data_dosen($_POST['nip'], $_POST['nama_dosen'], $_POST['alamat']);
header('location:tampilkan_data_dosen.php');

?>