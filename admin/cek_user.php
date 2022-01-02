<?php
session_start();
//session_destroy();
$mysqli = new mysqli("localhost", "root", "", "datasiswa-db");
$username = mysqli_real_escape_string($mysqli, $_REQUEST['username']);
$password = md5($_REQUEST["password"]);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$query = "SELECT * FROM db_login WHERE username='$username' AND password='$password'";
$result = $mysqli->query($query);
//print_r($result->num_rows);
if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row["username"];
    echo "<script>alert('Sukses Login!')</script>";
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Gagal Login!')</script>";
    header("Location: index.php?err=failed");
}
?>