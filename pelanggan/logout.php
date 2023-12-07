<?php
session_start();
session_destroy();
echo "<script>alert('Anda telah keluar dari halaman user')</script>";
  echo "<meta http-equiv='Refresh' content='0; URL=../index.php'>";
?>