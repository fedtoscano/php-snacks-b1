<?php

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
</head>
<body>

<ul>
    <?php foreach ($posts as $date => $articles): ?>
        <ul><?= $date ?>
            <?php foreach ($articles as $singleArticle): ?> 
                <li><strong>Titolo dell'articolo: </strong><?= $singleArticle['title']?></li>
                <li><strong>Autore dell'articolo: </strong><?= $singleArticle['author']?></li>
                <li><strong>Testo dell'articolo: </strong><?= $singleArticle['text']?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</ul>



</body>
</html>