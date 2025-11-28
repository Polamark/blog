<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="stylesheets/output.css" rel="stylesheet">
    <title>Detail - Blog</title>
</head>
<body class="w-screen overflow-x-hidden bg-gray-100 min-h-screen flex flex-col">
<?php
require_once 'components/header.php';
require_once 'components/functions.php';
init();
global $posts;
if (isset($_GET['id'])) {
    $post = $posts[$_GET['id']];
} else {
    header('Location: index.php');
}
?>

<div class="max-w-3xl mx-auto mb-10 mt-10 p-8 bg-white shadow-md rounded-xl">
    <h1 class="text-3xl font-bold text-gray-900 mb-4">
        <?= htmlspecialchars($post['title']) ?>
    </h1>

    <p class="text-sm text-gray-500 mb-6">
        By: <span class="font-medium text-gray-700"><?= htmlspecialchars($post['author']['userName']) ?></span>
    </p>

    <div class="prose max-w-none text-gray-800">
        <?= htmlspecialchars($post['content']) ?>
    </div>
</div>


<?php
include_once 'components/footer.php';
?>


</body>
</html>