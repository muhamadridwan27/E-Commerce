<link rel="stylesheet" type="text/css" href="style.css" />
<div id="frmlogin">
<fieldset><br/>
<img src="image/avatar.jpg" width="150px" style="border-radius:50%"/>
<form name="form1" method="post" action="login.php" enctype="multipart/form-data">
  
  <h3>LOGIN</h3>
  <p><select name="level" id="level"><br>
  		  <option value="0">..::Pilih Level::..</option>
          <option value="1">Admin</option>
          <option value="2">Member</option>
  </p>
  </select>
  <p><input name="username" type="text" id="username" placeholder="Username"><br>
  </p>
  <p><input name="password" type="password" id="password" placeholder="Password"><br>
  </p>
  <p><input type="submit" name="Submit" value="LOGIN"><br>
  </p>
  Belum Terdaftar ? Silahkan <a href="<?php echo "daftar.php"; ?>">Register</a>
</form>
</fieldset>
</div>

<?php
	
	if($_POST["level"] == 1){
	include "koneksi.php";
	$sqladm = mysqli_query($kon, "select * from admin where username='$_POST[username]' and password='$_POST[password]'");
	$row = mysqli_num_rows($sqladm);
	$radm = mysqli_fetch_array($sqladm);
	if($row > 0){
		session_start();
		$_SESSION["namaadm"]=$radm["username"];
		$_SESSION["passadm"]=$radm["password"];
		header("location:admin/index.php");
	}else{
		header("location:login.php");
	}
	}else if($_POST["level"] == 2){
	include "koneksi.php";
	$sqlmem = mysqli_query($kon, "select * from member where username='$_POST[username]' and password='$_POST[password]'");
	$row = mysqli_num_rows($sqlmem);
	$rmem = mysqli_fetch_array($sqlmem);
	if($row > 0){
		session_start();
		$_SESSION["namamem"]=$rmem["username"];
		$_SESSION["passmem"]=$rmem["password"];
		header("location:member/index.php");
	}else{
		header("location:login.php");
	}
	}
?> 