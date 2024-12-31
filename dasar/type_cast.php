<?php
$title = "Type Casting - Latihan PHP";
$headline = "Type Casting dalam PHP";

ob_start();
?>

<h1><?= $headline ?></h1>

<?php

## INTEGER
echo '<h2>Integer</h2>';

$nama = 'Kaizan Sultan';
var_dump((int) $nama);
echo '<br />';

$harga = '15000 rupiah';
var_dump((int) $harga);
echo '<br />';

$orang = 'ada 44 orang di sana';
echo (int) $orang;

echo '<br />';

$biji = '44 pria di sana';
echo (int) $biji * 2;
echo '<br />';

echo (int) 12.8975; // dibulatkan ke 0
echo '<br />';

## BOOLEAN

echo '<h2>Boolean</h2>';

echo (bool) 'nama aing Kaizan';
echo '<br />';

echo (bool) 225;
echo '<br />';

echo (bool) '';
echo '<br />';

echo var_dump((bool) '');
echo '<br />';

## STRING

echo '<h2>String</h2>';

echo (string) true;
echo '<br />';

$numbers = [1, 2, 3];
$str = (string) $numbers;

echo $str; // Array

# end of ob

$content = ob_get_clean();
require '../view/base.view.php';
?>