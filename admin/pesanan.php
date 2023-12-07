<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>">Home</a> &raquo;
  <span class="style1">Pesanan Barang</span>  </div>
</div>


<div id="frmreg2">
<fieldset>
<?php
include "koneksi.php";
$sqlm = mysqli_query($kon, "select * from pesan_barang order by tgl_pesan desc");
?>
<table width="100%" border="1" cellspacing="1" cellpadding="10">
  <tr>
  	<td width="23%">Tanggal Pesan</td>
    <td width="11%">Id Pelanggan</td>
	<td width="25%">Kota</td>
	<td width="25%">Alamat</td>
    <td width="25%">Barang</td>
    <td width="13%">Jumlah</td>
    <td width="16%">Total</td>
    <td width="12%">Aksi</td>
  </tr>
<?php
  while($rm=mysqli_fetch_array($sqlm)){
  echo"<tr valign=top>
  	<td><b>$rm[tgl_pesan]<br></td>
    <td><b>$rm[idpelanggan]</td>
	<td><b>$rm[kota]</td>
	<td><b>$rm[alamat]</td>
    <td>Nama Barang :<b>$rm[nama_barang]<br></td>
    <td><b>$rm[jumlah]</b><br></td>
    <td><b>$rm[total]<br></td>
    <td>
		<a href='?p=pesanan_barangdel&idpesanan=$rm[idpesanan]'>HAPUS</a>
		</td>
  </tr>";
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