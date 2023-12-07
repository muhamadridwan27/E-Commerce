<?php
include "koneksi.php";

$sql = mysqli_query($kon, "delete from pesan_barang where idpesanan='$_GET[idpesanan]'");

if($sql){
    echo "<script>alert('Barang Telah Dihapus Dari Troli Anda..!')</script>";
  }else{
    echo "Gagal Menghapus";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=troli&idpelanggan=$rm[idpelanggan]'>";
?>
