<body>
    <?php
    include "index2.php";
    ?>
        <?php
    include 'config.php';
    $db = new Database();
    if(isset($_GET['id'])){
        $nim = $_GET['id'];
        $data_nim = $db->tampil_data_mhs_krs($nim);
    }
    else{
        header('Location: lihat_krs_mahasiswa.php');
    }
    ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">Form Edit Data KRS</h4>
        </div>
                    <!-- /.card-header -->
<form action="simpan_edit_data_krs.php" method="post">
<input type="hidden" name="nim" value="<?php echo $data_nim[0]['nim']; ?>"/>
<div class="box-body">
        <div class="form-group">
            <label>NIM</label>
            <input class="form-control" type="text" name="nim" value="<?php echo $data_nim[0]['nim']; ?>" disabled>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input class="form-control" type="text" name="nama_mhs" value="<?php echo $data_nim[0]['nama_mhs']; ?>">
        </div>
        <div class="form-group">
            <label>Mata Kuliah</label>
            <input class="form-control" type="text" name="matkul" value="<?php echo $data_nim[0]['matkul']; ?>">
        </div>
        <div class="form-group">
            <label>Semester</label>
            <input class="form-control" type="text" name="smt" value="<?php echo $data_nim[0]['smt']; ?>">
        </div>
        <div class="form-group">
            <label>Dosen</label>
            <input class="form-control" type="text" name="dosen" value="<?php echo $data_nim[0]['dosen']; ?>">
        </div>
        <div class="box-footer">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
</form>
</div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- jQuery -->
<script src="admin_lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="admin_lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="admin_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="admin_lte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin_lte/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>