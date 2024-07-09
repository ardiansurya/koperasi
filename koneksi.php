<?php

$Open = mysqli_connect("localhost", "root","",);
    if(!$Open){
        die("Koneksi Ke Database Gagal");
    } else {
        echo "Koneksi Berhasil";
    }

$Koneksi = mysqli_select_db($Open ,"koperasi_new");
    if(!$Koneksi){
        die("Koneksi Ke Database Gagal");
    }
 
?>
