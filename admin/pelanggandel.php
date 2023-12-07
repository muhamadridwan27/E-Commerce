<?php
include "koneksi.php";

$sql = mysqli_query($kon, "delete from pelanggan where idpelanggan='$_GET[idpelanggan]'");

if($sql){
    echo "Profile Berhasil Dihapus";
  }else{
    echo "Gagal Menghapus";
  }
  echo "<meta http-equiv='Refresh'content='0.5;URL=?p=profilpel'>";
?>
