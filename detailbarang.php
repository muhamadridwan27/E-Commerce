<style type="text/css">
<!--
.style13 {color: #FFFF00}
.style14 {color: #FFFFFF}
-->
</style>


<div id="forum">
  <div class="grid">
	<a href="<?php echo "?p=pesan";?>" class="style14">Pesan Barang</a> &raquo;
  <span class="style13">Detail Barang</span> &raquo;   </div>
</div>

<div id="frmbelanja">
<fieldset class="style14">
<h3>DETAIL BARANG</h3>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<input name="idpelanggan" type="hidden" id="idpelanggan" value="<?php echo "$rm[idpelanggan]";?>" />
<input name="idbarang" type="hidden" id="idbarang" value="<?php echo "$_GET[idbarang]";?>" />
    <p>
      <?php
  include "koneksi.php";
	$sqlk = mysqli_query($kon, "select * from barang where idbarang='$_GET[idbarang]'");
  while($rk=mysqli_fetch_array($sqlk)){
  echo"
    <img src='foto/$rk[foto]'width='675px'>
	<p></p>
	<b><h2>$rk[nama_barang]</h2></b>
	Detail            :<b>$rk[detail_barang]</b><br>
  ";
  }
?>
    </p>
    <p>
      <input name="simpan" type="submit" id="simpan" value="BELI">
  </p>
  </form>

<?php
if($_POST["simpan"]){
	  echo "<script>alert('Silahkan Daftar Jika ingin Melakukan Pemesanan')</script>";
	  echo "<META HTTP-EQUIV='Refresh' Content='0.5; URL=?p=registrasi'>";
}
?>
</fieldset>
</div>