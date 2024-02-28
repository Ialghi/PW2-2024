<?php
//tangkap input form menggunkana $_POST['name']
$cstmr = $_POST['cstmr'];
$prdk = $_POST['prdk'];
$jlmh = $_POST['jlmh'];

// array harga produk
$harga = [
    'TV' => 4200000,
    'Kulkas' => 3100000,
    'Mesin cuci' => 3800000,
];

//hitung total harga
$total = $jlmh * $harga[$prdk];
//format number
$total = number_format($total);

//tampilkan/print inputannya
echo "Nama Customer: $cstmr";
echo "<br> Produk: $prdk";
echo "<br> Jumlah: $jlmh";
echo "<br> Total Harga: Rp $total";
