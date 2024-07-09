<div  style="border:0; padding:10px; width:924px; height:auto;">
<center><font color="orange" size="2"><b>View All Member</b></font></center><br/>
<input type="button" value="Tambah Member" onclick=location.href="home-admin.php?page=form-input-member" title="Add Member"><br/><br/>
<table width="924" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FF6600">
        <th width="5%">No</th>&nbsp;
        <th width="15%" height="42">USERNAME</th>&nbsp;
        <th width="28%">NAMA</th>&nbsp;
        <th width="15%">NIK</th>&nbsp;
        <th width="20%">NO HP</th>&nbsp;
        <th width="17%">Action</th>&nbsp;
    </tr>
    <?php
        include "koneksi.php";
        $Cari="SELECT * FROM member";
        $Tampil=mysqli_query($Open,$Cari);
        $nomer=0;
        while($hasil=mysqli_fetch_array($Tampil)){
              $nomer++;
              $username=stripcslashes($hasil['username']);
              $nama=stripcslashes($hasil['nama']);
              $nik=stripcslashes($hasil['nik']);
              $no_hp=stripcslashes($hasil['no_hp']);
        {
    ?>
    <tr align="center" bgcolor="#DFE6EF">
        <td>&nbsp;</td>
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
        <td><?=$nik?><div align="center"></div></td>
        <td><?=$no_hp?><div align="center"></div></td>
        <td bgcolor="#EEF2F7"><div align="center"><a href="home-admin.php?page=view-detail-member&username=<?=$username?>">Detail</a>|<a href="home-admin.php?page=form-edit-member&username=<?$username?>">Edit</a>| <a href="home-admin.php?page=hapus-member&username=<?=$username?>">Hapus</a></td>
    </tr>
    <tr align="center" bgcolor="#DFE6EF">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <?php
        }}
    mysqli_close($Open);
    ?>
</table>
</div>