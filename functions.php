<?php

declare(strict_types=1);


function getPostById(array $articles, int $id): array
{
    foreach ($articles as $article) {
        if ($article['id'] === $id) {
            return $article;
        };
    };
};
