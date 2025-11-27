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
<body class="w-screen overflow-x-hidden bg-gray-100 min-h-screen flex flex-col">
<?php
require_once 'components/header.php';
require_once 'components/functions.php';
init();
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    print_r($_POST);
}
?>

<form action="contact.php" method="post" class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-xl space-y-4">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
        <input
                type="text"
                name="name"
                id="name"
                placeholder="Enter your name"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
        >
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input
                type="email"
                name="email"
                id="email"
                placeholder="Enter your email"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
        >
    </div>

    <div>
        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
        <input
                type="text"
                name="subject"
                id="subject"
                placeholder="Subject"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
        >
    </div>

    <div>
        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
        <textarea
                name="message"
                id="message"
                rows="6"
                placeholder="Write your message here..."
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
        ></textarea>
    </div>

    <button
            type="submit"
            class="w-full py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition"
    >
        Send Message
    </button>
</form>

<?php
include_once 'components/footer.php';
?>


</body>
</html>