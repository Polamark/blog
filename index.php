<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="stylesheets/output.css" rel="stylesheet">
    <title>Home - Blog</title>
</head>
<body class="w-screen overflow-x-hidden bg-gray-100 min-h-screen">
<?php
require_once 'components/header.php';
require_once 'components/functions.php';
global $posts;
global $authors;
init();?>

<section class="w-screen h-fit px-10 flex flex-wrap justify-center">
    <?php foreach ($_SESSION['posts'] as $post): ?>
        <a href="detail.php?id=<?=$post["id"]?>">
            <article class="flex flex-col flex-1 bg-white shadow-lg rounded-lg p-10 m-5 max-w-100 transition-all duration-300 hover:shadow-xl hover:scale-105">
                <h2 class="text-4xl font-semibold"><?=$post["title"]?></h2>
                <h3>By: <span class="font-semibold"> <?=$post["author"]["userName"]?></span></h3>
                <p class="truncate mt-4 line-clamp-3 whitespace-break-spaces leading-4.5"><?=$post["content"]?></p>
            </article>
        </a>
    <?php endforeach;?>
</section>
</body>
</html>
