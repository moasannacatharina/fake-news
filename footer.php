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
    <h2 class="footer-title">
        FAKE NEWS Media Group
    </h2>

    <p>
        © 2020 fake news media group
    </p>

</footer>

<body>
</body>

</html>