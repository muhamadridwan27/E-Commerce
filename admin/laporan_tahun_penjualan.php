    <!-- batas f -->
<style type="text/css">
<!--
.style1 {color: #CCCC00}
-->
</style>

    <form action="cetak_tahun_penjualan.php" method="GET" role="form" target="_blank">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div id="forum">
  <div class="grid">
    <a href="<?php echo "?p=home";?>" class="style1">Home</a> &raquo;
    <a href="<?php echo "?p=laporan";?>" class="style1">Laporan</a> &raquo;
  <span class="style1">Laporan Penjualan Tahunan</span>  </div>
</div>
            <div align="center" id="frmreg2">
			 <fieldset>
            <!-- Table -->
                <table class="table table-bordered table-striped table-responsive">
                        <h4><Center> Laporan Penjualan Tahunan</h4>
                        <tr>
                            <td>Masukan Tahun</td>
                            <td> 

                                <select name="year" id="" class="btn btn-add">
                                    <option value="0">Pilih Tahun</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                </select>
                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
              <input name="Cetak" type="submit" id="simpan" value="Cetak" />
            </fieldset>
            </div>

