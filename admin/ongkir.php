<style type="text/css">
<!--
.style2 {color: #CCCC00}
.style3 {color: #FFFFFF}
-->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>" class="style2">Home</a> <span class="style3">&raquo;</span>
    <span class="style2">Ongkir</span>  </div>
</div>
</div>

<div align="center" id="frmreg2">
<fieldset>
<div align="center">
<a href="<?php echo "?p=tambah_ongkir";?>"><div class='btn btn-add'>Tambah<br>Ongkir</div></a>
</div>
</fieldset>
</div>

<div id="frmreg2">
<fieldset>
<?php
include "koneksi.php";
$sqlm = mysqli_query($kon, "select * from ongkirr order by kota asc");
?>
<table width="100%" border="1" cellspacing="1" cellpadding="5">
  <tr>
    <td width="4%"><b>No</td>
    <td width="43%"><b>Kota</td>
    <td width="30%"><b>Ongkir</td>
    <td width="21%"><b>Aksi</td>
  </tr>
<?php
  $no=1;
  while($rm=mysqli_fetch_array($sqlm)){
  echo"<tr valign=top>
    <td><b>$no</td>
    <td><b>$rm[kota]</td>
    <td><b>Rp. $rm[ongkir]</b><br></td>
    <td><a href='?p=ongkiredit&idongkir=$rm[idkota]'><div class='btn btn-add'>UBAH</div></a>
		<a href='?p=ongkirdel&idongkir=$rm[idkota]'><div class='btn btn-add'>HAPUS</div></a>
		</td>
  </tr>";
  $no++;
  }
?>
</table>
</fieldset>
</div>

<div id="frmreg">
  <fieldset>
  <marquee>
    Sistem Informasi E-Commerce Des Bordir
  </marquee>
  </body>
  </fieldset>
</div>
