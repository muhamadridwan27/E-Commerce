<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>">Home</a> &raquo;
    <a href="<?php echo "?p=sunting";?>">Daftar Sunting</a> &raquo;
  <span class="style1">Input Sunting</span>  </div>
</div>

<div id="frmreg">
<fieldset>
<h3>Input Sunting</h3>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<div class="dh6">
  <p><strong>Kode Barang</strong><br> 
    <label>
    <input name="kdbrg" type="text" id="kdbrg" />
    </label>
  </p>
  <p>
    <label></label>
    <label></label>
  </p>
  </div>
<div class="dh6">
  <p><strong>Nama Sunting</strong><br />
    <label>
    <input name="nama_barang" type="text" id="nama_barang"/>
    </label>
</p>
<p><strong>Jenis Barang</strong><br />
    <label>
    <input name="jnsbrg" type="text" id="jnsbrg"/>
    </label>
</p>	
  <p><strong>Harga</strong><br> 
    <label>
      <input name="harga" type="text" id="harga"/>
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
if($_POST["simpan"]){
  include "koneksi.php";
  $nmfoto  = $_FILES["foto"]["name"];
  $lokfoto = $_FILES["foto"]["tmp_name"];
  if(!empty($lokfoto)){
    move_uploaded_file($lokfoto, "../foto/$nmfoto");
  }
	$sqlm = mysqli_query($kon, "insert into barang (kdbrg, jnsbrg, nama_barang, harga, foto) values ('$_POST[kdbrg]', '$_POST[jnsbrg]', '$_POST[nama_barang]','$_POST[harga]','$nmfoto')");
	if($sqlm){
	  echo "Data Berhasil Disimpan";
	  echo "<META HTTP-EQUIV='Refresh' Content='1.5; URL=?p=sunting'>";
	}else{
	  echo "Gagal Menyimpan";
	  echo "<META HTTP-EQUIV='Refresh' Content='1.5; URL=?p=sunting'>";
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
