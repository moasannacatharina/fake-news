<?php

require __DIR__ . '/data.php';

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">

</head>

<nav>

</nav>

<main>

    <?php foreach ($articles as $article) : ?>
        <?php $title = $article['title'];
        $content = $article['content'];
        $published_date = $article['published_date'];
        $img = $article['img']; ?>

        <article>
            <h3><?= ucwords("$title"); ?></h3>
            <img src="<?= $img; ?>">
            <p><?= $content; ?></p>
            <p><?= $published_date; ?></p>
        </article>

    <?php endforeach; ?>


</main>

<footer>


</footer>

<body>
</body>

</html>