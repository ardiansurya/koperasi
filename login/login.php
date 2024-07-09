<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$koneksi = mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"koperasi_new" );
$query = "SELECT username, password, nama, hak_akses FROM `login` WHERE username = ?";
$statement = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($statement, 's', $username);
mysqli_stmt_execute($statement);
mysqli_stmt_bind_result($statement, $username_result, $password_result, $nama_result, $hak_akses_result);
mysqli_stmt_fetch($statement);

if ($username == $username_result && $password == $password_result) {
    $_SESSION['username'] = $username_result;
    $_SESSION['nama'] = $nama_result;
    $_SESSION['hak_akses'] = $hak_akses_result;
    if ($hak_akses_result == 'Admin') {
        header("location:../home-admin.php");
    } else if ($hak_akses_result == "Member") {
        header("location:../home-member.php");
    }
} else {
    ?>
    <script language="JavaScript">
    alert('Username atau password tidak sesuai. Silahkan diulang lagi');
    document.location='../index.php';
    </script>
    <?php
}


