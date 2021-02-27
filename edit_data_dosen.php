<body>
    <?php
    include "index2.php";
    ?>
        <?php
    include 'config.php';
    $db = new Database();
    if(isset($_GET['id'])){
        $nip = $_GET['id'];
        $data_nip = $db->nip_dosen($nip);
    }
    else{
        header('Location: tampilkan_data_dosen.php');
    }
    ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">Form Edit Data Dosen</h4>
        </div>
                    <!-- /.card-header -->
<form action="simpan_edit_data_dosen.php" method="post">
<input type="hidden" name="nip" value="<?php echo $data_nip[0]['nip']; ?>"/>
<div class="box-body">
        <div class="form-group">
            <label>NIP</label>
            <input class="form-control" type="text" name="nip" value="<?php echo $data_nip[0]['nip']; ?>" disabled>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input class="form-control" type="text" name="nama_dosen" value="<?php echo $data_nip[0]['nama_dosen']; ?>">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input class="form-control" type="text" name="alamat" value="<?php echo $data_nip[0]['alamat']; ?>">
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