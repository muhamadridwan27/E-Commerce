<div id="frmreg">
<fieldset>
<h3>REGISTRASI</h3>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<div class="dh6">
  <p><strong>USERNAME</strong><br> 
    <label>
    <input name="usernamepel" type="text" id="usernamepel" placeholder="Username" />
    </label>
  </p>
  <p><strong>PASSWORD</strong><br> 
    <label>
    <input name="passwordpel" type="password" id="passwordpel" placeholder="Password" />
    </label>
  </p>
  <p><strong>NAMA LENGKAP </strong><br>
    <label>
    <input name="nama_pelanggan" type="text" id="nama_pelanggan" placeholder="Nama Lengkap" />
    </label>
    <br>
    <label></label>
    <br> 
    <label></label>
    <strong>ALAMAT</strong><br> 
    <label>
    <textarea name="alamat" cols="50" rows="3" id="alamat" placeholder="Alamat Lengkap"></textarea>
    </label>
  </p>
  </div>
<div class="dh6">
  <p>
    <label></label>
    <label></label>
    <strong>JENIS KELAMIN </strong></p>
  <p>
    <label>
    <input name="jk" type="radio" value="Laki Laki" />
    <strong>Laki-Laki</strong> </label>
    <label>
    <input name="jk" type="radio" value="Perempuan" />
    <strong>Perempuan    </strong></label>
  </p>
  <p><strong>NO HP</strong><br> 
    <label>
    <input name="nohp" type="text" id="nohp" placeholder="No. Handphone" />
    </label>
    </p>
<br> 
    <label></label>
    <label></label>
  </p>
  <p>
    <label>
    <strong>
    <input name="simpan" type="submit" id="simpan" value="DAFTAR">
    </strong></label>
  </p>
  </div>
</form>

<?php
if(isset($_POST["simpan"])){
  include "koneksi.php";
	$sqlmpel = mysqli_query($kon, "insert into pelanggan (usernamepel, passwordpel, nama_pelanggan, alamat, jk, nohp) values ('$_POST[usernamepel]', '$_POST[passwordpel]', '$_POST[nama_pelanggan]','$_POST[alamat]', '$_POST[jk]', '$_POST[nohp]')");
	if($sqlmpel){
	  echo "<script>alert('Pendaftaran Berhasil')</script>";
	}else{
	  echo "<script>alert('Pendaftaran Gagal')</script>";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='0.5; URL=?p=login'>";
}
?>
</fieldset>
</div>