<?php
$title = "Konstan - Latihan PHP";
$headline = "Constant dalam PHP";

require '../view/base.view.php';

define('PAJAK', 12);
const HARGA = 140_000;

echo PAJAK . "<br />";
echo HARGA + HARGA / PAJAK * 100;

$prefix = "HARGA_";

define($prefix . 'JERUK', 11000);

/*
Bedanya `define` dengan `const`:
- define dinyatakan saat runtime
- const dinyatakan saat compile

sehingga `define` bisa digunakan saat:
- dalam conditional
- nama katakuncinya hasil dari ekspresi

PHP ^7 bisa menerima `array` untuk `define`
sebelumnya ga bisa
*/
?>

<body>
    <h1><?= $headline ?></h1>
    <ul>
        <li>dimulai dengan tanda dolar <code>$</code></li>
        <li>huruf pertama harus berupa huruf atau underscore</li>
        <li>sisanya bisa berupa alphanumeric dan atau underscore</li>
        <li>variabel di PHP bersifat <i>case-sensitive</i></li>
    </ul>
</body>