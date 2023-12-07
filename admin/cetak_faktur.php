<script>
  window.print();
</script>


<?php
include "koneksi.php";
$idtransaksi = $_GET['idtransaksi'];
$sql = mysqli_query($kon, "select * from transaksi_penjualan where idtransaksi='$idtransaksi'");
$no = 1;
?>

<table align="center" width="280" height="221" border="1">
  <tr>
    <td align="center">
      <h3>TOKO <br>
        Des Bordir</h3>
      Alamat Pasar Atas LT.III No.110, Bukittinggi, Sumatra Barat<br>
      <hr>
      <?php
      $no = 1;
      while ($rm = mysqli_fetch_array($sql)) {
        echo "
      <br><center>Kode Transaksi  : PF-$rm[idtransaksi]<br>
      Nama Barang     : $rm[nama_barang]<br>
      Harga           : Rp. $rm[harga]<br>
	  Jumlah Beli     : $rm[jumlah] Pcs<br>
	  Kota Tujuan     : $rm[kota]<br>
	  Ongkos Kirim    : Rp. $rm[ongkir]<br>
	  <hr>
      Total           : Rp. $rm[total]<br> 
	  Jumlah Bayar    : Rp. $rm[jumlah_bayar]<br> 
	  Kembalian       : Rp. $rm[kembalian]<br> ";
        $no++;
      }
      ?>
      <hr>
      <br> Tanggal : <?php echo date('d - M - Y'); ?><br>
      Terima Kasih Karna Sudah Berbelanja Di Toko Kami<br>

    </td>
  </tr>
</table>