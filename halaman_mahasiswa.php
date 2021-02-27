<?php
include "config.php";
$db = new Database();
$username = $_POST["username"];
$password = $_POST["password"];

foreach($db->login($username, $password) as $x){
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    $akses_id = $x['akses_id'];
    //memeriksa user login sebagai admin atau pengunjung
    if($akses_id == '2'){
        ?>
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <title>KRS Online</title>
                </head>
                <body>
                    <?php
                        include "menu_mahasiswa.html";
                    ?>
                </body>
            </html>
            <?php
    }
    else{
        echo "Anda belum login";
        header("Location: login.php");
    }
}
?>