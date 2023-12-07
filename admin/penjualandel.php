<?php
include "koneksi.php";

$sql = mysqli_query($kon, "delete from transaksi_penjualan where idtransaksi='$_GET[idtransaksi]'");

if($sql){
    echo "<script>alert( 'Data Berhasil Dihapus..!Data Penjualan Berhasil Dihapus..!' )</script>";
  }else{
    echo "Gagal Menghapus";
  }
  echo "<meta http-equiv='Refresh'content='2.5;URL=?p=transaksi_penjualan'>";
?>
