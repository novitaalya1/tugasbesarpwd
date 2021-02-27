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
              <h4 class="box-title">Form Tambah Data KRS</h4>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
<form action="simpan_data_krs.php" method="post";>
<div class="box-body">
    <div class="form-group">
        <label>NIM</label>
        <input class="form-control" type="text" name="nim">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input class="form-control" type="text" name="nama_mhs">
    </div>
    <div class="form-group">
        <label>Mata Kuliah</label>
        <input class="form-control" type="text" name="matkul">
    </div>
    <div class="form-group">
        <label>Semester</label>
        <input class="form-control" type="text" name="smt">
    </div>
    <div class="form-group">
        <label>Dosen</label>
        <input class="form-control" type="text" name="dosen">
    </div>
    <div class="box-footer">
    <button type="submit" class="btn btn-primary">Tambah</button>
     </div>
</form>
</body>