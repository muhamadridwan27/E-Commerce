<script>
    window.print();
</script>


<?php
include "koneksi.php";
$thn = $_GET['year'];

$no = 1;

?>
<tr align="center">
    <table style="width:98%" border="0">
        <td align="center" colspan="3">
            <h3>LAPORAN PENJUALAN TAHUNAN<br>
                Toko Des Bordir</h3>
            Alamat Pasar Atas LT.III No.110,Bukittinggi, Sumatra Barat
            </br><b>-Laporan Penjualan
                Tahunan-</b></br>Pada Tahun : <?php echo " $thn"; ?></span>
        </td>
    </table>
</tr>
<hr>
<table class="table-bordered table table-striped " border="1" cellspacing="0" cellpadding="5" align="center" width="100%">
    <tr>
        <th>No</th>
        <th>Tanggal Transaksi</th>
        <th>Nama Barang</th>
        <th>Jumlah Terjual</th>
        <th>Total</th>
    </tr>
    <?php
    $no = 1;
    $totall = 0;

    $sql = mysqli_query($kon, "select * from transaksi_penjualan where year(transaksi_penjualan.tgl_transaksi)='$thn'");
    while ($rm = mysqli_fetch_array($sql)) {
        $totall=$totall+$rm[totale];
        echo "
            <tr>
               <td><center>$no  </td>
               <td>$rm[tgl_transaksi]  </td>
    <td>$rm[nama_barang]</td>
    <td>$rm[jumlah] Pcs</td>
    <td>Rp. $rm[totale]</td>
 </tr>";
        $no++;
    }

    ?>
    <tr>
        <td colspan="9">Total Pendapatan Penjualan Tahun <?php echo "$thn"; ?> :
        <?php echo "Rp. $totall" ?>  </td>
    </tr>
</table>
<br>
<br>
<table border="0" align="right">
    <tr>
        <td colspan="2" align="center"><b>Bukittinggi,
                <?php echo date('d-M-Y'); ?> </b></br><b>Pimpinan</b></br></br></br></br>
            <hr>
            <strong>Des Erita</strong>
        </td>
    </tr>
</table>