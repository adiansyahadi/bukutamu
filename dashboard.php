<?php
include "boot.php";
$date=date('Y-m-d');
echo $date;
?>
<div class="row">
<div class="col">
<div class="card" style="width: 15rem;">
  <img src="../images/fotoo.png" class="card-img-top" alt="..." widht="200">
  <div class="card-body">
    <p class="card-text"> Pengunjung Hari ini :
      <?php
      include "koneksi.php";
$lihat =$konek->query("select Waktu from pengunjung where Waktu like '%$date%'");
$jumlah =$lihat->num_rows;
echo $jumlah;
      ?>
    </p>
  </div>
</div>
</div>

<div class="col">
<div class="card" style="width: 15rem;">
  <img src="../images/fotoo.png" class="card-img-top" alt="200px">
  <div class="card-body">
    <p class="card-text">  Pengunjung Bulan Ini :
    <?php
    $date2=date('Y-m');
      include "koneksi.php";
$lihatb =$konek->query("select Waktu from pengunjung where Waktu like '%$date2%'");
$jumlahb =$lihatb->num_rows;
echo $jumlahb;
      ?>
    </p>
  </div>
</div>
</div>

<div class="col">
<div class="card" style="width: 15rem;">
  <img src="../images/fotoo.png" class="card-img-top" alt="200px">
  <div class="card-body">
    <p class="card-text"> Pengunjung  Tahun Ini :
    <?php
    $date3=date('Y');
      include "koneksi.php";
$lihatt =$konek->query("select Waktu from pengunjung where Waktu like '%$date3%'");
$jumlaht =$lihatt->num_rows;
echo $jumlaht;
      ?>
    </p>
  </div>
</div>
</div>

