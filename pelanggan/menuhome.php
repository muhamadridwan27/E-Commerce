<style type="text/css">
	<!--
	.style1 {
		color: #FF0000;
		font-weight: bold;
		font-style: italic;
	}

	.style2 {
		color: #FF0000
	}
	-->
</style>
<div class="container">
	<div class="grid">
		<div class="dh12">
			<div class="topnav" id="myTopnav">
				<a class="active" href="#"><em><span class="style1">Des Bordir</span></em></a>
				<a href="javascript:void(0);" style="font-size:14px;" class="icon" onClick="myFunction()">&#9776;</a>
				<a href="<?php echo "?p=profile&usernamepel=$rm[usernamepel]"; ?>">Profile</a>
				<a href="<?php echo "index.php"; ?>">Barang</a>
				<a href="<?php echo "?p=troli&usernamepel=$rm[usernamepel]&idpelanggan=$rm[idpelanggan]"; ?>">Troli Belanja</a>
				<a href="<?php echo "?p=logout"; ?>">Logout</a>
			</div>
		</div>
		<script>
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
		</script>
	</div>
</div>