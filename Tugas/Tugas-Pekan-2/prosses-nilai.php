<?php
//tangkap input form menggunkana $_GET['name']
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];

//hitung nilai total (30% UTS + 35% UAS + 35% TUGAS)
$nilai_total = (30/100 * $uts)+(35/100 * $uas)+(35/100 * $tugas);

if ($nilai_total<0) {
    $Keterangan = 'Invalid';
}elseif ($nilai_total<55) {
    $Keterangan = 'Tidak Lulus';
}elseif ($nilai_total>100) {
    $Keterangan = 'Invalid';
}else{
    $Keterangan = 'Lulus';
}

//menghitung grade (0 s/d 35 = E) (36 s/d 55 = D) (56 s/d 69 = C) (70 s/d 84 = B) (85 s/d 100 = A) (Kurang dari 0, atau lebih besar dari 100 = I) 
if ($nilai_total<0){
    $grade = 'I';
}elseif ($nilai_total<35){
    $grade = 'E';
}elseif ($nilai_total<55){
    $grade = 'D';
}elseif ( $nilai_total<=69){
    $grade = 'C';
}elseif ( $nilai_total<84){
    $grade = 'B';
}elseif ( $nilai_total<=100){
    $grade = 'A';
}else{
    $grade ='I';
}


//menentukan predikat menggunakan switch case
switch ($grade){
    case 'A':
        $predikat = 'Sangat Memuaskan';
        break;
    case 'B':
        $predikat = 'Memuaskan';
        break;
    case 'C':
        $predikat = 'Cukup';
        break;
    case 'D':
        $predikat = 'Kurang';
        break;
    case 'E':
        $predikat = 'Sangat Kurang';
        break;
    case 'I':
        $predikat = 'Tidak Ada';
        break;
}

//tampilkan/print inputannya
echo "Nama Lengkap: $nama";
echo "<br> Mata Kuliah: $matkul";
echo "<br> Nilai UTS: $uts";
echo "<br> Nilai UAS: $uas";
echo "<br> Nilai Tugas: $tugas";
echo "<br> Keterangan: $Keterangan";
echo "<br> Grade: $grade";
echo "<br> Predikat: $predikat";