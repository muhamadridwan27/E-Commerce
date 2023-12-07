<style type="text/css">
  <!--
  .style1 {
    font-weight: bold;
    color: #CCCC00;
  }

  .style2 {
    color: #FF0000;
    font-style: italic;
  }

  .style3 {
    color: #CCCC00
  }

  .style4 {
    color: #FFFFFF
  }
  -->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home"; ?>" class="style3">Home</a> <span class="style4">&raquo;</span>
    <span class="style1">Penjualan</span>
  </div>
</div>

<div align="center" id="frmreg2">
  <fieldset>
    <div class="btn-add">
      <a href="<?php echo "?p=transaksi_penjualan"; ?>">
        <div class='btn btn-add'>Transaksi <br>Penjualan</div>
      </a>
    </div>
  </fieldset>
</div>

<?php
$idbarang = $_POST["idbarang"];
$nama_barang = $_POST["nama_barang"];
$harga = $_POST["harga"];
$stokeh = $_POST["stokeh"];
$jumlah = $_POST["jumlah"];
$jumlah_bayar = $_POST["jumlah_bayar"];
$stok = $_POST["stok"];
$kota = $_POST["kota"];
?>

<?php
$a = $_POST["ongkir"];
$b = $_POST["total"];
$c = $a + $b;
?>

<div id="frmreg2">
  <fieldset>
    <h3>Penjualan</h3>
    <form name="form1" method="post" action="">
      <div class="dh4">
        <label>
        </label>
        <p><strong>Nama Barang</strong><br />
          <label>
            <input name="nama_barang" type="text" id="nama_barang" value="<?php echo "$nama_barang" ?>" onkeyup="isi_otomatis()" />
          </label>
        <p><strong>Harga</strong><br />
          <label>
            <strong>Rp</strong>
            
            <input name="harga" type="text" id="harga" value="<?php echo "$harga" ?>" readonly="readonly" />
          </label>
        <p><strong>Jumlah Stok Barang</strong><br />
          <label>
            <input name="stokeh" type="text" id="stokeh" value="<?php echo "$stokeh" ?>" readonly="readonly" />
          </label>
          <strong>Pcs</strong>
        </p>
        <p>
      </div>
      <div class="dh4">
        <p><strong>Jumlah Pembelian</strong><br>
          <label>
            <input name="jumlah" type="text" id="jumlah" value="<?php echo "$jumlah" ?>" />
          </label>
          <strong>Pcs</strong>
        <p><strong>Sisa Stok Barang</strong><br />
          <label></label>
          <label>
            <input type="text" name="stok" id="stok" value="<?php echo "$jumlah" ?>" readonly="readonly" />
          </label>
          <strong>Pcs</strong><br />
        <p><strong>Kota Tujuan</strong><br>
          <label>
            <input name="kota" type="text" id="kota" value="<?php echo "$kota" ?>" onkeyup="isi_otomatise()" />
          </label>
        <p><strong>Ongkir</strong><br>
          <label>
            <input name="ongkir" type="text" id="ongkir" value="<?php echo "$a" ?>" readonly="readonly" />
          </label>
        <p>
          <label>
            <input name="total" type="hidden" id="total" readonly="readonly" />
          </label>
          <input name="proses" type="submit" id="proses" value="PROSES">
        </p>
      </div>
      <div class="dh4">
        <p><strong>Total Bayar</strong><br />
          <label>
            <strong>Rp</strong>
            <input name="totale" type="text" id="totale" value="<?php echo "$c" ?>" readonly="readonly" />
          </label>
        <p><strong>Jumlah Bayar</strong><br>
          <label>
            <strong>Rp</strong>
            <input name="jumlah_bayar" type="text" id="jumlah_bayar" />
          </label>
        <p><strong>Kembalian</strong><br />
          <label>
            <strong>Rp</strong>
            <input name="kembalian" type="text" id="kembalian" readonly="readonly" />
          </label>
          <label></label>
        <p>
          <label>
            <strong>
              <input name="simpan" type="submit" id="simpan" value="SIMPAN">
            </strong></label>
      </div>

    </form>

    <script src="jquery.js"></script>
    <script type="text/javascript">
      function isi_otomatis() {
        var nama_barang = $("#nama_barang").val();
        $.ajax({
          url: 'autofill.php',
          data: 'nama_barang=' + nama_barang,
        }).success(function(data) {
          var json = data,
            obj = JSON.parse(json);
          $("#idbarang").val(obj.idbarang);
          $("#harga").val(obj.harga);
          $("#stokeh").val(obj.stok);
        });
      }
    </script>
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
      $("#stokeh").keyup(function() {
        tottt = $("#stokeh").val() - $("#jumlah").val();
        $("#stok").val(tottt);
      });

      $("#jumlah").keyup(function() {
        tottt = $("#stokeh").val() - $("#jumlah").val();
        $("#stok").val(tottt);
      });
    </script>

    <script>
      $("#totale").keyup(function() {
        tottts = $("#jumlah_bayar").val() - $("#totale").val();
        $("#kembalian").val(tottts);
      });

      $("#jumlah_bayar").keyup(function() {
        tottts = $("#jumlah_bayar").val() - $("#totale").val();
        $("#kembalian").val(tottts);
      });
    </script>
    <?php
    if (isset($_POST["simpan"])) {
      include "koneksi.php";

      if ($nama_barang == "") {
        echo "<script>alert( 'Maaf..! Tolong Input Data Barang..!')</script>";
      } else if ($jumlah == "") {
        echo "<script>alert( 'Maaf..! Tolong Input Jumlah Pembelian..!)</script>";
      } else if ($jumlah_bayar == "") {
        echo "<script>alert( 'Maaf..! Tolong Input Jumlah Pembayaran..!')</script>";
      } else if ($stok <= -1) {
        echo "<script>alert( 'Maaf..! Stok Tidak Tersedia Untuk Jumlah Pembelian..!')</script>";
      } else {
        $sqlm = mysqli_query($kon, "insert into transaksi_penjualan (nama_barang, kota, ongkir ,jumlah,  harga, totale , tgl_transaksi) values ('$_POST[nama_barang]','$_POST[kota]','$_POST[ongkir]','$_POST[jumlah]','$_POST[harga]','$_POST[totale]', NOW())");
        $sqlmb = mysqli_query($kon, "update barang set nama_barang='$_POST[nama_barang]',stokbrg='$_POST[stok]' where idbarang='$_POST[idbarang]'");
        if ($sqlm && $sqlmb) {
          echo "<script>alert('Transaksi Berhasil Disimpan..!')</script>";
          echo "<META HTTP-EQUIV='Refresh' Content='2.5; URL=?p=transaksi_penjualan'>";
        } else {
          echo "Gagal Menyimpan";
        }
      }
    }
    ?>

  </fieldset>
</div>

<div id="frmreg2">
  <fieldset>

    <body>
      <marquee>
        Sistem Informasi E-Commerce Des Bordir
      </marquee>
    </body>
  </fieldset>
</div>