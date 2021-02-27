<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>KRS Online</title>
    </head>
    <body>
        <?php
            include "menu_mahasiswa.html";
        ?>
    </body>
</html>
<?php
include 'config.php';
$db = new Database();
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Program Studi</th>
    </tr>
    <?php
    $no = 1;
    foreach($db->tampil_data() as $x){
        ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['nim']; ?></td>
        <td><?php echo $x['nama']; ?></td>
        <td><?php echo $x['tempat_lahir']; ?></td>
        <td><?php
            $tanggal_lahir = $x['tanggal_lahir'];
            $tanggal_lahir_ganti_format = date("d-m-Y", strtotime($tanggal_lahir));
            echo $tanggal_lahir_ganti_format;
        ?>
        </td>
        <td><?php echo $x['alamat']; ?></td>
        <td><?php echo $x['nama_prodi']; ?></td>
    </tr>
    <?php
    }
    ?>
</table>