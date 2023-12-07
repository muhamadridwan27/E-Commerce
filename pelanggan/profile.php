<div id="frmlogin">
<fieldset>
<h2>SELAMAT DATANG</h2>
<img src="../image/login.png" width="150px" style="border-radius:50%" /><p>
<?php 
	include "koneksi.php";
	echo "<h3>$rm[nama_pelanggan]</h3>NoHp : $rm[nohp]<br>Alamat : $rm[alamat]<br>Jenis Kelamin : $rm[jk]"; 
	echo "<div align='center'><a href='?p=profiledit&usernamepel=$_SESSION[userm]'><div class='btn btn-add'>Edit Profile</div></a></div><p>";
	echo "<div align='center'><a href='?p=profiledel&usernamepel=$_SESSION[userm]'><div class='btn btn-add'>Hapus Profile</div></a></div><p>";
?>



</fieldset>
</div>
