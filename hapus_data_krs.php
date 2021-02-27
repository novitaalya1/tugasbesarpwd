<?php
include('config.php');
$db = new Database();
if(isset($_GET['id'])){
    $nim = $_GET['id'];
    $data_nim = $db->nim_data_krs($nim);
    $nim = $data_nim[0]['nim'];
    $db->hapus_data_krs($nim);
    header('Location: lihat_krs_mahasiswa.php');
}
else
{
    header('Location: lihat_krs_mahasiswa.php');
}
?>