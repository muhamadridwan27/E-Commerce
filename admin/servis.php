<style type="text/css">
<!--
.style1 {color: #FF0000}
.style4 {color: #FFFFFF}
-->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>">Home</a> &raquo;
  <span class="style1">Servis</span>  </div>
</div>

<div align="center" id="frmreg2">
<fieldset>
<div class="btn-add">
<a href="<?php echo "?p=transaksi_servis";?>">Transaksi <br>Servis</a>
</div>
</fieldset>
</div>

<?php
$a=$_POST['TuneUp'];
$b=$_POST['Oli'];
$c=$_POST['Busi'];
$d=$_POST['Filter'];
$e=$_POST['Rem'];
$total=$a+$b+$c+$d+$e;
?>

<div id="frmreg">
<fieldset>
<h3>Servis</h3>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<div class="dh6">
  <p>
    <input name="idpelanggan" type="hidden" id="idpelanggan" value="<?php echo "$rm[idpelanggan]";?>" />
  </p>
  <table width="611" border="5" cellspacing="1" cellpadding="10" align="center">
    <tr>
      <td colspan="3"><div align="center"><strong>Jenis Servis</strong></div></td>
      </tr>
    <tr>
      <td width="360"><strong>Tune Up</strong></td>
      <td width="194"><div align="center"><strong>
        <label>
        <input name="TuneUp" type="checkbox" id="TuneUp" value="500000" />
        </label>
        </strong></div>        </td>
    </tr>
    <tr>
      <td><strong>Ganti Oli dan Filter Oli</strong></td>
      <td><div align="center"><strong>
        <label>
        <input name="Oli" type="checkbox" id="Oli" value="500000" />
        </label>
      </strong></div></td>
    </tr>
    <tr>
      <td><strong>Ganti Busi</strong></td>
      <td><div align="center"><strong>
        <label>
        <input name="Busi" type="checkbox" id="Busi" value="125000" />
        </label>
      </strong></div></td>
    </tr>
    
    <tr>
      <td><strong>Ganti Filter Udara / AC</strong></td>
      <td><div align="center"><strong>
        <label>
        <input name="Filter" type="checkbox" id="Filter" value="100000" />
        </label>
      </strong></div></td>
    </tr>
    <tr>
      <td><strong>Ganti Kampas Rem</strong></td>
      <td><div align="center"><strong>
        <label>
        <input name="Rem" type="checkbox" id="Rem" value="250000" />
        </label>
      </strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <label>
        <input type="submit" name="hitung" id="hitung" value="Hitung" />
        </label>
      </div></td>
      </tr>
    <tr>
      <td>Total</td>
      <td>Rp.
        <label>
        <input type="number" name="total" id="total" value="<?php echo $total ?>"/>
        </label></td>
    </tr>
     
    <tr>
      <td colspan="3"><div align="center"><strong>
        <input name="simpan" type="submit" id="simpan" value="Simpan" />
      </strong></div></td>
      </tr>
  </table>
  <p class="style1">Note : <span class="style4">Harga Dapat Berubah Sesuai Tipe Mobil dan Tipe Suku Cadang yang di Ganti</span></p>
  <p align="left">
    <label></label>
  </p>
  </div>
</form>

<?php
if(isset($_POST["simpan"])){
  include "koneksi.php";
  $jenis_servis = implode(', ', $_POST[jenis_servis]);
	$sqlm = mysqli_query($kon, "insert into servis (total, tanggal_servis) values ('$_POST[total]', NOW())");
	if($sqlm){
	  echo "<script>alert('Data Berhasil DIsimpan')</script>";
	  echo "<META HTTP-EQUIV='Refresh' Content='0.5; URL=?p=transaksi_servis'>";
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
