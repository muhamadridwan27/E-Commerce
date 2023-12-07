<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../style.css" type="text/css">
<title>Des Bordir</title>

<?php
	include "menuhome.php";
	if (isset($_GET['p'])) {
	if($_GET["p"]=="logout"){
		include "logout.php";
	}else if($_GET["p"]=="barang"){
		include "barang.php";
	}else if($_GET["p"]=="profilpel"){
		include "pelanggan.php";
	}else if($_GET["p"]=="pelanggandel"){
		include "pelanggandel.php";
	}else if($_GET["p"]=="pelangganedit"){
		include "pelangganedit.php";
	}else if($_GET["p"]=="barang_del"){
		include "barang_del.php";
	}else if($_GET["p"]=="barang_edit"){
		include "barang_edit.php";
	}else if($_GET["p"]=="input_barang"){
		include "input_barang.php";
	}else if($_GET["p"]=="aksesoris"){
		include "aksesoris.php";
	}else if($_GET["p"]=="aksesoris_edit"){
		include "aksesoris_edit.php";
	}else if($_GET["p"]=="aksesoris_del"){
		include "aksesoris_del.php";
	}else if($_GET["p"]=="jenis_aksesoris"){
		include "jenis_aksesoris.php";
	}else if($_GET["p"]=="input_aksesori"){
		include "input_aksesori.php";
	}else if($_GET["p"]=="sunting"){
		include "sunting.php";
	}else if($_GET["p"]=="sunting_edit"){
		include "sunting_edit.php";
	}else if($_GET["p"]=="sunting_del"){
		include "sunting_del.php";
	}else if($_GET["p"]=="jenis_sunting"){
		include "jenis_sunting.php";
	}else if($_GET["p"]=="input_sunting"){
		include "input_sunting.php";
	}else if($_GET["p"]=="penjualan"){
		include "penjualan.php";
	}else if($_GET["p"]=="penjualandel"){
		include "penjualandel.php";
	}else if($_GET["p"]=="aksesoris"){
		include "aksesoris.php";
	}else if($_GET["p"]=="transaksi_aksesoris"){
		include "transaksi_aksesoris.php";
	}else if($_GET["p"]=="transaksi_penjualan"){
		include "transaksi_penjualan.php";
	}else if($_GET["p"]=="pesanan"){
		include "pesanan.php";
	}else if($_GET["p"]=="pesanan_barang"){
		include "pesanan_barang.php";
	}else if($_GET["p"]=="booking_aksesoris"){
		include "booking_aksesoris.php";
	}else if($_GET["p"]=="pesanan_barangdel"){
		include "pesanan_barangdel.php";
	}else if($_GET["p"]=="booking_aksesorisdel"){
		include "booking_aksesorisdel.php";
	}else if($_GET["p"]=="laporan"){
		include "laporan.php";
	}else if($_GET["p"]=="laporan_bulan_penjualan"){
		include "laporan_bulan_penjualan.php";
	}else if($_GET["p"]=="tambah_stok"){
		include "tambah_stok.php";
	}else if($_GET["p"]=="laporan_tahun_penjualan"){
		include "laporan_tahun_penjualan.php";
	}else if($_GET["p"]=="ongkir"){
		include "ongkir.php";
	}else if($_GET["p"]=="ongkirdel"){
		include "ongkirdel.php";
	}else if($_GET["p"]=="ongkiredit"){
		include "ongkiredit.php";
	}else if($_GET["p"]=="tambah_ongkir"){
		include "tambah_ongkir.php";
	}else if($_GET["p"]=="cetak_faktur"){
		include "cetak_faktur.php";
	}}else{
		include "home.php";
	}

?>