<body bgcolor="#EEF2F7">
    <?php
        include "koneksi.php";
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $tgl_bayar = $_POST['thn_bayar']."-". $_POST['bln_bayar']."-". $_POST['tgl_bayar'];
        $jml_ambil = $_POST['jml_bayar'];
        if(empty($_POST[$jml_bayar])) {
            ?>
            <script language="JavaScript">
                alert('Masukkan Jumlah Bayar!');
                document.location='home-admin.php?page=list-pinjaman';
            </script>
            <?php
        } else{
            $input = "INSERT INTO bayar (username, nama, tgl_bayar, jml_bayar) VALUES ('$username','$nama','$tgl_bayar','$jml_bayar')";
            $query_input = mysql_query($input);
            $update = "UPDATE member SET pinjaman=pinjaman - $jml_bayar WHERE username='$username'";
            $query_update = mysql_query($update);
                if($query_update){
                    ?>
                    <script language="JavaScript">
                        alert('Data Bayar Berhasil Diinput!');
                        document.location='home-admin.php?page=list-pinjaman';
                    </script>
            <?php    
            }else{
                echo "Pembayaran Gagal Diinput, Silahkan diulangi!";
                 }
        }
        mysql_close($Open);
        ?>
</body>