<div id="frmlogin">
<fieldset>
<h3>LOGIN</h3>
<img src="image/login.png" width="150px" style="border-radius:50%" />
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <p>
  <b>Masukkan Username dan Password Dengan benar</b>
  <p>USERNAME<br>
    <input name="usernamepel" type="text" id="usernamepel" placeholder="Masukkan Username" style="text-align:center" />
  </p>
  <p>PASSWORD<br>
    <input name="passwordpel" type="password" id="passwordpel" placeholder=" Masukkan Password" style="text-align:center" />
  </p>
  <p>
    <input name="login" type="submit" id="login" value="   LOGIN   ">
  </p>
</form>
<?php 
if(isset($_POST["login"])){
  include "koneksi.php";
  $sqlm = mysqli_query($kon, "select * from pelanggan where usernamepel='$_POST[usernamepel]' and passwordpel='$_POST[passwordpel]'");
  $rm = mysqli_fetch_array($sqlm);
  $row = mysqli_num_rows($sqlm);
  if($row > 0){
    session_start();
	$_SESSION["userm"] = $rm["usernamepel"];
	$_SESSION["passm"] = $rm["passwordpel"];
	echo "Login Berhasil";
	$_SESSION["idpelanggan"]=$row["idpelanggan"];
	header("location:pelanggan/index.php");
  }else{
    echo "Login Gagal";
  }
}
?>


</fieldset>
</div>
