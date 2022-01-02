<?php
session_start();
if (empty($_SESSION['username'])) {
    header("Location: index.php?err=no_session");
  } else {
$nama = $_REQUEST['nama'];
$tl = $_REQUEST['tl'];
$ttl = $_REQUEST['ttl'];
$sql = new mysqli("localhost", "root", "", "datasiswa-db");
$q = "INSERT INTO `db_siswa` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`) VALUES (NULL, '$nama', '$tl', '$ttl')";
$res = $sql->query($q);
//print_r($res);
if ($res == 1) {
    echo "<script>alert('Berhasil Menambahkan Data!');window.history.go(-1)</script>";
} else {
    echo "<script>alert('Gagal Menambahkan Data!');window.history.go(-1)</script>";
}
  }