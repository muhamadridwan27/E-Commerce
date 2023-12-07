<script>
    window.print();
</script>


<?php
include "koneksi.php";
$bln = $_GET['month'];
$thn = $_GET['year'];

if ($bln == '01') {
    $b = "Januari";
} elseif ($bln == '02') {
    $b = "Februari";
} elseif ($bln == '03') {
    $b = "Maret";
} elseif ($bln == '04') {
    $b = "April";
} elseif ($bln == '05') {
    $b = "Mei";
} elseif ($bln == '06') {
    $b = "Juni";
} elseif ($bln == '07') {
    $b = "Juli";
} elseif ($bln == '08') {
    $b = "Agustus";
} elseif ($bln == '09') {
    $b = "September";
} elseif ($bln == '10') {
    $b = "Oktober";
} elseif ($bln == '11') {
    $b = "November";
} elseif ($bln == '12') {
    $b = "Desember";
}
$no = 1;
?>
<tr align="center">
    <table style="width:98%" border="0">
        <td align="center" colspan="3">
            <h3>LAPORAN PENJUALAN BULANAN<br>
                Toko Des Bordir</h3>
            Alamat Pasar Atas LT.III No.110,Bukittinggi, Sumatra Barat

            </br><b>-Laporan Bulanan Penjualan-</b></br>
            Pada Bulan: <?php echo "$bln"; ?> | Tahun : <?php echo " $thn"; ?></span>
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
        <th>Kota Tujuan</th>
        <th>Total</th>
    </tr>
    <?php
    $no = 1;
    $totall = 0;
    // $nilai = 0;
    $sql = mysqli_query($kon, "select * from transaksi_penjualan where month(transaksi_penjualan.tgl_transaksi)='$bln' and year(transaksi_penjualan.tgl_transaksi)='$thn'");
    // $nilai = $rm[total];
    while ($rm = mysqli_fetch_array($sql)) {
        $totall=$totall+$rm[totale];
        // $totall = $totall + $nilai;
        echo "
            <tr>
               <td><center>$no  </td>
               <td>$rm[tgl_transaksi]  </td>
    <td>$rm[nama_barang]</td>
    <td>$rm[jumlah] Pcs</td>
    <td>$rm[kota]</td>
    <td>Rp. $rm[totale]</td>
 </tr>";
        $no++;
    }

    ?>
    <tr>
        <td colspan="9">Total Pendapatan Penjualan Bulan <?php echo "$bln"; ?>:
            <?php echo "Rp. $totall" ?> </center>
    </tr>
    </td>
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