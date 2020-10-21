<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<body>
    <nav>
        <h1>
            FAKE NEWS
        </h1>

    </nav>
    <main>

        <div class="grid">
            <article>
                <?php $post = getPostById($articles, 1);

                $title = $post['title'];
                $content = $post['content'];
                $published_date = $post['published_date'];
                $img = $post['img'];
                $summary = $post['summary'];
                $author = $post['author'];
                ?>

                <h2><?= $title; ?></h2>
                <img src="<?= $post['img']; ?>">
                <p class="published-date"><?= "$published_date $author"; ?></p>
                <p class="content"><?= $content; ?></p>
            </article>
        </div>


        <aside>


        </aside>


    </main>

</body>

</html>