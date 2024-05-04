<?php
include_once("koneksi.php");

//menangkap data dari form
$namadok = $_POST["dokter_id"];
$namapas = $_POST["pasien_id"];
$tanggal = $_POST["tanggal"];
$beratbdn = $_POST["berat_badan"];
$tinggibdn = $_POST["tinggi_badan"];
$tensi = $_POST["tensi"];
$keluhan = $_POST["keterangan"];

//buat query insert
$query = "INSERT INTO periksa (dokter_id, pasien_id, tanggal, berat_badan, tinggi_badan, tensi, keterangan) VALUES ('$namadok', '$namapas', '$tanggal', '$beratbdn', '$tinggibdn', '$tensi', '$keluhan')";

//eksekusi query
if ($dbh->query($query)) {
    header("location: periksa.php");
} else {
    echo "Data pemeriksaan gagal ditambahkan";
}