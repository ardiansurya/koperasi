<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['nama']);
session_destroy();
header("location:../index.php");
?>