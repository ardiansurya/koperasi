<?php
    include "koneksi.php";
    if(isset($_GET['username'])){
        $username=$_GET['username'];
        //read filename that want to be delete
        $query="SELECT * FROM member WHERE username='$username'";
        $hasil=mysqli_query($Open, $query);
        $data=mysqli_fetch_array($hasil);
    }
    else{
        die("Error. username not found!");
    }
    //delete process
    if(!empty($username)&&$username!=""){
        $hapus="DELETE FROM member WHERE username='$username'";
        $sql=mysqli_query($Open, $hapus);
        if($sql){
            ?>
            <script language="JavaScript">
                alert('Username<?=$username?> Berhasil dihapus!');
                document.location='home-admin.php?page=form-view-member';
            </script>
            <?php
        } else{
            echo "<h2><font color=red><center>Data gagal dihapus!</center></font></h2>";
        }
    }
    mysqli_close($Open);
?>