<div  style="border:0; padding:10px; width:924px; height:auto;">
<center><font color="orange" size="2"><b>List Pinjaman Member</b></font></center><br/>
<table width="924" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FF6600">
        <th width="5%">No</td>&nbsp;
        <th width="15%" height="42">USERNAME</td>&nbsp;
        <th width="40%">NAMA</td>&nbsp;
        <th width="20%">TOTAL PINJAM</td>&nbsp;
        <th width="20%">Action</td>&nbsp;
    </tr>
    <?php
        include "koneksi.php";
        $Cari="SELECT * FROM member'";
        $Tampil=mysql_query($Cari);
        $nomer=0;
        while($hasil=mysql_fetch_array($Tampil)){
              $username=stripcslashes($hasil['username']);
              $nama=stripcslashes($hasil['nama']);
              $pinjaman=stripcslashes($hasil['pinjaman']);
        {
            $nomer++;
    ?>
    <tr align="center" bgcolor="#DFE6EF">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr align="center">
        <td height="32"><?=$nomer?><div align="center"></div></td>
        <td><?=$username?><div align="center"></div></td>
        <td><?=$nama?><div align="center"></div></td>
        <td><?=$pinjaman?><div align="center"></div></td>
        <td bgcolor="#EEF2F7"><div align="center"><a href="home-admin.php?page=form-input-pinjaman&username=<?=$username?>">Pinjam</a>|<a href="home-admin.php?page=input-bayar&username=<?$username?>">Bayar</a></div></td>
    </tr>
    <tr align="center" bgcolor="#DFE6EF">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <?php
        }}
    mysql_close($Open);
    ?>
</table>
</div>