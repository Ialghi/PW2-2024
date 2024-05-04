<?php
include_once("top.php");
include_once("menu.php");
include_once("koneksi.php");
$pasien = $dbh->query("SELECT * FROM pasien");
$dokter = $dbh->query("SELECT * FROM paramedik");
$id = $_GET['id'];

$periksa = $dbh->query("SELECT * FROM periksa WHERE id = $id")->fetch();
?>



<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Update Periksa Pasien</h1>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form action="periksa_update.php" method="POST">
            <input type="hidden" name="id" value="<?= $periksa['id'] ?>">
            <div class="form-group row">
                <label for="pasien_id" class="col-4 col-form-label">Nama Pasien</label>
                <div class="col-8">
                    <select id="pasien_id" name="pasien_id" class="custom-select" required="required">
                        <option value="">-- Pilih Pasien --</option>
                        <?php foreach ($pasien as $pas): ?>
                            <option <?= $periksa['pasien_id'] == $pas['id'] ? 'selected' : '' ?> value="<?= $pas["id"] ?>"><?= $pas["nama"] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="dokter_id" class="col-4 col-form-label">Nama Dokter</label>
                <div class="col-8">
                    <select id="dokter_id" name="dokter_id" class="custom-select" required="required">
                        <option value="">-- Pilih Dokter --</option>
                        <?php foreach ($dokter as $dok): ?>
                            <option <?= $periksa['dokter_id'] == $dok['id'] ? 'selected' : '' ?> value="<?= $dok["id"] ?>"><?= $dok["nama"] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                <div class="col-8">
                    <input id="tanggal" name="tanggal" type="date" class="form-control" required="required" value="<?= $periksa['tanggal'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="berat_badan" class="col-4 col-form-label">Berat Badan</label>
                <div class="col-8">
                    <input id="berat_badan" name="berat_badan" type="text" class="form-control" required="required" value="<?= $periksa['berat_badan'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggi_badan" class="col-4 col-form-label">Tinggi Badan</label>
                <div class="col-8">
                    <input id="tinggi_badan" name="tinggi_badan" type="text" class="form-control" required="required" value="<?= $periksa['tinggi_badan'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tensi" class="col-4 col-form-label">Tensi</label>
                <div class="col-8">
                    <input id="tensi" name="tensi" type="text" class="form-control" required="required" value="<?= $periksa['tensi'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="keterangan" class="col-4 col-form-label">Keluhan</label>
                <div class="col-8">
                    <textarea id="keterangan" name="keterangan" cols="40" rows="3" class="form-control" required="required"><?= $periksa['keterangan'] ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</main>

<?php
include_once("bottom.php");

?>