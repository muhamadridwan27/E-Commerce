<div id="frmlogin">
<fieldset>
<h3>LOGIN</h3>
<img src="image/adminn.jpg" width="150px" style="border-radius:50%" />
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
    <input onclick="validation()" name="login" type="submit" id="login" value="   LOGIN   ">
  </p>
</form>
<?php 
if(isset($_POST["login"])){
  include "koneksi.php";
  $sqlmk = mysqli_query($kon, "select * from user where username='$_POST[username]' and password='$_POST[password]'");
  $rmk = mysqli_fetch_array($sqlmk);
  $row = mysqli_num_rows($sqlmk);
  if($row > 0){
    session_start();
	$_SESSION["user"] = $rmk["username"];
	$_SESSION["pass"] = $rmk["password"];
	echo "<script>alert('Login Berhasil')</script>";
	header("location:admin/index.php");
  }else{
    echo "<script>alert('Username Atau Password Yang Anda Masukkan Salah')</script>";
  }
}
?>
</fieldset>
</div>
