<?php 
session_start();
 
include 'koneksi_login.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($koneksi_login,"select * from admin where username='$username' and password='$password'");
 
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:menu_admin.php");
}else{
	header("location:index.php?pesan=gagal");
}