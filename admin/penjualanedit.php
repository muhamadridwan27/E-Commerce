<style type="text/css">
<!--
.style1 {font-weight: bold}
.style2 {
	color: #FF0000;
	font-style: italic;
}
-->
</style>
<?php
include "koneksi.php";
$sqlm = mysqli_query($kon, "select * from transaksi_penjualan where idtransaksi='$_GET[idtransaksi]'");
$rm = mysqli_fetch_array($sqlm);
?>

<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>">Home</a> &raquo;
    <a href="<?php echo "?p=penjualan";?>">Penjualan</a> &raquo;
    <a href="<?php echo "?p=transaksi_penjualan";?>">Transaksi Penjualan</a> &raquo;
  <span class="style1">Edit Transaksi Penjualan</span>  </div>
</div>

<div id="frmreg">
<fieldset>
<h3>Edit Transaksi Penjualan</h3>
<form name="form1" method="post" action="">
<div class="dh6">
  <p><strong>Nama Barang</strong><br />
    <label>
    <input name="nama_barang"  type="text" id="nama_barang" onkeyup="isi_otomatis()" value="<?php echo"$rm[nama_barang]";?>"/>
    </label>
  <p><strong>Harga</strong><br />
      <label>
      <input name="harga" type="text" id="harga" readonly="readonly" value="<?php echo"$rm[harga]";?>"/>
      </label>
  </p>
  <p> 
</div>
<div class="dh6">
  <p><strong>Jumlah</strong><br>
      <label>
      <input name="jumlah" type="number" id="jumlah" value="<?php echo"$rm[jumlah]";?>"/>
        </label>
      <br />
      <label></label>
  <p><strong>Total</strong><br />
    <label>
    <input name="total" type="text" id="total" readonly="readonly" value="<?php echo"$rm[total]";?>"/>
    </label>
  <p>
    <label>
    <strong>
    <input name="simpan" type="submit" id="simpan" value="SIMPAN">
    </strong></label>
  </p>
  </div>
</form>
  
		<script src="jquery.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
              var  nama_barang=$("#nama_barang").val();
			  $.ajax({
			  url:'autofill.php',
			  data:'nama_barang='+nama_barang,
			  }).success(function(data){
			  	var json=data,
				obj=JSON.parse(json);
				$("#harga").val(obj.harga);
			  });
            }
			</script>
            
            <script>
			$("#harga").keyup(function(){
				tot=$("#harga").val()*$("#jumlah").val();
				$("#total").val(tot);
				});
		
			$("#jumlah").keyup(function(){
				tot=$("#harga").val()*$("#jumlah").val();
				$("#total").val(tot);
				});
        </script>
        

<?php
if($_POST["simpan"]){
  include "koneksi.php";
	$sqlm=mysqli_query($kon, "update transaksi_penjualan set kdbrg='$_POST[kdbrg]',nama_barang='$_POST[nama_barang]',harga='$_POST[harga]',jumlah='$_POST[jumlah]',total='$_POST[total]' where idtransaksi='$_POST[idtransaksi]'");																																																																				
	if($sqlm){
	echo "<script>swal ( 'Data Berhasil Diubah..!', 'Data Penjualan Berhasil Diubah..!',  'success' )</script>";
	echo "<meta http-equiv='Refresh'content='2.5;URL=?p=transaksi_penjualan'>";
	}else{
	echo "Data Gagal Diedit";
	}
	}
	?>

</fieldset>
</div>

<div id="frmreg2">
<fieldset>
<body>
<marquee>Sistem Informasi Pelayanan Jasa Servis dan Penjualan Bengkel <span class="style2">Jaya Motor</span>
</marquee>
</body>
</fieldset>
</div>
