<body bgcolor="#EEF2F7">
    <?php
        include "koneksi.php";
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $tgl_ambil = $_POST['thn_ambil']."-". $_POST['bln_ambil']."-". $_POST['tgl_ambil'];
        $jml_ambil = $_POST['jml_ambil'];
        if(empty($_POST[$jml_ambil])) {
            ?>
            <script language="JavaScript">
                alert('Masukkan Jumlah Pengambilan!');
                document.location='home-admin.php?page=list-tabungan';
            </script>
            <?php
        } else{
            $input = "INSERT INTO ambil_tabungan (username, nama, tgl_ambil, jml_ambil) VALUES ('$username','$nama','$tgl_ambil','$jml_ambil')";
            $query_input = mysql_query($input);
            $update = "UPDATE member SET tabungan=tabungan - $jml_ambil WHERE username='$username'";
            $query_update = mysql_query($update);
                if($query_update){
                    ?>
                    <script language="JavaScript">
                        alert('Data Pengambilan Tabungan Berhasil Diinput!');
                        document.location='home-admin.php?page=list-tabungan';
                    </script>
            <?php    
            }else{
                echo "Pengambilan Gagal Diinput, Silahkan diulangi!";
                 }
        }
        mysql_close($Open);
        ?>
</body>