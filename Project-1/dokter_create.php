<?php
include_once("top.php");
include_once("menu.php");
include_once("koneksi.php");
$unitKerja = $dbh->query("SELECT * FROM unit_kerja");
?>



<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Dokter</h1>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form action="dokter_store.php" method="POST">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="telpon" class="col-4 col-form-label">No. Telepon</label>
                <div class="col-8">
                    <input id="telpon" name="telpon" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                <div class="col-8">
                    <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                <div class="col-8">
                    <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" required="required">
                        <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" required="required" class="custom-control-input" value="P">
                        <label for="gender_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="unit_kerja_id" class="col-4 col-form-label">Unit kerja</label>
                <div class="col-8">
                    <select id="unit_kerja_id" name="unit_kerja_id" required="required" class="custom-select">
                        <option value="">--Pilih Unit Kerja--</option>
                        <?php foreach ($unitKerja as $uk): ?>
                            <option value="<?= $uk["id"] ?>"><?= $uk["nama"] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Kategori</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="kategori" id="kategori_0" type="radio" class="custom-control-input" value="Umum" required="required">
                        <label for="kategori_0" class="custom-control-label">Umum</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="kategori" id="kategori_1" type="radio" required="required" class="custom-control-input" value="Specialis">
                        <label for="kategori_1" class="custom-control-label">Specialis</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
                    <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control" required="required"></textarea>
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