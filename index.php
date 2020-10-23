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
    <title>Fake News</title>

    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22256%22 height=%22256%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%23da185c%22></rect><path d=%22M44.56 78.80L44.56 78.80L32.16 78.80Q30.64 78.80 29.96 78.12Q29.28 77.44 29.28 75.92L29.28 75.92L29.28 24.08Q29.28 22.56 29.96 21.88Q30.64 21.20 32.16 21.20L32.16 21.20L67.84 21.20Q69.36 21.20 70.04 21.88Q70.72 22.56 70.72 24.08L70.72 24.08L70.72 33.60Q70.72 35.12 70.04 35.80Q69.36 36.48 67.84 36.48L67.84 36.48L47.44 36.48L47.44 44.80L61.36 44.80Q62.88 44.80 63.56 45.48Q64.24 46.16 64.24 47.68L64.24 47.68L64.24 57.28Q64.24 58.80 63.56 59.48Q62.88 60.16 61.36 60.16L61.36 60.16L47.44 60.16L47.44 75.92Q47.44 77.44 46.76 78.12Q46.08 78.80 44.56 78.80Z%22 fill=%22%23fff%22></path></svg>" />
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
    <a href="/index.php">
        <img src="./img/fake-ews.svg">
    </a>

</nav>

<main>

    <div class="grid">

        <?php foreach ($articles as $article) : ?>
            <?php
            $title = $article['title'];
            $likes = $article['likes'];
            $published_date = $article['published_date'];
            $img = $article['img'];
            $summary = $article['summary'];
            $author = $article['author']; ?>

            <article>
                <a href="/post.php?id=<?php= $article['id']; ?>">
                    <img src="<?= $img; ?>">
                    <p class="published-date"><?= "$published_date $author"; ?></p>
                    <h2><?= ucwords("$title"); ?></h2>
                    <p class="summary"><?= $summary; ?></p>
                </a>
                <div class="like-button">
                    <a href="#"><?= $likes; ?></a>
                </div>

            </article>
        <?php endforeach; ?>
    </div>

    <aside>

        <h2>Articles</h2>
        <ul>

            <?php foreach ($articles as $article) : ?>

                <?php $title = $article['title']; ?>

                <a href="#" class="aside-links">
                    <li><?= ucwords("$title"); ?></li>
                </a>

            <?php endforeach; ?>
        </ul>

    </aside>


</main>

<footer>
    <h2>
        FAKE NEWS Media Group
    </h2>

    <p>
        © 2020 fake news media group
    </p>

</footer>

<body>
</body>

</html>