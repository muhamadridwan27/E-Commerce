<?php
include "koneksi.php";

$sql = mysqli_query($kon, "delete from barang where idbarang='$_GET[idbarang]'");

if($sql){
    echo "<script>alert( 'Berhasil Menghapus Data Barang..!' )</script>";
  }else{
    echo "Gagal Menghapus";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1.5; URL=?p=barang'>";
?>
