<?php 
	session_start(); 
	include "koneksi.php";
	// if(!empty($_SESSION["userm"]){
	// $sqlm = mysqli_query($kon, "select * from pelanggan where usernamepel='$_SESSION[userm]'");
	// $rm = mysqli_fetch_array($sqlm);
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css">
<title>Des Bordir</title>

<?php

	include "menuhome.php";
	if (isset($_GET['p'])) {
	if($_GET["p"]=="login"){
		include "login.php";
	}else if($_GET["p"]=="registrasi"){
		include "registrasi.php";
	}else if($_GET["p"]=="visimisi"){
		include "visimisi.php";
	}else if($_GET["p"]=="sejarah"){
		include "sejarah.php";
	}else if($_GET["p"]=="carapesan"){
		include "carapesan.php";
	}else if($_GET["p"]=="login_karyawan"){
		include "login_karyawan.php";
	}else if($_GET["p"]=="detailbarang"){
		include "detailbarang.php";
	}else if($_GET["p"]=="pesan"){
		include "pesan_barang.php";
	}
}else{
		include "menubwh.php";
	}
// }else{

// }
?>