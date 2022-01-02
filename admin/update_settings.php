<?php
session_start();
if (empty($_SESSION['username'])) {
    header("Location: index.php?err=no_session");
  } else {
$sesi = $_SESSION['username'];
$dbs = new mysqli("localhost", "root", "", "datasiswa-db");
$username = $_REQUEST['username'];
$pass = md5($_REQUEST['pass']);
$cpass = md5($_REQUEST['cpass']);
if ($pass == $cpass) {
    //echo "PAss sama!";
    $query = "UPDATE db_login SET username = '$username', password = '$pass'";
    $result = $dbs->query("$query");
    if ($result == 1) {
        //$ref = $_SERVER['HTTP_REFERER'];
        //header("Location: $ref");
        echo "<script>alert('Berhasil Mengubah Username/Password!');window.history.go(-1)</script>";
    }
} else {
    echo "<script>alert('Password Tidak Sesuai!');window.history.go(-1)</script>";
    
}
  }
//$query = "UPDATE db_login SET username = '$username' WHERE db_login.id = 1;";
?>