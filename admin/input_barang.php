<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #CCCC00}
.style3 {color: #FFFFFF}
-->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>" class="style2">Home</a> <span class="style3">&raquo;</span>
    <a hre f="<?php echo "?p=barang";?>" class="style2">Daftar Barang</a> <span class="style3">&raquo;</span>
  <span class="style2">Input Barang</span>  </div>
</div>

<div id="frmreg">
<fieldset>
<h3>Input Barang</h3>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<div class="dh6">
  <p><strong>Nama Barang</strong><br />
    <label>
    <input name="nama_barang" type="text" id="nama_barang"/>
    </label>
</div>
<div class="dh6">
  <p><strong>Harga</strong><br> 
    <label>
      <input name="harga" type="text" id="harga"/>
      </label>
  </p>
  <p><strong>Stok Barang</strong><br>
    <label>
    <input type="number" name="stokbrg" id="stokbrg" />
    </label>
    <strong>Pcs</strong></p>
  <p><strong>Detail Barang</strong><br />
    <label>
    <textarea name="detailbrg" id="detailbrg"></textarea>
    </label>
</p>
  <p><strong>Foto</strong></p>
  <p>
    <label>
    <input type="file" name="foto" id="foto" />
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
if(isset($_POST["simpan"])){
  include "koneksi.php"; 
  $nmfoto  = $_FILES["foto"]["name"];
  $lokfoto = $_FILES["foto"]["tmp_name"];
  if(!empty($lokfoto)){
    move_uploaded_file($lokfoto, "../foto/$nmfoto");
  }
  
	$sqlm = mysqli_query($kon, "insert into barang (nama_barang, harga, detailbrg, stokbrg, foto) values ('$_POST[nama_barang]','$_POST[harga]','$_POST[detailbrg]','$_POST[stokbrg]','$nmfoto')");
	if($sqlm){
	  echo "<script>alert('Data Berhasil Disimpan..!Berhasil Menambah Barang..!')</script>";
	  echo "<META HTTP-EQUIV='Refresh' Content='2.5; URL=?p=barang'>";
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
<marquee>
Sistem Informasi E-Commerce Des Bordir
</marquee>
</body>
</fieldset>
</div>
