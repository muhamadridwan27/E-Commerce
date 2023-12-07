<style type="text/css">
  <!--
  .style12 {
    font-size: 18px
  }

  .style14 {
    font-weight: bold
  }

  .style15 {
    color: #CCCC00
  }

  .style16 {
    color: #FFFFFF
  }

  .style17 {
    color: #CCCCCC;
  }
  -->
</style>

<?php
include "koneksi.php";
$sqlmp = mysqli_query($kon, "select * from barang where idbarang='$_GET[idbarang]'");
$rp = mysqli_fetch_array($sqlmp);
?>

<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home"; ?>" class="style15">Home</a> <span class="style16">&raquo;</span>
    <a href="<?php echo "?p=pesan"; ?>" class="style15">Pesan Barang</a> <span class="style16">&raquo;</span>
    <span class="style15">Detail Barang</span>
  </div>
</div>

<?php

$stok = "";
$stokeh = "";
$jumlah = "";
$kota = "";
$stok = $_POST["stok"];
$stokeh = $_POST["stokeh"];
$jumlah = $_POST["jumlah"];
$kota = $_POST["kota"];
?>

<?php
$a = $_POST["ongkir"];
$b = $_POST["total"];
$c = $a + $b;
?>

<div id="frmbelanja2">
  <fieldset class="style14">
    <h3 align="center" class="style17">DETAIL BARANG</h3>
    <form name="form1" method="post" action="" enctype="multipart/form-data">
      <input name="idpelanggan" type="hidden" id="idpelanggan" value="<?php echo "$rm[idpelanggan]"; ?>" />
      <input name="idbarang" type="hidden" id="idbarang" value="<?php echo "$_GET[idbarang]"; ?>" />
      <p>
      <div class="dh4">
        <?php
        include "koneksi.php";
        $sqlk = mysqli_query($kon, "select * from barang where idbarang='$_GET[idbarang]'");
        while ($rk = mysqli_fetch_array($sqlk)) {
          echo "
    <img src='../foto/$rk[foto]'width='375px'><p>
  ";
        }
        ?>
        </p>
      </div>
      <div class="dh4">
        <p align="left" class="style12">Nama Barang
          <label>

            <br />
            <input type="text" name="nama_barang" id="nama_barang" value="<?php echo "$rp[nama_barang]"; ?>" readonly="readonly" />
          </label>
        </p>
        <p align="left"><span class="style12">Harga</span>
          <label>
            <br />
            <input type="number" name="harga" id="harga" value="<?php echo "$rp[harga]"; ?>" readonly="readonly" />
          </label>
          </span>
        </p>
        <p align="left">Stok Tersedia
          <label> <br />
            <input type="number" name="stokeh" id="stokeh" value="<?php echo "$rp[stokbrg]"; ?>" readonly="readonly" />
          </label>
          </span>
        </p>
        <p align="left" class="style12">Jumlah
          <label>Beli<br />
            <input type="number" name="jumlah" id="jumlah" value="<?php echo "$jumlah" ?>" />
          </label>
        </p>
          <?php
          include "koneksi.php";
          $sqlk = mysqli_query($kon, "select * from barang where idbarang='$_GET[idbarang]'");
          while ($rk = mysqli_fetch_array($sqlk)) {
            echo "
	Detail Barang         :  dengan bahan kain parasut dan motif bunga<br>  $rk[detailbrg]<br>
  ";
          }
          ?>
      </div>
      <div class="dh4">
        <p>Alamat Tujuan<br>
          <label>
            <input type="text" name="alamat" id="alamat" value="" />
          </label>
          <br>
        <p>Kota Tujuan<br>
          <label>
            <input type="text" name="kota" id="kota" value="<?php echo "$kota" ?>" onkeyup="isi_otomatise()" />
          </label>
          <br>
        <p>Ongkir<br>
          <label>
            <input type="text" name="ongkir" id="ongkir" value="<?php echo "$a" ?>" readonly="readonly" />
          </label>
        <p>
          <label>
            <input type="submit" name="proses" id="proses" value="PROSES" />
          </label>
        <p>Total Bayar
        <p>
          <label>
            <input type="hidden" name="total" id="total" />
          </label>
          <label>
            <input type="hidden" name="stok" id="stok" />
          </label>
          <label>
            <input type="text" name="totale" id="totale" value="<?php echo "$c" ?>" readonly="readonly" />
          </label>
        <p>
          <label>
            <input name="simpann" type="submit" id="simpann" value="BELI" />
          </label>
      </div>
    </form>
    <script src="jquery.js"></script>
    <script type="text/javascript">
      function isi_otomatise() {
        var kota = $("#kota").val();
        $.ajax({
          url: 'autofill_ongkir.php',
          data: 'kota=' + kota,
        }).success(function(data) {
          var json = data,
            obj = JSON.parse(json);
          $("#ongkir").val(obj.ongkir);
        });
      }
    </script>
    <script>
      $("#harga").keyup(function() {
        tot = $("#harga").val() * $("#jumlah").val();
        $("#total").val(tot);
      });

      $("#jumlah").keyup(function() {
        tot = $("#harga").val() * $("#jumlah").val();
        $("#total").val(tot);
      });
    </script>

    <script>
      $("#ongkir").keyup(function() {
        tote = $("#total") + $("#ongkir");
        $("#totale").val(tote);
      });
    </script>

    <script>
      $("#stokeh").keyup(function() {
        tottt = $("#stokeh").val() - $("#jumlah").val();
        $("#stok").val(tottt);
      });

      $("#jumlah").keyup(function() {
        tottt = $("#stokeh").val() - $("#jumlah").val();
        $("#stok").val(tottt);
      });
    </script>

    <?php
    if (isset($_POST["simpann"])) {
      include "koneksi.php";
      if ($stok <= -1) {
        echo "<script>alert('Stok Tidak Mencukupi Untuk Jumlah Pesanan Anda..!')</script>";
      } else if ($jumlah == "") {
        echo "<script>alert('Harap Isi Jumlah Barang yang Akan Dibeli..!')</script>";
      } else if ($kota == "") {
        echo "<script>alert('Harap Isi Kota Tujuan..!')</script>";
      } else {
        $sqlmp = mysqli_query($kon, "insert into pesan_barang (idpelanggan, idbarang, kota,alamat, nama_barang, jumlah, total, tgl_pesan) values 
        ('$_POST[idpelanggan]','$_POST[idbarang]','$_POST[kota]','$_POST[alamat]','$_POST[nama_barang]','$_POST[jumlah]','$_POST[totale]', NOW())");
        if ($sqlmp) {
          echo "<script>alert('Barang Telah Ditambahkan ke Dalam Troli Anda..!')</script>";
          echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=troli&idpelanggan=$rm[idpelanggan]'>";
        }
      }
    }
    ?>
  </fieldset>
</div>