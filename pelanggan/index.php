<?php 
	session_start(); 
	include "koneksi.php";
	$sqlm = mysqli_query($kon, "select * from pelanggan where usernamepel='$_SESSION[userm]'");
	$rm = mysqli_fetch_array($sqlm);
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../style.css" type="text/css">
<title>Des Bordir</title>

<?php

if(!empty($_SESSION["userm"]) and !empty($_SESSION["passm"])){

	include "menuhome.php";
	if (isset($_GET['p'])) {
	if($_GET["p"]=="login"){
		include "login.php";
	}elseif($_GET["p"]=="logout"){
		include "logout.php";
	}elseif($_GET["p"]=="profile"){
		include "profile.php";
	}elseif($_GET["p"]=="registrasi"){
		include "registrasi.php";
	}elseif($_GET["p"]=="login_karyawan"){
		include "login_karyawan.php";
	}elseif($_GET["p"]=="pemesanan"){
		include "booking_servis.php";
	}elseif($_GET["p"]=="profiledit"){
		include "profiledit.php";
	}elseif($_GET["p"]=="profiledel"){
		include "profiledel.php";
	}elseif($_GET["p"]=="detailbarang"){
		include "detailbarang.php";
	}elseif($_GET["p"]=="pemesanan"){
		include "pemesanan.php";
	}elseif($_GET["p"]=="pembayaran"){
		include "pembayaran.php";
	}elseif($_GET["p"]=="trolidel"){
		include "trolidel.php";
	}elseif($_GET["p"]=="troli"){
		include "troli.php";
	}elseif($_GET["p"]=="riwayat_servis"){
		include "riwayat_servis.php";
	}elseif($_GET["p"]=="pembayaran"){
		include "pembayaran.php";
	}elseif($_GET["p"]=="pesan_pembayaran"){
		include "pesan_pembayaran.php";
	}
}else{
		include "pesan_barang.php";
	}
}
?>