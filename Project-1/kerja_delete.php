<?php
include_once("koneksi.php");

//menagkap data dari url
$id = $_GET["id"];


//buat query insert
$query = "DELETE FROM unit_kerja WHERE id='$id'";

//eksekusi query
if ($dbh->query($query)) {
    header("location: unit_kerja.php");
} else {
    echo "<script>alert('Gagal menghapus unit kerja.'); window.location.href='unit_kerja.php';</script>";
}
