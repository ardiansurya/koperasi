<body bgcolor="#EEF2F7">
    <?php
        include "koneksi.php";
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $tgl_traksaksi = $_POST['thn_traksaksi']."-". $_POST['bln_traksaksi']."-". $_POST['tgl_traksaksi'];
        $jml_traksaksi = $_POST['jml_traksaksi'];
        if(empty($_POST[$jml_traksaksi])) {
            ?>
            <script language="JavaScript">
                alert('Masukkan Jumlah traksaksi!');
                document.location='home-admin.php?page=list-pinjaman';
            </script>
            <?php
        } else{
            $input = "INSERT INTO pinjaman (username, nama, tgl_traksaksi, jml_traksaksi) VALUES ('$username','$nama','$tgl_traksaksi','$jml_traksaksi')";
            $query_input = mysql_query($input);
            $update = "UPDATE member SET pinjaman=pinjaman + $jml_traksaksi WHERE username='$username'";
            $query_update = mysql_query($update);
                if($query_update){
                    ?>
                    <script language="JavaScript">
                        alert('Data Pinjaman Berhasil Diinput!');
                        document.location='home-admin.php?page=list-pinjaman';
                    </script>
            <?php    
            }else{
                echo "Pengambilan Gagal Diinput, Silahkan diulangi!";
                 }
        }
        mysql_close($Open);
        ?>
</body>