<?php
// Tangkap form registrasi
require_once('class_mahasiswa.php');

class Mahasiswa {
    public $nim;
    public $nama;
    public $jk;
    public $prodi;
    public $domisili;
    public $grade;

    function __construct($nim, $nama, $jk, $prodi, $domisili, $grade) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jk = $jk;
        $this->prodi = $prodi;
        $this->domisili = $domisili;
        $this->grade = $grade;
    }

    function predikat_ipk(){
        if ($this->grade < 2.0 ) return "Cukup";
        elseif ($this->grade >= 2.0 && $this->grade < 3.0) return "Baik";
        elseif ($this->grade >= 3.0 && $this->grade < 3.75) return "Memuaskan";
        elseif ($this->grade >= 3.75 && $this->grade <= 4) return "Cumlaude";
    }
}

// Memeriksa apakah data telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mahasiswa = new Mahasiswa($_POST['nim'], $_POST['nama'], $_POST['jk'], $_POST['prodi'], $_POST['domisili'], $_POST['grade']);

    // Menampilkan data penilaian
    echo "<fieldset class='mx-5 border p-2'>";
    echo "<legend>Hasil Penilaian</legend>";
    echo "NIM: " . $mahasiswa->nim;
    echo "<br> Nama: " . $mahasiswa->nama;
    echo "<br> Jenis Kelamin: " . $mahasiswa->jk;
    echo "<br> Program Studi: " . $mahasiswa->prodi;
    echo "<br> Domisili: " . $mahasiswa->domisili;
    echo "<br> Grade: " . $mahasiswa->grade;
    echo "<br> Predikat IPK: " . $mahasiswa->predikat_ipk();
    echo "</fieldset>";
}
?>
