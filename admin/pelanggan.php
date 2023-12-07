<style type="text/css">
<!--
.style5 {color: #CCCC00}
-->
</style>
<div id="forum">
  <div class="grid style5">    <span class="style5"><a href="<?php echo "?p=home";?>">Home</a>&raquo;    Pelangggan</span> </div>
</div>

<div align="center" id="frmreg2">
<fieldset class="style5">
Data Pelanggan
</fieldset>
</div>

<div id="frmreg2">
<fieldset>
<?php
include "koneksi.php";
$sqlm = mysqli_query($kon, "select * from pelanggan order by nama_pelanggan asc");
?>
<table width="100%" border="1" cellspacing="1" cellpadding="10">
  <tr>
    <td width="14%">No</td>
    <td width="14%">Data Akun</td>
    <td width="30%">Data Pelanggan</td>
    <td width="11%">Aksi</td>
  </tr>
<?php
$no=1;
  while($rm=mysqli_fetch_array($sqlm)){
  echo"<tr valign=top>
    <td><b>$no</td>
    <td><b>Username :$rm[usernamepel]<br>
		   Password :$rm[passwordpel]</td>
    <td><b>Nama          :$rm[nama_pelanggan]<br>
		   NoHp          :$rm[nohp]<br>
		   Alamat        :$rm[alamat]<br>
		   Jenis Kelamin :$rm[jk]</b></td>
    <td><a href='?p=pelangganedit&idpelanggan=$rm[idpelanggan]'><div class='btn btn-add'>UBAH</div></a><br>
		<a href='?p=pelanggandel&idpelanggan=$rm[idpelanggan]'><div class='btn btn-add'>HAPUS</div></a>
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
<marquee>
Sistem Informasi E-Commerce Des Bordir
</marquee>
</body>
</fieldset>
</div>
