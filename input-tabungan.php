<body bgcolor="#EEF2F7">
    <?php
        include "koneksi.php";
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $tgl_tabungan = $_POST['thn_tabungan']."-". $_POST['bln_tabungan']."-". $_POST['tgl_tabungan'];
        $jml_traksaksi = $_POST['jml_tabungan'];
        if(empty($_POST[$jml_tabungan])) {
            ?>
            <script language="JavaScript">
                alert('Masukkan Jumlah tabungan!');
                document.location='home-admin.php?page=list-tabungan';
            </script>
            <?php
        } else{
            $input = "INSERT INTO tabungan (username, nama, tgl_tabungan, jml_tabungan) VALUES ('$username','$nama','$tgl_tabungan','$jml_tabungan')";
            $query_input = mysql_query($input);
            $update = "UPDATE member SET tabungan=tabungan + $jml_tabungan WHERE username='$username'";
            $query_update = mysql_query($update);
                if($query_update){
                    ?>
                    <script language="JavaScript">
                        alert('Data Pinjaman Berhasil Diinput!');
                        document.location='home-admin.php?page=list-tabungan';
                    </script>
            <?php    
            }else{
                echo "Tabungan Gagal Diinput, Silahkan diulangi!";
                 }
        }
        mysql_close($Open);
        ?>
</body>