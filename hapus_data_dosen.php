<?php
include('config.php');
$db = new Database();
if(isset($_GET['id'])){
    $nip = $_GET['id'];
    $data_nip = $db->nip_dosen($nip);
    $nip = $data_nip[0]['nip'];
    $db->hapus_data_dosen($nip);
    header('Location: tampilkan_data_dosen.php');
}
else
{
    header('Location: tampilkan_data_dosen.php');
}
?>