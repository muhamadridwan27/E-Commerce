<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style><div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>">Beranda</a> &raquo;
  <span class="style1">Penjualan</span>  </div>
</div>

<?php
$sqlm = mysqli_query($kon, "select * from barang where kdbrg='$_GET[kdbrg]'");
$rm = mysqli_fetch_array($sqlm);
?>

<div id="frmreg">
<fieldset>
<h3>Form Penjualan</h3>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<div class="dh6">
  <p><strong>Kode Barang</strong><br> 
    <label>
    <input name="kdbrg" type="text" id="kdbrg"/>
    </label>
  </div>
<div class="dh6">
  <p><strong>Nama Barang</strong><br />
    <label>
    <input name="nama_barang"  type="text" id="nama_barang" value="<?php echo"$rm[nama_barang]";?>"/>
    </label>
</p>
  <p><strong>Harga</strong><br />
      <label>
      <input name="harga" type="text" id="harga" value="<?php echo"$rm[harga]";?>"/>
      </label>
  </p>
  <p><strong>Jumlah</strong><br />
      <label>
      <input name="jumlah" type="text" id="jumlah"/>
        </label>
  </p>
  <p><strong>Total</strong><br />
    <label>
    <input name="total" type="text" id="total"/>
    </label>
</p>
  <p><br>
  </p>
  <p>
    <label>
    <strong>
    <input name="simpan" type="submit" id="simpan" value="SIMPAN">
    </strong></label>
  </p>
  </div>
</form>
  


<?php
if($_POST["simpan"]){
  include "koneksi.php";
	$sqlm = mysqli_query($kon, "insert into transaksi_penjualan (kdbrg, nama_barang, harga, jumlah, total) values ('$_POST[kdbrg]', '$_POST[nama_barang]', '$_POST[harga]','$_POST[jumlah]','$_POST[total]')");
	if($sqlm){
	  echo "Data Berhasil Disimpan";
	}else{
	  echo "Gagal Menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1.5; URL=?p=barang'>";
}
?>
</fieldset>
</div>

<div id="frmreg2">
<fieldset>
<body>
<marquee>Selamat Datang Pada Website Des Bordir</marquee>
</body>
</fieldset>
</div>
