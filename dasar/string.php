<?php
$title = "String - Latihan PHP";
$headline = "String dalam PHP";

$nama_depan = 'Kaizan';
$nama_belakang = "Sultan";

# Concatenate
$nama_lengkap = $nama_depan . ' ' . $nama_belakang;

# Interpolation
$panggilan = "Bang $nama_depan"; // harus petik dua

ob_start();
?>

<h1><?= $headline ?></h1>

<?php
$content = ob_get_clean();
require '../view/base.view.php';
?>