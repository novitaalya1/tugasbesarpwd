<head>
  <title>KRS Online | Edit</title>
</head>
<body>
    <?php
    include "index2.php";
    ?>
        <?php
        include 'config.php';
        $db = new Database();
            if(isset($_GET['id'])){
                $kode_mata_kuliah = $_GET['id'];
                $data_mk = $db->kode_matkul($kode_mata_kuliah);}
            else{
                header('Location: tampilkan_data_mata_kuliah.php');}
        ?>
        <!-- Main content -->
        <section class="content">
        <div class="row">
            <div class="col-12">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">Form Edit Data Mata Kuliah</h4>
        </div>
        <!-- /.card-header -->

    <form action="simpan_edit_data_matkul.php" method="post">
    <input type="hidden" name="kode_mata_kuliah" value="<?php echo $data_mk[0]['kode_mata_kuliah']; ?>"/>
    <div class="box-body">
        <div class="form-group">
            <label>Kode Mata Kuliah</label>
            <input class="form-control" type="text" name="kode_mata_kuliah" value="<?php echo $data_mk[0]['kode_mata_kuliah']; ?>" >
        </div>
        <div class="form-group">
            <label>Nama Mata Kuliah</label>
            <input class="form-control" type="text" name="nama_mata_kuliah" value="<?php echo $data_mk[0]['nama_mata_kuliah']; ?>" >
        </div>
        <div class="form-group">
            <label>Tingkat</label>
            <input class="form-control" type="integer" name="tingkat" value="<?php echo $data_mk[0]['tingkat']; ?>">
        </div>
        <div class="form-group">
            <label>Semester</label>
            <input class="form-control" type="integer" name="smt" value="<?php echo $data_mk[0]['smt']; ?>">
        </div>
        <div class="box-footer">
            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
    </table>
    </form>
</body>
