<?php
include "koneksi.php";
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$No_telp = $_POST['No_telp'];
$Tujuan = $_POST['Tujuan'];
$Jenis_kelamin = $_POST['jenis_kelamin'];
if($Nama==""){
  echo "maaf nama wajib di isi";
}else{
$simpan = $konek->query("insert into pengunjung(Nama,Alamat,No_telp,Tujuan,Jenis_kelamin) values ('$Nama','$Alamat','$No_telp','$Tujuan','$Jenis_kelamin')");
}
?>
<script>
  document.location.href='input.php?notif=berhasil';
</script>
