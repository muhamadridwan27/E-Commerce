<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>">Home</a> &raquo;
    <a href="<?php echo "?p=servis";?>">Servis</a> &raquo;
  <span class="style1">Jenis Servis</span>  </div>
</div>

<div id="frmreg2">
<fieldset>
<div align="center">
<div class="btn-add">
<div align="center"><a href="<?php echo "?p=input_jenis_servis";?>">Tambah Jenis <br>Servis</a>
</div>
</div>
</div>
</fieldset>
</div>

<div id="frmreg2">
<fieldset>
<?php
include "koneksi.php";
$sqlm = mysqli_query($kon, "select * from kat_servis");
?>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%">No</td>
    <td width="43%">Jenis Servis</td>
    <td width="30%">Harga</td>
    <td width="21%">Aksi</td>
  </tr>
<?php
  $no=1;
  while($rm=mysqli_fetch_array($sqlm)){
  echo"<tr valign=top>
    <td><b>$no</td>
    <td><b>$rm[jenis_servis]</td>
    <td><b>$rm[harga]</b><br></td>
    <td><a href='?p=mhsedit&id=$rm[id]'>UBAH</a><br>
		<a href='?p=mhsdel&id=$rm[id]'>HAPUS</a>
		</td>
  </tr>";
  $no++;
  }
?>
</table>
</fieldset>
</div>

<div id="frmreg2">
<fieldset>
<body>
<marquee>Selamat Datang Pada Website <span class="style1">Venny Pelaminan</span>
</marquee>
</body>
</fieldset>
</div>
