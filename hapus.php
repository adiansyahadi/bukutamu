<?php
include "koneksi.php";

    $id = $_GET['id'];
    $hapus = $konek->query("DELETE FROM pengunjung WHERE no ='$id'");
    if($hapus) 
      
?>

<script>
  document.location.href = 'tampil.php';
</script>