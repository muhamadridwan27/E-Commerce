<style type="text/css">
  <!--
  .style1 {
    color: #FF0000
  }

  .style2 {
    color: #CCCC00
  }

  .style3 {
    color: #FFFFFF
  }
  -->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home"; ?>" class="style2">Home</a> <span class="style3">&raquo;</span>
    <span class="style2">Pesanan Barang</span>
  </div>
</div>


<div id="frmreg2">
  <fieldset>
    <?php
    include "koneksi.php";
    $sqlm = mysqli_query($kon, "select * from pesan_barang,pelanggan where pesan_barang.idpelanggan = pelanggan.idpelanggan order by tgl_pesan desc");
    ?>
    <table width="100%" border="1" cellspacing="1" cellpadding="10">
      <tr>
        <td width="23%">Tanggal Pesan</td>
        <td width="11%">Nama Pelanggan</td>
        <td width="25%">Nama Barang</td>
        <td width="13%">Jumlah</td>
        <td width="13%">Kota</td>

        <td width="16%">Total</td>
        <td width="16%">Foto Bukti Pembayaran</td>
        <td width="12%">Aksi</td>
      </tr>
      <?php
      while ($rm = mysqli_fetch_array($sqlm)) {
        echo "<tr valign=top>
  	<td><b>$rm[tgl_pesan]<br></td>
    <td><b>$rm[nama_pelanggan]</td>
    <td><b>$rm[nama_barang]<br></td>
    <td><b>$rm[jumlah]</b><br></td>
	<td><b>$rm[kota]</b><br></td>

    <td><b>$rm[total]<br></td>
	<td><img src='../pembayaran/$rm[foto]'width='144px'></td>
    <td>
		<a href='?p=pesanan_barangdel&idpesanan=$rm[idpesanan]'><div class='btn btn-add'>HAPUS</div></a>
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
      <marquee>
        Sistem Informasi E-Commerce Des Bordir
      </marquee>
    </body>
  </fieldset>
</div>