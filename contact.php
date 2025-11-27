<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="stylesheets/output.css" rel="stylesheet">
    <title>Create - Blog</title>
</head>
<body>
<?php
require_once 'components/header.php';
require_once 'components/functions.php';
init();
?>

<form action="contact.php" method="post" class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-xl space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
        <input
            type="text"
            name="title"
            placeholder="Title"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
        >
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Content</label>
        <textarea
            name="content"
            cols="30"
            rows="10"
            placeholder="Content"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
        ></textarea>
    </div>

    <button
        type="submit"
        class="w-full py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition"
    >
        Submit
    </button>
</form>

</body>
</html>