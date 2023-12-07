<?php
include "koneksi.php";
$sqlm = mysqli_query($kon, "select * from ongkirr where idkota='$_GET[idongkir]'");
$rm = mysqli_fetch_array($sqlm);
?>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>">Home</a> &raquo;
    <a href="<?php echo "?p=ongkir";?>">ongkir</a> &raquo;
  <span class="style1">Edit Ongkir</span>  </div>
</div>


<div id="frmreg">
<fieldset>
<h3>Edit Ongkir</h3>
<form name="form1" method="post" action="" enctype="multipart/form-data">
 <input name="idongkir" type="hidden" id="idongkir" value="<?php echo"$rm[idkota]";?>" />
<div class="dh6">Kota<br> 
    <label></label>
  <p>
    <label></label>
    <label></label>
    <input name="kota" type="text" id="kota" value="<?php echo"$rm[kota]";?>"/>
  </p>
  </div>
<div class="dh6">
  <p>
    <label></label>
    <strong>Ongkir</strong>
    <br> 
    <label>
    <input name="ongkir" type="text" id="ongkir" value="<?php echo"$rm[ongkir]";?>"/>
    </label>
  </p>
  <p>
    <label>
    <strong>
    <input name="ubah" type="submit" id="ubah" value="EDIT">
    </strong></label>
  </p>
  </div>
</form>

<?php
if(isset($_POST["ubah"])){
  include "koneksi.php";
  
  
	$sqlm = mysqli_query($kon, "update ongkirr set kota='$_POST[kota]',ongkir='$_POST[ongkir]' where idkota='$_POST[idongkir]'");
	if($sqlm){
	  echo "<script>alert( 'Ongkir Berhasil Diedit..!' )</script>";
	  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=ongkir'>";
	}
	}
?>
</fieldset>
</div>

<div id="frmreg2">
<fieldset>
<body>
<marquee>Sistem Informasi E-Commerce <span class="style1">Pina Funiture</span>
</marquee>
</body>
</fieldset>
</div>
