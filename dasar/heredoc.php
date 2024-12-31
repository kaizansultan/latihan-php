<?php
$title = "String - Latihan PHP";
$headline = "Srting dalam PHP";

$heredoc = <<<HTML
<h1>Heredoc dan Nowdoc</h1> 
<p>Perbedaanya:\n
    <ul>
        <li>heredoc menerima variable, nowdoc tidak</li>
        <li>heredoc merender escape char, nowdoc tidak</li>
        <li>nowdoc merender semuanya secara literal</li>
    </ul>
</p>
HTML;

$nowdoc = <<<'HTML'
<h1>Heredoc dan Nowdoc</h1> 
<p>Perbedaanya:\n
    <ul>
        <li>heredoc menerima variable, nowdoc tidak</li>
        <li>heredoc merender escape char, nowdoc tidak</li>
        <li>nowdoc merender semuanya secara literal</li>
    </ul>
</p>
HTML;

ob_start();
?>

<h1><?= $headline ?></h1>
<?= $heredoc ?>
<?= $nowdoc ?>

<?php
$content = ob_get_clean();
require '../view/base.view.php';
?>