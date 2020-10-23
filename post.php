<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

$articleId = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake News</title>

    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22256%22 height=%22256%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%23f3c1b8%22></rect><path fill=%22%235553ee%22 d=%22M60.88 55.56L49.52 55.56L49.52 75.88L38.32 75.88L38.32 24.12L61.68 24.12L61.68 33.80L49.52 33.80L49.52 46.20L60.88 46.20L60.88 55.56Z%22></path></svg>" />
    <link rel="stylesheet" href="./CSS/global.css">
    <link rel="stylesheet" href="./CSS/grid.css">
    <link rel="stylesheet" href="./CSS/media.css">
    <link rel="stylesheet" href="./CSS/typography.css">


    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav>
        <a href="/index.php">
            <img src="./img/fake-ews.svg">
        </a>

    </nav>
    <main>

        <div class="grid">
            <article>
                <?php $post = getPostById($articles, (int)$articleId);

                $title = $post['title'];
                $content = $post['content'];
                $published_date = $post['published_date'];
                $img = $post['img'];
                $likes = $post['likes'];
                $author = $post['author'];
                ?>

                <h2><?= $title; ?></h2>
                <img src="<?= $post['img']; ?>">
                <p class="published-date"><?= "$published_date $author"; ?></p>
                <p class="content"><?= $content; ?></p>
                <div class="like-links">

                    <a href="#" class="like-links-like"><?= $likes; ?></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>

                </div>
            </article>
            <article class="back-button">
                <a href="/index.php">
                    <p>
                        Back to main page
                    </p>
                </a>
            </article>
        </div>


        <aside>

            <h2>Articles</h2>
            <ul>

                <?php foreach ($articles as $article) : ?>

                    <?php $title = $article['title']; ?>

                    <a href="/post.php?id=<?= $article['id'] ?>" class="aside-links">
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

</body>

</html>