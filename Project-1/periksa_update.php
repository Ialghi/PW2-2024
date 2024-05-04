<?php
include_once("koneksi.php");

//menangkap data dari form
$id = $_POST["id"];
$namadok = $_POST["dokter_id"];
$namapas = $_POST["pasien_id"];
$tanggal = $_POST["tanggal"];
$beratbdn = $_POST["berat_badan"];
$tinggibdn = $_POST["tinggi_badan"];
$tensi = $_POST["tensi"];
$keluhan = $_POST["keterangan"];

//buat query update
$query = "UPDATE periksa SET dokter_id='$namadok', pasien_id='$namapas', tanggal='$tanggal', berat_badan='$beratbdn', tinggi_badan='$tinggibdn', tensi='$tensi', keterangan='$keluhan' WHERE id='$id'";

//eksekusi query
if ($dbh->query($query)) {
    header("location: periksa.php");
} else {
    echo "Data pemeriksaan gagal diupdate";
}