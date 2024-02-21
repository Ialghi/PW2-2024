<?php
// variabel atau syntax php diakhiri dengan ";"
// membuat variabel bisa (A-Z,0-9,_) #angka tidak boleh didepan
$nama = "budi";

// variabel array/list didevinisikan dengan "[]" & array multidimensi/array didalam array  
$mahasiswa_1 = ["agus","sistem informasi", 001, [3.6, 3.5, 4.0]];

// panggil variable menggunakan "echo"
echo $nama;

// panggil array/list
echo 'nama: ' . $mahasiswa_1[0] . "<br>"; //concatenation

//untuk menggabungkan string dan variabel nenggunakan tanda "" bukan ''
echo "prodi: $mahasiswa_1[1]" . "<br>"; //string interpolation

//memanggil array multidimensi 
echo 'ips semester 1: ' . $mahasiswa_1[3][0];
?>