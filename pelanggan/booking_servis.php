<style type="text/css">
  <!--
  .style1 {
    color: #FF0000
  }

  .style4 {
    color: #FFFFFF
  }
  -->
</style>
<div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home"; ?>">Home</a> &raquo;
    <span class="style1">Riwayat Pemesanan</span>
  </div>
</div>

<div id="frmreg">
  <fieldset>
    <h3> Riwayat Pemesanan</h3>
    <form name="form1" method="post" action="" enctype="multipart/form-data">
      <div class="dh6">

        <?php
        if (isset($_POST["simpan"])) {
          include "koneksi.php";

          $jenis_servis = implode(', ', $_POST[jenis_servis]);
          $sqlm = mysqli_query($kon, "insert into pesan_servis (idpelanggan, jenis_servis, tgl_booking, tgl_membooking) values ('$_POST[idpelanggan]','$jenis_servis','$_POST[tgl_booking]', NOW())");
          if ($sqlm) {
            echo "<script>alert('Booking Berhasil')</script>";
            echo "<META HTTP-EQUIV='Refresh' Content='0.5; URL=?p=booking&usernamepel=$rm[usernamepel]&idpelanggan=$rm[idpelanggan]'>";
          } else {
            echo "Gagal Booking";
          }
        }
        ?>
  </fieldset>
</div>

<div id="frmreg">
  <fieldset>
    <?php
    include "koneksi.php";
    $idpelanggan = $_GET['idpelanggan'];
    $sqlm = mysqli_query($kon, "select * from pesan_barang where idpelanggan='$idpelanggan' ");
    ?>
    <table width="100%" border="1" cellspacing="1" cellpadding="10">
      <tr>
        <td width="31%">Tanggal Pemesanan</td>
        <td width="30%">
          <div align="center">Nama Barang</div>
        </td>
        <td width="30%">
          <div align="center">Alamat Lengkap</div>
        </td>
        <td width="30%">
          <div align="center">Jumlah</div>
        </td>
        <td width="30%">
          <div align="center">Total</div>
        </td>

      </tr>
      <?php
      while ($rm = mysqli_fetch_array($sqlm)) {
        echo "<tr valign=top>
	<td><b>$rm[tgl_pesan]</td>
    <td><b>$rm[nama_barang]</td>
    <td><b>$rm[kota],$rm[alamat]</td>
    <td><b>$rm[jumlah]</td>
    <td><b>$rm[total]</td>
  </tr>";
      }
      ?>

    </table>
  </fieldset>
</div>

<div id="frmreg2">
  <fieldset>

    <body>
      <marquee>Selamat Datang Pada Website <span class="style2">Des Bordir</span>
      </marquee>
      </marquee>
    </body>
  </fieldset>
</div>