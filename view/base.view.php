<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../style/drupe.css">
    <link rel="stylesheet" href="../style/base.css">
    <link rel="stylesheet" href="../style/toc.css">
</head>

<body>
    <div id="ship">
        <main>
            <?= $content ?? '<pre>tidak ada konten yang ditampilkan ... </pre>' ?>
        </main>

        <?php include 'toc.view.php'; ?>
    </div>
</body>