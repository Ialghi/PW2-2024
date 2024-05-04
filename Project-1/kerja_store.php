<?php
include_once("koneksi.php");

//menagkap data dari form
$nama = $_POST["nama"];

//buat query insert
$query = "INSERT INTO unit_kerja (nama) VALUES ('$nama')";

//eksekusi query
if ($dbh->query($query)) {
    header("location: unit_kerja.php");
} else {
    echo "<script>alert('Gagal menambahkan unit kerja.'); window.location.href='unit_kerja.php';</script>";
}
