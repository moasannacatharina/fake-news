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

    <link rel="stylesheet" href="./CSS/global.css">
    <link rel="stylesheet" href="./CSS/grid.css">
    <link rel="stylesheet" href="./CSS/media.css">
    <link rel="stylesheet" href="./CSS/typography.css">


    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">

</head>


<nav>
    <h1>
        FAKE NEWS
    </h1>

</nav>

<main>

    <div class="grid">

        <?php foreach ($articles as $article) : ?>
            <?php
            $title = $article['title'];
            $content = $article['content'];
            $published_date = $article['published_date'];
            $img = $article['img'];
            $summary = $article['summary'];
            $author = $article['author']; ?>

            <article>
                <a href="/post.php?id=1">
                    <img src="<?= $img; ?>">
                    <p class="published-date"><?= "$published_date $author"; ?></p>
                    <h2><?= ucwords("$title"); ?></h2>
                    <p class="summary"><?= $summary; ?></p>
                </a>
            </article>

        <?php endforeach; ?>
    </div>

    <aside>


    </aside>


</main>

<footer>


</footer>

<body>
</body>

</html>