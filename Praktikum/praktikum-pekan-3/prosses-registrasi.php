<?php
//tangkap form register
$nim = $_POST['nim'];
$nama = $_POST['nl'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];



echo "NIM &emsp; : $nim";
echo "<br> Nama &emsp; : $nama";
echo "<br> Jenis Kelamin &emsp; : $jk";
echo "<br> Program Studi &emsp; : $prodi";
echo "<br> Skill Web & Programming &emsp; : " . join(', ', $skills);
echo "<br> Domisili &emsp; : $domisili";
echo "<br> Email &emsp; : $email";