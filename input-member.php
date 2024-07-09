<div style="border:0; padding:10px; width:860px; height:400;">
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Submit']) && $_POST['Submit'] == "Input"){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $tgl_lahir = $_POST['tgl_lahir']."-". $_POST['bln_lahir']."-". $_POST['thn_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $pekerjaan = $_POST['pekerjaan'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        
        $tabungan = isset($_POST['tabungan']) ? $_POST['tabungan'] : null;
        $pinjaman = isset($_POST['pinjaman']) ? $_POST['pinjaman'] : null;
    
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['nama']) || empty($_POST['nik'])) {
        ?>
        <script language="JavaScript">
            alert('Data Harap Dilengkapi');
            document.location='home-admin.php?page=form-input-member';
        </script>
        <?php
    } else {
        include "koneksi.php";
        
        // Check if username already exists
        $check_query = "SELECT username FROM member WHERE username='$username'";
        $check_result = mysqli_query($Open, $check_query);
        
        if (mysqli_num_rows($check_result) > 0) {
            ?>
            <script language="JavaScript">
                alert('Username sudah dipakai!, silahkan ganti username yang lain');
                document.location='home-admin.php?page=form-input-member';
            </script>
            <?php
        } else {
            // Insert data into member table
            $insert_query1 = "INSERT INTO member VALUES ('$username', '$password', '$nama', '$nik', '$tgl_lahir', '$jenis_kelamin', '$pekerjaan', '$alamat', '$email', '$no_hp','$tabungan', '$pinjaman')";
            $result1 = mysqli_query($Open, $insert_query1);
            
            // Insert data into login table
            $insert_query2 = "INSERT INTO login (username, nama, password, hak_akses)  VALUES ('$username', '$nama', '$password', 'member')";
            $result2 = mysqli_query($Open, $insert_query2);
            
            // Check if both insertions were successful
            if ($result1 && $result2) {
                ?>
                <Script language="JavaScript">
                    alert('Input Data Member Berhasil!');
                    document.location='home-admin.php?page=form-view-member';
                </Script>
                <?php
            } else {
                echo "Input Gagal!";
            }
        }
        mysqli_close($Open);
    }
}
?>

</div>