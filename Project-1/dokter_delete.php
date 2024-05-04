<?php
include_once("koneksi.php");

//menagkap data dari url
$id = $_GET["id"];


//buat query insert
$query = "DELETE FROM paramedik WHERE id='$id'";

//eksekusi query
if ($dbh->query($query)) {
    header("location: dokter.php");
} else {
    echo "Data dokter gagal dihapus";
}

