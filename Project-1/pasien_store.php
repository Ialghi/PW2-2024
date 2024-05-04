<?php
include_once("koneksi.php");

//menagkap data dari form
$nama = $_POST["nama"];
$kode = $_POST["kode"];
$email = $_POST["email"];
$tgl_lahir = $_POST["tgl_lahir"];
$tmp_lahir = $_POST["tmp_lahir"];
$gender = $_POST["gender"];
$alamat = $_POST["alamat"];
$kelurahan_id = $_POST["kelurahan_id"]; 

//buat query insert
$query = "INSERT INTO pasien (nama, kode, email, tgl_lahir, tmp_lahir, gender, alamat, kelurahan_id) VALUES ('$nama', '$kode', '$email', '$tgl_lahir', '$tmp_lahir', '$gender', '$alamat', '$kelurahan_id')";

//eksekusi query
if ($dbh->query($query)) {
    header("location: pasien.php");
} else {
    echo "Data pasien gagal ditambahkan";
}

