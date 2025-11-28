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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Trim all inputs
    $name    = trim($_POST['name']    ?? '');
    $email   = trim($_POST['email']   ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $errors = [];

    // Validate name
    if ($name === '') {
        $errors[] = "Name is required.";
    }

    // Validate email
    if ($email === '') {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate subject
    if ($subject === '') {
        $errors[] = "Subject is required.";
    }

    // Validate message
    if ($message === '') {
        $errors[] = "Message is required.";
    }

    // If errors exist, show them
    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo "<p style='color:red;'>$err</p>";
        }
    } else {
        // Sanitize output (allow only <br>)
        $cleanData = [
                'name'    => strip_tags($name),
                'email'   => strip_tags($email),
                'subject' => strip_tags($subject),
                'message' => nl2br(strip_tags($message))
        ];

        echo implode("<br>", $cleanData);
    }
}
?>

<form action="contact.php" method="post" class="max-w-3xl w-full mx-auto p-6 bg-white shadow-md rounded-xl space-y-4">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
        <input
                type="text"
                name="name"
                id="name"
                value="<?= $_POST['name'] ?? '' ?>"
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
                value="<?= $_POST['email'] ?? '' ?>"
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
                value="<?= $_POST['subject'] ?? '' ?>"
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
        ><?= $_POST['message'] ?? '' ?></textarea>
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