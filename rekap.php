<?php
include "boot.php";
include "koneksi.php";
?>

<div class="row" id="printDiv">
    <div class="col-md-12">
        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class=""> Rekap Pengunjung[<?= date('d-m-y')?>]</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="" class="text-center">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label> Dari Tanggal </label>
                                    <input class="form-control" type="date" name="tanggal1" value="<?= isset($_POST['tanggal1'])?$_POST['tanggal1']: date('y-m-d')?>" required>
                                </div>
                            </div>
                                <div class="col-md-3">
                                <div class="form-group">
                                    <label> Sampai Tanggal </label>
                                    <input class="form-control" type="date" name="tanggal2" value="<?= isset($_POST['tanggal2'])?$_POST['tanggal2']: date('y-m-d')?>" required>
                                </div>
                            </div>
                        </div>
                    <div class="row">  
                        <div class="col-md-4"></div>
                            <button class="btn btn-dark form-control mt-3" name="btampilkan"><i class="fa fa=search"></i>Tampilkan</button> 
                        </div>
                        <div class="col-md-2">
                            <a href="rekap.php" class="btn btn-danger form-control mt-3"> Kembali</a>
                            <button class="btn" onclick="printDiv('div1')"><i class="bi bi-printer-fill fs-1 text-primary"></i></button>
                        </div>
                    </div>
                </form>

                <?php
            if (isset($_POST['btampilkan'])) :
            ?>

<div id="div1">
    <div class="card mt-4">
        <div class="card-header bg-dark">
            Rekap Pengunjung
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                   <th scope="col">Nama</th>
                   <th scope="col">Alamat</th>
                   <th scope="col">No_telp</th>
                   <th scope="col">Tujuan</th>
                   <th scope="col">Jenis_kelamin</th>
                    <th scope="col">waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tampil = $konek->query("select * from pengunjung where waktu between'$_POST[tanggal1]' and '$_POST[tanggal2]'");
                    while ($s = $tampil-> fetch_array ()){
                        @$no++;
                    ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $s['Nama'] ?></td>
                            <td><?= $s['Alamat'] ?></td>
                            <td><?= $s['No_telp'] ?></td>
                            <td><?= $s['Tujuan'] ?></td>
                            <td><?= $s['Jenis_kelamin'] ?></td>
                            <td><?= $s['Waktu'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

<?php
endif;
?>

</div>

<script>
    function printDiv(el) {
        var a = document.body.innerHTML;
        var b = document.getElementById(el).innerHTML;
        document.body.innerHTML = b;
        window.print();
        document.body.innerHTML = a;
    }
</script>