<style type="text/css">
  <!--
  .style1 {
    color: #FF0000
  }

  .style2 {
    font-size: 16px;
    color: #FFFFFF;
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
    <a href="<?php echo "?p=home"; ?>" class="style3">Home</a> &raquo;
    <span class="style3">Barang</span>
  </div>
</div>

<div align="center" id="frmreg2">
  <fieldset>
    <div class="btn-add">
      <a href="<?php echo "?p=input_barang"; ?>">
        <div class='btn btn-add style4'>Tambah <br>Barang</div>
      </a>
    </div>
  </fieldset>
</div>

<div align="center" id="frmreg2">
  <fieldset class="style2">
    Daftar Barang
  </fieldset>
</div>

<div id="frmreg2">
  <fieldset>
    <?php
    include "koneksi.php";
    $sqlm = mysqli_query($kon, "select * from barang order by nama_barang asc");
    ?>
    <table width="100%" border="1" cellspacing="1" cellpadding="10">
      <tr>
        <td width="30%">Nama Barang</td>
        <td width="20%">Harga</td>
        <td width="20%">Stok Barang</td>
        <td width="20%">Detail Barang</td>
        <td width="20%">Foto</td>
        <td width="11%">Aksi</td>
      </tr>
      <?php
      while ($rm = mysqli_fetch_array($sqlm)) {
        echo "<tr valign=top>
    <td><b>$rm[nama_barang]</td>
    <td><b>Rp $rm[harga]</b><br></td>
	<td><b>$rm[stokbrg] Pcs</b><br></td>
	<td>$rm[detailbrg]<br></td>
	<td><img src='../foto/$rm[foto]'width='144px'></td>
    <td>

		<a href='?p=barang_edit&idbarang=$rm[idbarang]'><div class='btn btn-add'>EDIT</div></a><br>
		<a href='?p=barang_del&idbarang=$rm[idbarang]'><div class='btn btn-add'>HAPUS</div></a>
		</td>
  </tr>";
      }
      ?>

    </table>
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