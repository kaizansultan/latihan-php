<?php
$title = "Null - Latihan PHP";
$headline = "Null dalam PHP";

ob_start();
?>

<h1><?= $headline ?></h1>

<?php
# null artinya tidak ada nilai
$nullish = null;
var_dump($nullish);

echo '<br />';

# unset
$nama = 'Kaizan Sultan';
unset($nama);
// var_dump($nama); output -> NULL

var_dump(is_null($title));

$content = ob_get_clean();
require '../view/base.view.php';
?>