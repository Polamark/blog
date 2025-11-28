<?php

$authors = [
    1 => [
        'userName' => 'American guy',
        'password' => 'abc123',
    ],
];

$posts = [
    1 => [
        'id' => 1,
        'title' => 'First Post',
        'content' => 'nostrud anim nulla enim minim irure consectetur non ex minim quis ex est esse eu nostrud et excepteur nostrud minim minim voluptate laboris commodo adipisicing sit ex nulla aute et mollit minim deserunt esse laborum ut cillum et cupidatat laboris deserunt consectetur pariatur quis do velit laborum id cupidatat eu et exercitation exercitation excepteur sunt occaecat aute ut laborum do anim reprehenderit eiusmod occaecat laborum qui dolor voluptate ex labore ipsum eu esse sit anim nulla amet eiusmod irure enim tempor eiusmod nulla consequat quis reprehenderit sunt aliqua qui excepteur amet enim labore sunt eiusmod culpa dolor irure quis laboris',
        'author' => $authors[1],
    ],
    2 => [
        'id' => 2,
        'title' => 'Second Post',
        'content' => 'Et amet ex et occaecat Lorem esse sit magna velit ea nostrud proident ea cupidatat. Non duis irure esse veniam eu pariatur eu minim enim laborum reprehenderit ea. Consectetur velit irure ullamco do ullamco consectetur dolore adipisicing dolor enim occaecat ea anim velit officia. Lorem pariatur veniam enim ad ex. Dolore cupidatat sint nostrud duis duis.',
        'author' => $authors[1],
    ]
];

function init() {
    global $posts;
    global $authors;
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        $_SESSION['posts'] = $posts;
        $_SESSION['authors'] = $authors;
    } else {
        $posts = $_SESSION['posts'];
        $authors = $_SESSION['authors'];
    }
}

function addPost($post) {
    global $posts;
    $posts[] = $post;
    $_SESSION['posts'] = $posts;
}

function getPosts() {
    return $_SESSION['posts'];
}