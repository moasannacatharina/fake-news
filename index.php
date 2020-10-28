<?php

require __DIR__ . '/header.php';

require __DIR__ . '/data.php';



// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

?>

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
            <a href="/post.php?id=<?= $article['id'] ?>">
                <img src="<?= $img; ?>" class="front-page-img">
                <p class="published-date"><?= "$published_date $author"; ?></p>
                <h2><?= ucwords("$title"); ?></h2>
                <p class="summary"><?= $summary; ?></p>
            </a>
            <div class="like-button">
                <a href="#" class="likes"><?= $likes; ?></a>
            </div>

        </article>
    <?php endforeach; ?>
</div>

<?php require __DIR__ . '/footer.php'; ?>