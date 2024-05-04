<?php 
include_once("koneksi.php");

//menangkap data email dan password dari form login
$email = $_POST['email'];
$password = md5($_POST['password']);

//query untuk menangkap data user berdasarkan email dan password
$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $dbh->query($query)->fetch();

if ($result) {
    // Jika user ditemukan, set session dan redirect ke halaman utama
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $result['name'];
    header("Location: dashboard.php");
} else {
    // Jika user tidak ditemukan, kirim pesan error
    header("Location: index.html");
}