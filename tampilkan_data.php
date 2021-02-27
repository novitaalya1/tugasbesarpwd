<?php
include 'config.php';
$db = new Database();
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KRS Online | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin_lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin_lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php
    include "index2.php";
    ?>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-tittle">Data Mahasiswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="box-header">
                        <a href="tambah_data_mahasiswa.php">
                        <input type="button" value="Tambah" class="btn btn-primary" name="">
                        </a>
                    </div>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Program Studi</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach($db->tampil_data() as $x){
                                    ?>
                                    <tr>
                                    <td><?php echo $x['nim']; ?></td>
                                    <td><?php echo $x['nama']; ?></td>
                                    <td><?php echo $x['tempat_lahir']; ?></td>
                                    <td><?php
                                    $tanggal_lahir = $x['tanggal_lahir'];
                                    $tanggal_lahir_ganti_format = date("d-m-Y", strtotime($tanggal_lahir));
                                    echo $tanggal_lahir_ganti_format;
                                    ?></td>
                                    <td><?php echo $x['alamat']; ?></td>
                                    <td><?php echo $x['nama_prodi']; ?></td>
                    
                                    <td><a href="edit_data_mahasiswa.php?id=<?php echo$x['nim']; ?>">
                                    <button type="button" class="btn btn-warning" name=""> <i class="fa fa-pencil"></i> Edit</button></a></td>
                                    <td><a onclick="return confirm('Anda yakin?')" href="hapus_data_mahasiswa.php?id=<?php echo $x['nim']; ?>">
                                    <button type="button" class="btn btn-danger" name=""> <i class="fa fa-trash"></i> Hapus</button></a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
 </div>
<!-- /.content-wrapper -->


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
