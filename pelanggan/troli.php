<style type="text/css">
  <!--
  .style1 {
    color: #FF0000
  }

  .style2 {
    font-size: 16px;
    color: #CCCC00;
  }

  .style3 {
    color: #CCCC00
  }

  .style4 {
    color: #FFFFFF
  }
  -->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home"; ?>" class="style3">Home</a> <span class="style4">&raquo;</span>
    <span class="style3">Troli Belanja</span>
  </div>
</div>


<div align="center" id="frmreg2">
  <fieldset class="style2">
    Troli Belanja
  </fieldset>
</div>

<div id="frmreg2">
  <fieldset>
    <?php
    include "koneksi.php";
    $idpelanggan = $_GET['idpelanggan'];
    $sqlml = mysqli_query($kon, "select * from pesan_barang where idpelanggan='$idpelanggan' order by tgl_pesan");
    ?>
    <table width="100%" border="1" cellspacing="1" cellpadding="10">
      <tr>
        <td width="14%">Nama Barang</td>
        <td width="30%">Jumlah</td>
        <td width="30%">Kota</td>

        <td width="30%">Total Bayar</td>
        <td width="30%">Foto Bukti Pembayaran</td>
        <td width="11%">Aksi</td>
      </tr>
      <?php
      while ($rml = mysqli_fetch_array($sqlml)) {
        echo "<tr valign=top>
    <td><b>$rml[nama_barang]</td>
    <td><b>$rml[jumlah]</td>
	<td><b>$rml[kota]</td>
	
    <td><b>Rp. $rml[total]</b><br></td>
	<td><img src='../pembayaran/$rml[foto]'width='144px'></td>
    <td>
		<a href='?p=pembayaran&usernamepel=$rm[usernamepel]&idpesanan=$rml[idpesanan]'><div class='btn btn-add'>Bayar</div></a>
		<a href='?p=trolidel&idpesanan=$rml[idpesanan]'><div class='btn btn-add'>Hapus <br> Pesanan</div></a>
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
      <marquee>Selamat Datang Pada Website <span class="style2">Des Bordir</span>
      </marquee>
    </body>
  </fieldset>
</div>