<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>">Home</a> &raquo;
    <a href="<?php echo "?p=pesanan_booking";?>">Pesanan dan Riwayat Pemesanan</a> &raquo;
  <span class="style1">Riwayat Pemesanan</span>  </div>
</div>

<div id="frmreg2">
<fieldset>
<?php
include "koneksi.php";
$sqlm = mysqli_query($kon, "select * from pesan_servis order by tgl_membooking desc");
?>
<table width="100%" border="1" cellspacing="1" cellpadding="10">
  <tr>
  	<td width="23%">Tanggal Membooking</td>
    <td width="11%">Id Pelanggan</td>
    <td width="25%">Jenis Servis</td>
    <td width="16%">Tanggal Booking</td>
    <td width="12%">Aksi</td>
  </tr>
<?php
  while($rm=mysqli_fetch_array($sqlm)){
  echo"<tr valign=top>
    <td><b>$rm[tgl_membooking]<br></td>
	<td><b>$rm[idpelanggan]</td>
    <td>Jenis Servis :<b>$rm[jenis_servis]<br></td>
    <td><b>$rm[tgl_booking]<br></td>
    <td>
		<a href='?p=booking_servisdel&idbooking=$rm[idbooking]'>HAPUS</a>
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