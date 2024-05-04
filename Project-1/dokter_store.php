<?php
include_once("koneksi.php");

//menagkap data dari form
$nama = $_POST["nama"];
$kategori = $_POST["kategori"];
$telpon = $_POST["telpon"];
$tgl_lahir = $_POST["tgl_lahir"];
$tmp_lahir = $_POST["tmp_lahir"];
$gender = $_POST["gender"];
$alamat = $_POST["alamat"];
$unitkerja = $_POST["unit_kerja_id"];

//buat query insert
$query = "INSERT INTO paramedik (nama, kategori, telpon, tgl_lahir, tmp_lahir, gender, alamat, unit_kerja_id) VALUES ('$nama', '$kategori', '$telpon', '$tgl_lahir', '$tmp_lahir', '$gender', '$alamat', '$unitkerja')";

//eksekusi query
if ($dbh->query($query)) {
    header("location: dokter.php");
} else {
    echo "Data dokter gagal ditambahkan";
}

