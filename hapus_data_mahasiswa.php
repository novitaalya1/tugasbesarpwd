<?php
include('config.php');
$db = new Database();
if(isset($_GET['id'])){
    $nim = $_GET['id'];
    $data_nim = $db->nim_mahasiswa($nim);
    $nim = $data_nim[0]['nim'];
    $db->hapus_data_mahasiswa($nim);
    header('Location: tampilkan_data.php');
}
else
{
    header('Location: tampilkan_data.php');
}
?>