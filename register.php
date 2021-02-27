<?php 
include 'config.php';
$database = new Database();
if(isset($_POST['register']))
{
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($database->register($nama,$username,$password))
    {
      header('location:login.php');
    }
}

?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KRS Online | Register</title>
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

<body class="hold-transition register-page">

  <!-- Begin page content -->
  <main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Register Form</h1>
    <p class="lead">Silahkan Daftarkan Identitas Anda</p>
    <hr/>
    <form method="post" action="">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama" placeholder="Nama lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <a href="login.php" class="btn btn-success">Login</a>
      <button type="submit" class="btn btn-primary" name="register">Register</button>
    </div>
  </div>
</form>
  </div>
</main>

<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">KRS Online @2021</span>
  </div>
</footer>
<!-- jQuery -->
<script src="admin_lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin_lte/dist/js/adminlte.min.js"></script>
</body>