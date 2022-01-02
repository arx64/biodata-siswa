<?php
error_reporting(0);
session_start();
$dbs = new mysqli("localhost", "root", "", "datasiswa-db");
$id = mysqli_real_escape_string($dbs, $_REQUEST['id']);
if (empty($_SESSION['username'])) {
    header("Location: index.php?err=no_session");
  } else {
  //$dbs = new mysqli("localhost", "root", "", "datasiswa-db");
  $q = $dbs->query("DELETE FROM db_siswa WHERE id=$id");
  $ref = $_SERVER['HTTP_REFERER'];
  if ($q == 1) {
     header("Location: $ref&err=sukses");
  } else {
      header("Location: $ref&err=gagal");
  }
}
  ?>