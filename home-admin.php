<?php
    session_start();
    $hak_akses = $_SESSION['hak_akses'];
    if(!isset($_SESSION['username']) && $hak_akses!="Admin"){
        ?>
        <script language="JavaScript">
            alert('Anda Bukan Admin. Silahkan Login kembali!');
            document.location='index.php';
        </script>
        <?php
    }
?>
<html>
    <head>
        <title>Koperasi Simpan Pinjam | Admin</title>
        <link href="style.css"  rel="stylesheet" type="text/css">
    </head>
    <body>
        <table width="964" border="0" align="center" cellpadding="0" cellspacing="0"    >
            <tr>
                <td width="964" bgcolor="#B0C4DE"><img src="image/header.png" width="964" height="130">
                </td>
            </tr>
        </table>
        <table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td><hr></td>
            </tr>
        </table>
        <table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr bgcolor="#F8F8FF" height="32">
                <td width="10">&nbsp;</td>
                <td width="944">
                    <div class="nav">
                        <ul>
                            <li><a href="home-admin.php?page=form-view-member" title="Member"><u>M</u>ember</a></li>
                            <li><a href="home-admin.php?page=form-view-pinjaman" title="Pinjaman"><u>P</u>injaman</a></li>
                            <li><a href="home-admin.php?page=form-view-tabungan" title="Tabungan"><u>T</u>abungan</a></li>
                            <li><a href="home-admin.php?page=form-view-version" title="View"><u>V</u>iew</a></li>
                            <li><a href="login/logout.php" title="Log Out"><u>L</u>og out</a></li>
                        </ul>
                    </div>
                </td>
                <td width="10">&nbsp;</td>
            </tr>
        </table>
        <table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#F8F8FF">
            <td>&nbsp;</td>
        </tr>
        </table>
        <table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr bgcolor="#F8F8FF">
                <td width="10">&nbsp;</td>
                <td rowspan="4" valign="top">
                    <table width="938" height="auto" bgcolor="white" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="938" valign="top">
                                <?php
                                $page = (isset($_GET['page']))? $_GET['page']:"main";
                                switch($page){
                                    case 'form-input-member' : include "form-input-member.php"; break;
                                    case 'form-view-member' : include "form-view-member.php"; break;
                                    case 'form-edit-member' : include "form-edit-member.php"; break;
                                    case 'hapus-member' : include "login/hapus-member.php"; break;
                                    case 'input-member' : include "input-member.php"; break;
                                    case 'list-pinjaman' : include "list-pinjaman.php"; break;
                                    case 'form-input-member' : include "form-input-member.php"; break;
                                    case 'form-input-bayar' : include "form-input-bayar.php"; break;
                                    case 'form-input-tabungan' : include "form-input-tabungan.php"; break;
                                    case 'input-bayar' : include "input-bayar.php"; break;
                                    case 'input-pinjaman' : include "input-pinjaman.php"; break;
                                    case 'view-detail-member' : include "view-detail-member.php"; break;
                                    case 'form-ambil-tabungan' : include "form-ambil-tabungan.php"; break;
                                    case 'ambil-tabungan' : include "ambil-tabungan.php"; break;
                                    case 'pro-version' : include "pro-version.php"; break;
                                    case 'main';
                                    default : include 'about-login.php';
                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="10"></td>
            </tr>
        </table>
        <table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr bgcolor="#F8F8FF">
                <td>&nbsp;</td>
            </tr>
        </table>
        <table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr bgcolor="#B0C4DE">
                <td height="36" colspan="5" bgcolor="#B0C4DE"><div align="right" style="margin:0 12px 0 0;"><font color="#000">Copyright &copy; 2015. By RajaPhp.Com</font><br></div></td>
            </tr>
        </table>
        <div align="center"></div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $insertion_successful = true;
        
            if ($insertion_successful) {
                echo "<p>Member added successfully!</p>";
            } else {
                echo "<p>Failed to add member. Please try again.</p>";
            }
        }
        ?>
    </body>
</html>