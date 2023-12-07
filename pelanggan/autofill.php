<?php
include 'koneksi.php';
$nama_barang = $_GET['nama_barang'];
$sql = mysqli_query($kon, "select * from barang where nama_barang='$nama_barang'");
$barang = mysqli_fetch_array($sql);
$data = array(
            'harga'        =>  $barang['harga']);
 echo json_encode($data);

?>