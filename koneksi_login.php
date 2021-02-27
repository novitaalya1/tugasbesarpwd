<?php 
$koneksi_login = mysqli_connect("localhost","root","","job_sheet7");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>