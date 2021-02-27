<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>KRS Online</title>
    </head>
    <body>
        <?php
            include "menu_admin.html";
        ?>
    </body>
</html>
<?php
include 'config.php';
$db = new Database();
?>
<h3>Data Kelas</h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Kelas</th>
        <th>ID Mata Kuliah</th>
        <th>ID Dosen</th>
    </tr>
<?php
$no=1;
foreach($db->tampil_data_kelas()as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['nama_kelas'];?></td>
        <td><?php echo $x['id_mata_kuliah'];?></td>
        <td><?php echo $x['id_dosen'];?></td>
    </tr>
    <?php
}
?>
</table>