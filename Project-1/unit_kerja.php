<?php
include_once("top.php");
include_once("menu.php");
include_once("koneksi.php");

$query = "SELECT * FROM unit_kerja";
$kerja = $dbh->query($query);
?>


<main>
    <div class="container-fluid px-4">
        <div class="d-flex mt-4">
            <h3>Unit Kerja</h3>
        </div>
        <p>Community health center</p>
        <table class="table mt-4">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Opsi</th>
            </tr>
            <?php $no = 0;
            foreach ($kerja as $ker) : ?>
                <tr>
                    <td><?= $no += 1 ?></td>
                    <td><?= $ker['nama']; ?></td>
                    <td>
                        <a class="btn btn-danger m-1" href="kerja_delete.php?id=<?= $ker['id'] ?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        
    </div>
    <div class="container-fluid d-flex mt-3 mb-5 px-4">
        <form class="w-100 d-flex" action="kerja_store.php" method="POST">
            <div class="form-group row w-100">
                <label for="nama" class="col-4 col-form-label">Tambah Unit Kerja</label>
                <div class="col-6">
                    <input id="nama" name="nama" type="text" class="form-control" required="required">
                </div>
                <div class="col-2">
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</main>
<?php
include_once("bottom.php");
?>