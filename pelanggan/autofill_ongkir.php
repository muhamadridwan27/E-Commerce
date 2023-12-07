<?php
include 'koneksi.php';
$kota = $_GET['kota'];
$sql = mysqli_query($kon, "select * from ongkirr where kota='$kota'");
$barang = mysqli_fetch_array($sql);
$data = array(
            'ongkir'        =>  $barang['ongkir']);
 echo json_encode($data);
