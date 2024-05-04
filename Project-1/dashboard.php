<?php
include_once("top.php");
include_once("menu.php");

if (!isset($_SESSION['name'])) {
    header('Location: login.html');
}

?>



<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Dashboard</h3>

        <p class="mb-5">Welcome to Community Health Center dashboard <?= $_SESSION['name']; ?>!</p>
        <h4>Periksa Pasien</h5>
        <a href="periksa_pasien.php" class="btn btn-primary">Periksa Pasien</a>

    </div>
</main>

<?php
include_once("bottom.php");

?>

