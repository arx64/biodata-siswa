<?php
session_start();
session_destroy();
echo '<script>alert("Sukses Logout!");</script>';
header("Location: index.php");
?>