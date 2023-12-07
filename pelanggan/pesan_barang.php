<style type="text/css">
	<!--
	.style1 {
		font-weight: bold;
		color: #CCCC00;
	}

	.style2 {
		color: #FF0000;
		font-style: italic;
	}

	.style4 {
		color: #CCCC00
	}
	-->
</style>

<div id="forum">
	<div class="grid">
		<a href="<?php echo "?p=home"; ?>" class="style4">Home</a> &raquo;
		<span class="style1">Barang</span>
	</div>
</div>

<div id="frmreg4">
	<fieldset>
		<?php
		$sqlk = mysqli_query($kon, "select * from barang order by nama_barang asc");
		while ($rk = mysqli_fetch_array($sqlk)) {
			if (empty($rk["foto"])) {
				$icon = "../foto/user.jpg";
			} else {
				$icon = "../foto/$rk[foto]";
			}
			$sqlf = mysqli_query($kon, "select * from barang where idbrang='$rk[idbarang]'");
			$rowf = mysqli_num_rows($sqlf);
			echo "<div class='dh4'>";
			echo "<a href='?p=detailbarang&idbarang=$rk[idbarang]'>
<div id='isi'>
  <div class='grid'>";
			echo "<div class='dh12' align='center'>
      
	    <img src='$icon' style='width='250px' height='100px' />
	  
	  <div class='isicard'>
		  <br><b>$rk[nama_barang]</b><br><br><b>Rp $rk[harga]</b><br>
	  </div>
   </div>";
			echo "</div>
</div></a>";
			echo "</div>";
		}
		?>
	</fieldset>
</div>

<?php
if (isset($_POST["simpan"])) {
	include "koneksi.php";
	$sqlm = mysqli_query($kon, "insert into pesan_barang (idpelanggan, nama_barang, jumlah, total, tgl_pesan) values ('$_POST[idpelanggan]','$_POST[nama_barang]', '$_POST[jumlah]','$_POST[total]', NOW())");
	if ($sqlm) {
		echo "Data Berhasil Disimpan";
	} else {
		echo "Gagal Menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1.5; URL=?p=pesan'>";
}
?>

</fieldset>
</div>

<div id="frmreg2">
	<fieldset>

		<body>
			<marquee>Selamat Datang Pada Website <span class="style2">Des Bordir</span>
			</marquee>
		</body>
	</fieldset>
</div>