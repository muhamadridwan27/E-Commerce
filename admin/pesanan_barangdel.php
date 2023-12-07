<?php
include "koneksi.php";

$sql = mysqli_query($kon, "delete from pesan_barang where idpesanan='$_GET[idpesanan]'");

if($sql){
    echo "<script>alert( 'Data Berhasil Dihapus..!Data Pesanan Barang Berhasil Dihapus..!' )</script>";
  }else{
    echo "Gagal Menghapus";
  }
  echo "<meta http-equiv='Refresh'content='2.5;URL=?p=pesanan_barang'>";
?>
