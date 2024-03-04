<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$panggil = $konek->query ("select * from pengunjung where no ='$id'");
$a = $panggil ->fetch_array();
?>


<div class="container mt-2">
    <form class ="form-control mt-3 bg-secondary text-light" action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nama" value ="<?= $a['Nama']?>">
    
    <label for="exampleInputEmail1" class="form-label">Alamat :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Alamat" value ="<?= $a['Alamat']?>">
    
    <label for="exampleInputEmail1" class="form-label">No_telp</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="No_telp" value ="<?= $a['No_telp']?>">

    <label for="exampleInputEmail1" class="form-label">Tujuan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Tujuan" value ="<?= $a['Tujuan']?>">
    
    <label for="exampleInputEmail1" class="form-label">Jenis_kelamin:</label>
    <div class="form-check">
    <input class="form-check-input" id= "exampleInputEmail1" type="radio"aria-describedby="emailHelp" name="jenis_kelamin" value="laki-laki">
    <label class="form-check-label" for="flexRadioDisabled">
      Laki-laki
</label>
</div>
<div class="form-check">
<input class="form-check-input" id= "exampleInputEmail1" type="radio"aria-describedby="emailHelp" name="jenis_kelamin" value="perempuan">
    <label class="form-check-label" for="flexRadioDisabled">
      Perempuan
</label>
</div>

    <div class="text-end">
  <button name="edite" type="submit" class="btn btn-primary mt-3">Save</button>
  </div>
</form>
</div>

<?php
if (! isset($_POST['edite'])){
}else{
$update = $konek->query("update pengunjung set Nama='$_POST[Nama]', Alamat= '$_POST[Alamat]', No_telp='$_POST[No_telp]', Tujuan= '$_POST[Tujuan]',Jenis_kelamin= '$_POST[jenis_kelamin]' where no='$id'");
?>
<div class="alert alert-info mt-3" role="alert">
<?php
echo "data berhasil diubah<a href='tampil.php'> kembali</a>";
?>
</div>
<?php
}
?>