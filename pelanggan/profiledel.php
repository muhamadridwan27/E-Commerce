<?php
include "koneksi.php";

$sql = mysqli_query($kon, "delete from pelanggan where usernamepel='$_GET[usernamepel]'");

if($sql){
    echo "Profile Berhasil Dihapus";
	header("location:../index.php");
  }else{
    echo "Gagal Menghapus";
  }
?>
