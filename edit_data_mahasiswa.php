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
        $nim = $_GET['id'];
        $data_nim = $db->nim_mahasiswa($nim);
    }
    else{
        header('Location: tampilkan_data.php');
    }
    ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">Form Edit Data Mahasiswa</h4>
        </div>
                    <!-- /.card-header -->
 <form action="simpan_edit_data_mahasiswa.php" method="post">
    <input type="hidden" name="nim" value="<?php echo $data_nim[0]['nim']; ?>"/>
    <div class="box-body">
        <div class="form-group">
            <label>NIM</label>
            <input class="form-control" type="text" name="nim" value="<?php echo $data_nim[0]['nim']; ?>" disabled>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input class="form-control" type="text" name="nama" value="<?php echo $data_nim[0]['nama']; ?>">
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input class="form-control" type="text" name="tempat_lahir" value="<?php echo $data_nim[0]['tempat_lahir']; ?>">
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input class="form-control" type="date" name="tanggal_lahir" value="<?php echo $data_nim[0]['tanggal_lahir']; ?>">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat"><?php echo $data_nim[0]['alamat']; ?></textarea>
        </div>
        <div class="form-group">
            <label>Program Studi</label>
                <select class="form-control" name="kode_prodi">
                <?php
                $no = 1;
                $kode_prodi = $data_nim[0]['kode_prodi'];
                foreach($db->tampil_data_prodi() as $x){
                    ?>
                    </option>
                    <?php
                    echo "<option value =".$data_nim[0]['kode_prodi'];
                    if($x['kode_prodi']==$kode_prodi){echo " selected=selected";}
                    echo ">".$x['nama_prodi']."</option>";
                ?>
                <?php
                }
                ?>
                </select>
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