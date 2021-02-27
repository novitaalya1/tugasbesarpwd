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
<h3>Data KRS</h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Mahasiswa</th>
        <th>NIM</th>
        <th>Nama Kelas</th>
        <th>Nama Mata Kuliah</th>
        <th>Kode Mata Kuliah</th>
        <th>Tingkat</th>
        <th>Semester</th>
        <th>Nama Dosen Pengampu</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>
    <?php
    $no = 1;
    foreach($db->tampil_data_krs() as $x){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $x['nama']; ?></td>
            <td><?php echo $x['nim']; ?></td>
            <td><?php echo $x['nama_kelas']; ?></td>
            <td><?php echo $x['nama_mata_kuliah']; ?></td>
            <td><?php echo $x['kode_mata_kuliah']; ?></td>
            <td><?php echo $x['tingkat']; ?></td>
            <td><?php echo $x['smt']; ?></td>
            <td><?php echo $x['nama_dosen']; ?></td>
            <td><a href="edit_data_krs.php?id=<?php echo $x['nim']; ?>">Edit</td>
            <td><a href="hapus_data_krs.php?id=<?php echo $x['nim']; ?>">Hapus</td>
        </tr>
        <?php
    }
    ?>
</table>