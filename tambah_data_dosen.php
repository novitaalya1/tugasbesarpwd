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
              <h4 class="box-title">Form Tambah Data Dosen</h4>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
<form action="simpan_data_dosen.php" method="post";>
<div class="box-body">
    <div class="form-group">
        <label>NIM</label>
        <input class="form-control" type="text" name="nip">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input class="form-control" type="text" name="nama_dosen">
    </div>
    <div class="form-group">
        <label>Tempat Lahir</label>
        <input class="form-control" type="text" name="alamat">
    </div>
    <div class="box-footer">
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>

</form>
</body>