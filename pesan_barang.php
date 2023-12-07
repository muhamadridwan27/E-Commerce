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
	-->
</style>

<div id="forum">
	<div class="grid">
		<span class="style1">Barangs</span> &raquo;
	</div>
</div>

<div id="frmreg3">
	<fieldset>
		<?php
		$sqlk = mysqli_query($kon, "select * from barang order by nama_barang asc");
		while ($rk = mysqli_fetch_array($sqlk)) {
			if (empty($rk["foto"])) {
				$icon = "foto/user.jpg";
			} else {
				$icon = "foto/$rk[foto]";
			}
			$sqlf = mysqli_query($kon, "select * from barang where idbrang='$rk[idbarang]'");
			// $rowf = mysqli_num_rows($sqlf);
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

<div id="frmreg2">
	<fieldset>

		<body>
			<marquee>Selamat Datang Pada Website <span class="style2">Des Bordir</span>
			</marquee>
		</body>
	</fieldset>
</div>