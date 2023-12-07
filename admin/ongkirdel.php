<?php
include "koneksi.php";

$sql = mysqli_query($kon, "delete from ongkirr where idkota='$_GET[idongkir]'");

if($sql){
    echo "<script>alert( 'Data Berhasil Dihapus..!Data Ongkir Berhasil Dihapus..!' )</script>";
  }else{
    echo "Gagal Menghapus";
  }
  echo "<meta http-equiv='Refresh'content='1;URL=?p=ongkir'>";
?>
