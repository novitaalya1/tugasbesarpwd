
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
              <h4 class="box-title">Form Tambah Data Mata Kuliah</h4>
            </div>
        <!-- /.box-header -->
    <!-- form start -->
    <form action="simpan_data_mata_kuliah.php" method="post";>
    <div class="box-body">

        <div class="form-group">
            <label>Kode</label>
            <input class="form-control" type="text" name="kode_mata_kuliah">
        </div>
        <div class="form-group">
            <label>Nama Mata Kuliah</label>
            <input class="form-control" type="text" name="nama_mata_kuliah">
        </div>
        <div class="form-group">
            <label>Tingkat</label>
            <input class="form-control" type="integer" name="tingkat">
        </div>
        <div class="form-group">
            <label>Semester</label>
            <input class="form-control" type="integer" name="smt">
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>

    </form>
</body>