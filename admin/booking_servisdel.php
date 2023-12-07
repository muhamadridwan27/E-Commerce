<?php
include "koneksi.php";

$sql = mysqli_query($kon, "delete from pesan_servis where idbooking='$_GET[idbooking]'");

if($sql){
    echo "Data Berhasil Dihapus";
  }else{
    echo "Gagal Menghapus";
  }
  echo "<meta http-equiv='Refresh'content='0.5;URL=?p=booking_servis'>";
?>
