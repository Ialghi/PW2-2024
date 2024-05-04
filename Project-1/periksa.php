<?php
include_once("top.php");
include_once("menu.php");
include_once("koneksi.php");

$query = "SELECT * FROM periksa";
$periksa = $dbh->query($query);
?>


<main>
    <div class="container-fluid px-4">
        <div class="d-flex mt-4">
            <h3>Hasil Pemeriksaan</h3>
            <a href="periksa_pasien.php" class="btn btn-success ms-auto mx-5">Periksa</a>
        </div>

        <table class="table mt-4">
            <tr>
                <th>No</th>
                <th>Pasien</th>
                <th>Dokter</th>
                <th>Tanggal</th>
                <th>Berat badan</th>
                <th>Tinggi Badan</th>
                <th>Tensi</th>
                <th>Keluhan</th>
                <th>Opsi</th>
            </tr>
            <?php $no = 0; foreach($periksa as $prs):
                $namapasien = $dbh->query("SELECT nama FROM pasien WHERE id = " . $prs['pasien_id'])->fetch();
                $namadok = $dbh->query("SELECT nama FROM paramedik WHERE id = " . $prs['dokter_id'])->fetch();
            ?>
                <tr>
                    <td><?= $no+=1?></td>
                    <td><?= $namapasien ? $namapasien['nama'] : 'Tidak diketahui';?></td>
                    <td><?= $namadok ? $namadok['nama'] : 'Tidak diketahui';?></td>
                    <td><?= $prs['tanggal'];?></td>
                    <td><?= $prs['berat_badan'];?></td>
                    <td><?= $prs['tinggi_badan'];?></td>
                    <td><?= $prs['tensi'];?></td>
                    <td><?= $prs['keterangan'];?></td>
                    <td>
                        <a class="btn btn-success m-1" href="periksa_edit.php?id=<?= $prs['id']?>"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-danger m-1" href="periksa_delete.php?id=<?= $prs['id']?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</main>

<?php
include_once("bottom.php");
?>