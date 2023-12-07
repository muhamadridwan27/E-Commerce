<div id="frmlogin">
<fieldset>
<h3>LOGIN</h3>
<img src="../foto/user1.jpg" width="150px" style="border-radius:50%" />
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <p>
  <b>Masukkan Username dan Password Dengan benar</b>
  <p>USERNAME<br>
    <input name="username" type="text" id="username" placeholder="Masukkan Username" style="text-align:center" />
  </p>
  <p>PASSWORD<br> 
    <input name="password" type="password" id="password" placeholder=" Masukkan Password" style="text-align:center">
  </p>
  <p>
    <input name="login" type="submit" id="login" value="   LOGIN   ">
  </p>
</form>
<?php 
if($_POST["login"]){
  include "koneksi.php";
  $sqlm = mysqli_query($kon, "select * from user where username='$_POST[username]' and password='$_POST[password]'");
  $rm = mysqli_fetch_array($sqlm);
  $row = mysqli_num_rows($sqlm);
  if($row > 0){
    session_start();
	$_SESSION["userm"] = $rm["username"];
	$_SESSION["passm"] = $rm["password"];
	echo "Login Berhasil";
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=home'>";
  }else{
    echo "Login Gagal";
  }
}
?>
</fieldset>
</div>
