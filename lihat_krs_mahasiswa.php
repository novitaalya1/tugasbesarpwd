<head>
        <title>KRS Online</title>
</head>
<body>
        <?php
            include "index2.php";
        ?>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="box-header">
                        <a href="tambah_krs.php">
                        <input type="button" value="Tambah" class="btn btn-primary" name="">
                        </a>
                    </div>

    <?php
    include 'config.php';
    $db = new Database();
    ?>
        <h3>Data KRS</h3>
    <table id="example1" class="table table-bordered table-striped">
                            <thead>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Mata Kuliah</th>
        <th>Semester</th>
        <th>Dosen Pengampu</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    foreach($db->tampil_data_mhs_krs() as $x){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $x['nim']; ?></td>
            <td><?php echo $x['nama_mhs']; ?></td>
            <td><?php echo $x['matkul']; ?></td>
            <td><?php echo $x['smt']; ?></td>
            <td><?php echo $x['dosen']; ?></td>
            <td><a href="edit_data_krs.php?id=<?php echo$x['nim']; ?>">
                <button type="button" class="btn btn-warning" name=""> <i class="fa fa-pencil"></i> Edit</button></a></td>
                <td><a onclick="return confirm('Anda yakin?')" href="hapus_data_krs.php?id=<?php echo $x['nim']; ?>">
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