<?php
include "koneksi.php";
$sqlm = mysqli_query($kon, "select * from pelanggan where idpelanggan='$_GET[idpelanggan]'");
$rm = mysqli_fetch_array($sqlm);
?>

<div id="frmreg">
  <fieldset>
    <h3>EDIT PROFILE PELANGGAN</h3>
    <form name="form1" method="post" action="" enctype="multipart/form-data">
      <div class="dh6">
        <input name="idpelanggan" type="hidden" id="idpelanggan" value="<?php echo "$rm[idpelanggan]"; ?>" />
        <p><strong>USERNAME</strong><br>
          <label>
            <input name="usernamepel" type="text" id="usernamepel" value="<?php echo "$rm[usernamepel]"; ?>" />
          </label>
        </p>
        <p><strong>PASSWORD</strong><br>
          <label>
            <input name="passwordpel" type="text" id="passwordpel" value="<?php echo "$rm[passwordpel]"; ?>" />
          </label>
        </p>
        <p><strong>NAMA LENGKAP </strong><br>
          <label>
            <input name="nama_pelanggan" type="text" id="nama_pelanggan" value="<?php echo "$rm[nama_pelanggan]"; ?>" />
          </label>
          <br>
          <label></label>
          <br>
          <label></label>
          <strong>ALAMAT</strong><br>
          <label>
            <textarea name="alamat" cols="50" rows="3" id="alamat"><?php echo "$rm[alamat]"; ?></textarea>
          </label>
        </p>
      </div>
      <div class="dh6">
        <p>
          <label></label>
          <label></label>
          <strong>JENIS KELAMIN </strong>
        </p>
        <p>
          <?php
          $l = "";
          $p = "";
          if ($rm["jk"] == "Laki Laki") {
            $l = " checked";
          } else if ($rm["jk"] == "Perempuan") {
            $p = " checked";
          }
          ?>
          <input name="jk" type="radio" value="Laki Laki" <?php echo "$l"; ?>>
          <strong>LAKI LAKI</strong>
          <input name="jk" type="radio" value="Perempuan" <?php echo "$p"; ?>>
          <strong>PEREMPUAN </strong>
        </p>
        <p><strong>NO HP</strong><br>
          <label>
            <input name="nohp" type="text" id="nohp" value="<?php echo "$rm[nohp]"; ?>" />
          </label>
        </p>
        <br>
        <label></label>
        <label></label>
        </p>
        <p>
          <label>
            <strong>
              <input name="simpan" type="submit" id="simpan" value="EDIT">
            </strong></label>
        </p>
      </div>
    </form>

    <?php
    if (isset($_POST["simpan"])) {
      include "koneksi.php";
      $sqlmpel = mysqli_query($kon, "update pelanggan  set usernamepel='$_POST[usernamepel]',passwordpel='$_POST[passwordpel]',nama_pelanggan='$_POST[nama_pelanggan]',alamat='$_POST[alamat]',nohp='$_POST[nohp]',jk='$_POST[jk]' where idpelanggan='$_POST[idpelanggan]'");
      if ($sqlmpel) {
        echo "<script>alert('Berhasil Mengedit')</script>";
      } else {
        echo "<script>alert('Gagal Mengedit')</script>";
      }
      echo "<META HTTP-EQUIV='Refresh' Content='0.5; URL=?p=profilpel'>";
    }
    ?>
  </fieldset>
</div>