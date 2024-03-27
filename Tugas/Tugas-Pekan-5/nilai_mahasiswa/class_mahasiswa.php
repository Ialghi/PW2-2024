<?php
// Array asosiatif terdiri dari key dan value
$prodi = [
    'SI' => 'Sistem Informasi',
    'TI' => 'Teknik Informatika',
    'BD' => 'Bisnis Digital'
];

$domisili = ['Jakarta', 'Bogor', 'Depok', 'Tanggerang', 'Bekasi', 'Lainnya'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <fieldset class="mx-5 border p-2">
        <legend>Form Penilaian</legend>

        <form action="proses_mahasiswa.php" method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki" required="required">
                        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan" required="required">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="prodi" name="prodi" class="custom-select" required="required">
                        <!-- Menggunakan array asosiatif untuk menampilkan pilihan -->
                        <?php foreach ($prodi as $key => $value) : ?>
                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label>
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select" required="required">
                        <!-- Menggunakan array untuk menampilkan pilihan -->
                        <?php foreach ($domisili as $value) : ?>
                            <option value="<?php echo $value ?>"><?php echo $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="grade" class="col-4 col-form-label">Grade</label>
                <div class="col-8">
                    <input id="grade" name="grade" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </fieldset>
</body>

</html>
