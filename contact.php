<?php
    header('Content-Type: text/html; charset=UTF-8');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        // Simulate email handling (configure for production)
        $response = "Thank you, $name! Your message has been received.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">
    <nav class="bg-gray-800 p-4 sticky top-0 z-10">
        <div class="container mx-auto flex justify-between items-center">
            <div a href="index.html" class="text-2xl font-bold">Thorium Truck Engine</a>
                <ul class="flex space-x-4">
                   <li><a href="research.php" class="hover:text-blue-400">Research</a></li>
                   <li><a href="design.php" class="hover:text-blue-400">Design</a></li>
                   <li><a href="prototyping.php" class="hover:text-blue-400">Prototyping</a></li>
                   <li><a href="testing.php" class="hover:text-blue-400">Testing</a></li>
                   <li><a href="integration.php" class="hover:text-blue-400">Integration</a></li>
                   <li><a href="regulation.php" class="hover:text-blue-400">Regulation</a></li>
                   <li><a href="contact.php" class="hover:text-blue-400">Contact</a></li>
                </ul>
            </div>
        </div>    
    </nav>

    <section class="py-16 bg-gray-800">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8">Contact Us</h2>
            <p class="text-lg mb-4"><?php echo isset($response) ? $response : 'Get in touch for collaboration or inquiries.'; ?></p>
            <div class="max-w-md mx-auto">
                <form method="POST" class="space-y-4">
                    <input type="text" name="name" placeholder="Name" required class="w-full p-2 bg-gray-700 rounded">
                    <input type="email" name="email" placeholder="Email" required class="w-full p-2 bg-gray-700 rounded">
                    <textarea name="message" placeholder="Message" required class="w-full p-2 bg-gray-700 rounded h-32"></textarea>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Send</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 py-8 text-center">
        <p>&copy; 2025 Thorium Truck Engine Project. All rights reserved to EarthQuakEmc2</p>
    </footer>
</body>
</html>
