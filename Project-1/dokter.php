<?php
include_once("top.php");
include_once("menu.php");
include_once("koneksi.php");

$query = "SELECT * FROM paramedik";
$dokters = $dbh->query($query);
?>


<main>
    <div class="container-fluid px-4">
        <div class="d-flex mt-4">
            <h3>Daftar Dokter</h3>
            <a href="dokter_create.php" class="btn btn-success ms-auto mx-5">+ Paramedik</a>
        </div>

        <table class="table mt-4">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tgl lahir</th>
                <th>JK</th>
                <th>Kategori</th>
                <th>No. Telp</th>
                <th>Alamat</th>
                <th>Unit Kerja</th>
                <th>Opsi</th>
            </tr>
            <?php $no = 0; foreach($dokters as $dokter):
                $unitKerja = $dbh->query("SELECT nama FROM unit_kerja WHERE id = " . $dokter['unit_kerja_id'])->fetch();
            ?>
                <tr>
                    <td><?= $no+=1?></td>
                    <td><?= $dokter['nama'];?></td>
                    <td><?= $dokter['tmp_lahir'];?></td>
                    <td><?= $dokter['tgl_lahir'];?></td>
                    <td><?= $dokter['gender'];?></td>
                    <td><?= $dokter['kategori'];?></td>
                    <td><?= $dokter['telpon'];?></td>
                    <td><?= $dokter['alamat'];?></td>
                    <td><?= $unitKerja ? $unitKerja['nama'] : 'Tidak diketahui';?></td>
                    <td>
                        <a class="btn btn-success m-1" href="dokter_edit.php?id=<?= $dokter['id']?>"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-danger m-1" href="dokter_delete.php?id=<?= $dokter['id']?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</main>

<?php
include_once("bottom.php");
?>