<?php
include "boot.php";
?>

<div class="container mt-2">
  <form class="form-control mt-3 bg-secondary text-light" action="prosesinput.php" method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama :</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nama" required>

      <label for="exampleInputEmail1" class="form-label">Alamat :</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Alamat" required>

      <label for="exampleInputEmail1" class="form-label">No_telp :</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="No_telp" required>

      <label for="exampleInputEmail1" class="form-label">Tujuan :</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Tujuan" required>

      <label for="exampleInputEmail1" class="form-label">Jenis_kelamin:</label>
      <div class="form-check">
        <input class="form-check-input" id="exampleInputEmail1" type="radio" aria-describedby="emailHelp" name="jenis_kelamin" value="laki-laki" required>
        <label class="form-check-label" for="flexRadioDisabled">
          Laki-laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" id="exampleInputEmail1" type="radio" aria-describedby="emailHelp" name="jenis_kelamin" value="perempuan" required>
        <label class="form-check-label" for="flexRadioDisabled">
          Perempuan
        </label>
      </div>

      <div class="text-end">
        <button type="submit" class="btn btn-info mt-3">Save</button>
      </div>
  </form>
</div>

<?php
if (isset($_GET['notif']) == 'Berhasil') {
?>
  <div class="alert alert-success" role="alert">
    <?php
    echo "Input data berhasil<a href='tampil.php'> kembali</a>";
    ?>
  </div>
<?php
}
?>