<?php

$sections = [
    'echo',
    'variable',
    'const',
    'komentar',
    'var_dump',
    'heredoc',
    'null',
    'type_cast',
    'type_juggle',
]


    ?>

<nav id="toc">
    <ul>
        <?php
        foreach ($sections as $section) {
            echo "<li><a href='/dasar/$section.php'>$section</a></li>";
        }
        ?>
    </ul>
</nav>