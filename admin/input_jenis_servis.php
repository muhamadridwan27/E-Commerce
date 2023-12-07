<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>">Home</a> &raquo;
    <a href="<?php echo "?p=jenis_servis";?>">Servis</a> &raquo;
  <span class="style1">Input Jenis Servis</span>  </div>
</div>

<div id="frmreg">
<fieldset>
<h3>Form Input Jenis Servis</h3>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<div class="dh6">
  <p><strong>Nama Servis</strong><br> 
    <label>
    <input name="jenis_servis" type="text" id="jenis_servis"/>
    </label>
  </p>
  <p>
    <label></label>
    <label></label>
  </p>
  </div>
<div class="dh6">
  <p>
    <label></label>
    <strong>Harga</strong><br> 
    <label>
      <input name="harga" type="text" id="harga"/>
      </label>
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
	$sqlm = mysqli_query($kon, "insert into kat_servis (jenis_servis, harga) values ('$_POST[jenis_servis]', '$_POST[harga]')");
	if($sqlm){
	  echo "Data Berhasil Disimpan";
	  echo "<META HTTP-EQUIV='Refresh' Content='1.5; URL=?p=jenis_servis'>";
	}else{
	  echo "Gagal Menyimpan";
	}
	
}
?>
</fieldset>
</div>

<div id="frmreg2">
<fieldset>
<body>
<marquee>Sistem Informasi Pelayanan Jasa Servis dan Penjualan Bengkel <span class="style1">Jaya Motor</span>
</marquee>
</body>
</fieldset>
</div>
