<?php
include 'koneksi.php';
$jenis_servis = $_GET['jenis_servis'];
$sql = mysqli_query($kon, "select * from kat_servis where jenis_servis='$jenis_servis'");
$barang = mysqli_fetch_array($sql);
$data = array(
            'harga'        =>  $barang['harga']);
 echo json_encode($data);

?>