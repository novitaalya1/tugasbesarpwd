<?php
session_start();
include "config.php";
if(isset($_SESSION['id_admin'])==0){
    echo '<script> alert ("Anda harus login terlebih dahulu!");
    window.location.href="login.php"</script>';
} else {
    ?>
<?php } ?>

