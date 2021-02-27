<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KRS Online | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin_lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin_lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
<div class="login-box">
  <div class="login-logo">
    Admin
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
      <p class="login-box-msg">Log In untuk masuk ke Halaman Admin</p>

      <form action="validasi_login.php" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="username" placeholder="Username">
              <span class="glyphicon plyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password">
              <span class="glyphicon plyphicon-user form-control-feedback"></span>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </div><br>
          <div class="col-4">
            <a href="register.php" type="submit" class="btn btn-success btn-block">Register</a>
          </div>
        </div>
      </form>
    </div>
    <!-- /.login-box-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="admin_lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin_lte/dist/js/adminlte.min.js"></script>

</body>
</html>
