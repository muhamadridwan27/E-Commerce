<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>">Home</a> &raquo;
  <span class="style1">Ongkir</span>  </div>
</div>

<div id="frmreg">
<fieldset>
<h3>Input Ongkir Kota</h3>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<div class="dh6">
  <p><strong>Nama Kota</strong><br> 
    <label>
    <input name="kota" type="text" id="kota" />
    </label>
  </p>
  <p>
    <label></label>
    <label></label>
  </p>
  </div>
<div class="dh6">		
  <p><strong>Harga Ongkir</strong><br> 
    <label>
      <input name="ongkir" type="text" id="ongkir"/>
      </label>
  </p>
  <p>
  <div class="btn-add">
    <label>
    <strong>
    <input name="simpan" type="submit" id="simpan" value="SIMPAN">
    </strong></label>
  </p>
  </div>
  </div>
</form>


<?php
if($_POST["simpan"]){
  include "koneksi.php";
	$sqlm = mysqli_query($kon, "insert into ongkirr (kota, ongkir) values ('$_POST[kota]','$_POST[ongkir]')");
	if($sqlm){
	  echo "Berhasil Menyimpan";
	  echo "<META HTTP-EQUIV='Refresh' Content='1.5; URL=?p=kota_ongkir'>";
	}else{
	  echo "Gagal Menyimpan";
	  echo "<META HTTP-EQUIV='Refresh' Content='1.5; URL=?p=kota_ongkir'>";
	}
	
}
?>
</fieldset>
</div>

<div id="frmreg2">
<fieldset>
<body>
<marquee>Selamat Datang Pada Website <span class="style1">Venny Pelaminan</span>
</marquee>
</body>
</fieldset>
</div>
