<?php
include_once("koneksi.php");

//menagkap data dari url
$id = $_GET["id"];


//buat query insert
$query = "DELETE FROM periksa WHERE id='$id'";

//eksekusi query
if ($dbh->query($query)) {
    header("location: periksa.php");
} else {
    echo "Data periksa gagal dihapus";
}


