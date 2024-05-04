<?php
include_once("koneksi.php");

//menangkap data dari form
$id = $_POST["id"];
$nama = $_POST["nama"];
$kategori = $_POST["kategori"];
$telpon = $_POST["telpon"];
$tgl_lahir = $_POST["tgl_lahir"];
$tmp_lahir = $_POST["tmp_lahir"];
$gender = $_POST["gender"];
$alamat = $_POST["alamat"];
$unitkerja = $_POST["unit_kerja_id"];

//buat query update
$query = "UPDATE paramedik SET nama='$nama', kategori='$kategori', telpon='$telpon', tgl_lahir='$tgl_lahir', tmp_lahir='$tmp_lahir', gender='$gender', alamat='$alamat', unit_kerja_id='$unitkerja' WHERE id='$id'";

//eksekusi query
if ($dbh->query($query)) {
    header("location: dokter.php");
} else {
    echo "Data dokter gagal diupdate";
}
