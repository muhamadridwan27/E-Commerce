<?php
include "koneksi.php";
$sqlm = mysqli_query($kon, "select * from barang where idbarang='$_GET[idbarang]'");
$rm = mysqli_fetch_array($sqlm);
?><style type="text/css">
  <!--
  .style1 {
    font-weight: bold
  }
  -->
</style>

<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home"; ?>">Home</a> &raquo;
    <a href="<?php echo "?p=barang"; ?>">Daftar Barang</a> &raquo;
    <span class="style1">Edit Barang</span>
  </div>
</div>

<div id="frmreg">
  <fieldset>
    <h3>Edit Data Barang</h3>
    <form action="" method="post" enctype="multipart/form-data">
      <input name="idbarang" type="hidden" id="idbarang" value="<?php echo "$rm[idbarang]"; ?>" />
      <div class="dh6">
        <strong>Nama Barang</strong>
        <p>
          <label>
            <input type="text" name="nama_barang" id="nama_barang" value="<?php echo "$rm[nama_barang]"; ?>" />
            <br>
            <p>
          </label>
      </div>
      <div class="dh6">
        <strong>Harga<p>
            <label> </label>
        </strong>
        <label>
          <input type="text" name="harga" id="harga" value="<?php echo "$rm[harga]"; ?>" />
          <br />
          <br />
        </label>
        <strong>Stok Barang<p>
            <label> </label>
        </strong>
        <label>
          <input type="text" name="stok" id="stok" value="<?php echo "$rm[stokbrg]"; ?>" />
        </label>
        </p>
        <p>
          <label><strong>Detail</strong>
            <p>
              <textarea name="detail" id="detail"><?php echo "$rm[detailbrg]"; ?></textarea>
              <br />
          </label>
        </p>
        <p>Foto
          <input name="foto" type="file" id="foto">
        </p>
        <p>
          <label>
            <input type="submit" name="Ubah" id="Ubah" value="EDIT" />
          </label>
      </div>
    </form>


    <?php
    // if($_POST[Ubah]){
    if (isset($_POST["Ubah"])) {
      include "koneksi.php";
      $nmfoto  = $_FILES["foto"]["name"];
      $lokfoto = $_FILES["foto"]["tmp_name"];
      if (!empty($lokfoto)) {
        move_uploaded_file($lokfoto, "../foto/$nmfoto");
        $foto = ", foto='$nmfoto'";
      } else {
        $foto = "";
      }

      $sqlm = mysqli_query($kon, "update barang set nama_barang='$_POST[nama_barang]',harga='$_POST[harga]',stokbrg='$_POST[stok]',detailbrg='$_POST[detail]' $foto where idbarang='$_POST[idbarang]'");
      if ($sqlm) {
        echo "<script>alert( 'Data Berhasil Diubah..!Berhasil Mengubah Data Barang..!' )</script>";
      } else {
        echo "Data Gagal Diubah";
      }
      echo "<meta http-equiv='Refresh'content='2.5;URL=?p=barang'>";
    }
    ?>

  </fieldset>
</div>