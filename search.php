<?php
include "boot.php";
include "koneksi.php";

$cari=$_POST['cari'];
?>
<?php
$Tampil = "SELECT*FROM pengunjung WHERE Nama LIKE '%$cari%' or Alamat LIKE '%$cari%'";
$result = $konek->query ($Tampil)
?>
<table class="table table-striped table-hover">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No_telp</th>
      <th scope="col">Tujuan</th>
      <th scope="col">Jenis_kelamin</th>
      <th scope="col">waktu</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
  <?php
  while ($s=$result->fetch_assoc()){
  @$no++;
  ?>
    <tr>
        <th scape="row"><?=$no;?></th>
        <td><?= $s['Nama']?></td>
        <td><?= $s['Alamat']?></td>
        <td><?= $s['No_telp']?></td>
        <td><?= $s['Tujuan']?></td>
        <td><?= $s['Jenis_kelamin']?></td>
        <td><?= $s['Waktu']?></td>

        <td>
    <button class="btn btn-danger" onclick="confirmDelete(<?= $s['no']?>)"><i class="bi bi-trash"></i></button>
    <button class="btn btn-success" onclick="document.location.href='update.php?id=<?= $s['no']?>'"><i class="bi bi-pencil-square"></i></button>
</td>

<script>
    function confirmDelete(id) {
        var confirmation = confirm("apakah anda ingin menghapus ini");
        if (confirmation) {
            document.location.href = 'hapus.php?id=' + id;
        }
    }
</script>

        </tr>
        <?php
        }
        ?>

