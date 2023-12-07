<style type="text/css">
  <!--
  .style1 {
    color: #FF0000
  }

  .style2 {
    font-weight: bold
  }

  .style5 {
    color: #FF0000;
    font-size: 36px;
  }

  .style6 {
    color: #000000;
    font-size: 16px;
  }

  .style12 {
    color: #000000
  }
  -->
</style>

<?php
include "koneksi.php";
$sqlm = mysqli_query($kon, "select * from pesan_barang where idpesanan='$_GET[idpesanan]'");
$rm = mysqli_fetch_array($sqlm);
?>

<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home"; ?>">Home</a> &raquo;
    <a href="<?php echo "?p=troli"; ?>">Kembali</a> &raquo;
    <span class="style1">Pembayaran</span>
  </div>
</div>

<div id="frmbelanja">
  <fieldset class="style2">
    <div align="center" class="style3">
      <p class="style5">PEMBAYARAN !</p>
      <p class="style6 style12">SILAHKAN TRANSAFER UANG PEMBAYARAN ANDA KE NOMOR REKENING 0617-XXX-XXX-XXX BRI</p>
      <p class="style6">ATAS NAMA EFNI BACHTIAR </p>
      <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
        <input name="idpesanan" type="hidden" id="idpesanan" value="<?php echo "$rm[idpesanan]"; ?>" />
        <input name="nama_barang" type="hidden" id="nama_barang" value="<?php echo "$rm[nama_barang]"; ?>" />
        <input name="foto" type="file" id="foto" />
        </label>
    </div>
    <p>
      <label>
        <input type="submit" name="simpan" id="simpan" value="UPLOAD" />
      </label>
    </p>
    </form>

    <?php
    if (isset($_POST["simpan"])) {
      include "koneksi.php";
      $nmfoto  = $_FILES["foto"]["name"];
      $lokfoto = $_FILES["foto"]["tmp_name"];
      if (!empty($lokfoto)) {
        move_uploaded_file($lokfoto, "../pembayaran/$nmfoto");
      }

      $sqlk = mysqli_query($kon, "update pesan_barang set nama_barang='$_POST[nama_barang]',foto= '$nmfoto' where idpesanan='$_POST[idpesanan]'");

      if ($sqlk) {
        echo "Upload Berhasil";
      } else {
        echo "Gagal Upload";
      }
      echo "<meta http-equiv='Refresh'content='0.5;URL=?p=pesan_pembayaran&idpelanggan=$rm[idpelanggan]'>";
    }
    ?>


</div>
</fieldset>
</div>