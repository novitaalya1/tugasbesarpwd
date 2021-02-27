<?php
include 'config.php';
$db = new Database();
?>
<h3>Tampilkan Mahasiswa Berdasarkan Prodi</h3>
<form action="" method="post">
<select name="kode_prodi">
        <option value="--"></option>
        <?php
        $no = 1;
        foreach($db->tampil_data_prodi() as $x){
            echo '<option value="'.$x['kode_prodi'].'">'.$x['nama_prodi'].'</option>';
            ?>
        <?php
        }
        ?>
</select>
<input type="submit" name="SubmitButton" value="Tampilkan"/>
</form>
<?php
if(isset($_POST['SubmitButton'])){
    $kode_prodi = $_POST['kode_prodi'];
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
    foreach($db->tampil_data_mhs_berdasar_prodi($kode_prodi)as $x){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $x['nim']; ?></td>
            <td><?php echo $x['nama'];?></td>
            <td><?php echo $x['tempat_lahir'];?></td>
            <td><?php
            $tanggal_lahir = $x['tanggal_lahir'];
            $tanggal_lahir_ganti_format = date("d-m-Y", strtotime($tanggal_lahir));
            echo $tanggal_lahir_ganti_format;
            ?>
            </td>

        <td><?php echo $x['alamat'];?></td>
        <td><?php echo $x['nama_prodi'];?></td>
        </tr>
    <?php
    }
    ?>
    </table>
    <?php
}
?>