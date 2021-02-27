    <head>
        <title>KRS Online</title>
    </head>
    <body>
        <?php
            include "index2.php";
        ?>

<?php
include 'config.php';
$db = new Database();
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">Form Tambah Data Mahasiswa</h4>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
<form action="simpan_data_mahasiswa.php" method="post";>
<div class="box-body">
    <div class="form-group">
        <label>NIM</label>
        <input class="form-control" type="text" name="nim">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input class="form-control" type="text" name="nama">
    </div>
    <div class="form-group">
        <label>Tempat Lahir</label>
        <input class="form-control" type="text" name="tempat_lahir">
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input class="form-control" type="date" name="tanggal_lahir">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat"></textarea>
    </div>
    <div class="form-group">
        <label>Program Studi</label>
        <div>
            <select class="form-control" name="kode_prodi">
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
        </div>
    </div>
</div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                </div>

</form>
</body>