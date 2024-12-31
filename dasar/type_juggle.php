<?php
$title = "Type Juggling - Latihan PHP";
$headline = "Type Juggling dalam PHP";

ob_start();
?>

<h1><?= $headline ?></h1>

<?php
$umur = 22;

if ($umur == '22') {
    echo 'dua dua! <br />';
}

$harga = '22000 rupiah';
$diskon = 10;

echo 'harga akhir adalah ' . $harga - $harga / 100 * $diskon . ' rupiah';

# end of ob

$content = ob_get_clean();
require '../view/base.view.php';
?>