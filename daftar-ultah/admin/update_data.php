<?php
error_reporting(0);
session_start();
if (empty($_SESSION['username'])) {
    header("Location: index.php?err=no_session");
  }
$dbs = new mysqli("localhost", "root", "", "datasiswa-db");
//mysqli_select_db("db_siswa");
$id = htmlentities(htmlspecialchars(stripcslashes(stripslashes(number_format(mysqli_real_escape_string($dbs, $_POST["id"]))))));
$nama = htmlspecialchars(stripcslashes(mysqli_real_escape_string($dbs, $_POST['nama'])));
$tempat_lahir = htmlspecialchars(stripcslashes(mysqli_real_escape_string($dbs, $_POST['tempat_lahir'])));
$tanggal_lahir = htmlspecialchars(stripcslashes(mysqli_real_escape_string($dbs, $_POST['tanggal_lahir'])));
$query = "UPDATE db_siswa SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir' WHERE id='$id'";
$result = $dbs->query("$query");
//print_r($result);
if ($result == 1) {
    # code...
    //echo "<script>alert('Sukses edit data!')</script>";
    $ref = $_SERVER['HTTP_REFERER'];
    header("Location: $ref");
} else {
    echo "gagal!";
}