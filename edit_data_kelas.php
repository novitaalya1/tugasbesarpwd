<?php
include 'config.php';
$db = new Database();
if(isset($_GET['id'])){
}
else{
    header('Location: tampilkan_kelas.php');
}
?>
<h3>Edit Data Kelas</h3>
<form action="simpan_edit_data_kelas.php" method="post">
<input type="hidden" name="id" value="<?php echo $data_id[0]['id']; ?>"/>
<table>
    <tr>
        <td>Nama Kelas</td>
        <td><input type="text" name="nama_kelas" value="<?php echo $data_id[0]['nama_kelas']; ?>"></td>
    </tr>
    <tr>
        <td>ID Matkul</td>
        <td><input type="integer" name="id_mata_kuliah" value="<?php echo $data_id[0]['id_mata_kuliah']; ?>"></td>
    </tr>
    <tr>
        <td>ID Dosen</td>
        <td><input type="integer" name="id_dosen" value="<?php echo $data_id[0]['id_dosen']; ?>"></td>
    </tr>
    <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
</form>