<?php

require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

$articleId = $_GET['id'];
?>

<div class="grid postgrid">
    <article>
        <?php $post = getPostById($articles, (int)$articleId);

        $title = $post['title'];
        $content = $post['content'];
        $published_date = $post['published_date'];
        $img = $post['img'];
        $likes = $post['likes'];
        $author = $post['author'];
        ?>

        <h2><?= ucwords("$title"); ?></h2>
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
</div>

<?php require __DIR__ . '/footer.php'; ?>