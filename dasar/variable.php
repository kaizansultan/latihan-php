<?php
$title = "Variabel - Latihan PHP";
$headline = "Variabel dalam PHP";


ob_start();
?>

<h1><?= $headline ?></h1>
<ul>
    <li>dimulai dengan tanda dolar <code>$</code></li>
    <li>huruf pertama harus berupa huruf atau underscore</li>
    <li>sisanya bisa berupa alphanumeric dan atau underscore</li>
    <li>variabel di PHP bersifat <i>case-sensitive</i></li>
</ul>

<?php
$content = ob_get_clean();
require '../view/base.view.php';
?>