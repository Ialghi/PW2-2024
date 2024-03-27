<?php
include_once("top.php");
include_once("menu.php");
include_once("koneksi.php");

$query = "SELECT * FROM pasien";
$pasiens = $dbh->query($query);
?>


<main>
    <div class="container-fluid px-4">
        <div class="d-flex mt-4">
            <h3>Daftar Pasien</h3>
            <a href="#" class="btn btn-primary ms-auto mx-5">+ Pasien</a>
        </div>

        <table class="table mt-4">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tgl lahir</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            <?php $no = 0; foreach($pasiens as $pasien):?>
                <tr>
                    <td><?= $no+=1?></td>
                    <td><?= $pasien['nama'];?></td>
                    <td><?= $pasien['tmp_lahir'];?></td>
                    <td><?= $pasien['tgl_lahir'];?></td>
                    <td><?= $pasien['gender'];?></td>
                    <td><?= $pasien['alamat'];?></td>
                    <td>
                        <a class="btn btn-primary" href="#"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-danger" href="#"><i class="fas fa-trash"></i></a>

                        
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</main>

<?php
include_once("bottom.php");
?>