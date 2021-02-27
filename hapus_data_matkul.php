<?php
include('config.php');
$db = new Database();
if(isset($_GET['id'])){
    $kode_mata_kuliah = $_GET['id'];
    $data_mk = $db->kode_matkul($kode_mata_kuliah);
    $kode_mata_kuliah = $data_mk[0]['kode_mata_kuliah'];
    $db->hapus_data_matkul($kode_mata_kuliah);
    header('Location: tampilkan_data_mata_kuliah.php');
}
else
{
    header('Location: tampilkan_data_mata_kuliah.php');
}
?>