<?php 
include "../koneksi.php";

if(isset($_POST["searchData"])){
    $cari = $_POST["pencarian"];
    $queryRead = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin LIKE '%$cari%' OR nama_admin LIKE '%$cari%' OR username LIKE '%$cari%'");
  }


?>