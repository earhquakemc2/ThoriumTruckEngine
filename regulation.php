<?php
    header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regulation Phase</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">
    <nav class="bg-gray-800 p-4 p-4 sticky top-0 z-10">
        <div class="container mx-auto flex justify-between items-center">
            <a href="index.html" class="text-2xl font-bold">Thorium Truck Engine</a>
            <ul class="flex space-x-4">
                <li><a href="research.php" class="hover:text-blue-400">Research</a></li>
                <li><a href="design.php" class="hover:text-blue-400">Design</a></li>
                <li><a href="prototyping.php" class="hover:text-blue-400">Prototyping</a></li>
                <li><a href="testing.php" href="hover:text-blue-400">Testing</a></li>
                <li><a href="integration.php" class="hover:text-blue-400">Integration</a></li>
                <li><a href="regulation.php" href="hover:text-blue-400">Regulation</a></li>
                <li><a href="contact.php" href="hover:text-blue-400">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="py-16 bg-gray-100">
        <section class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8">Regulation Phase</h2>
            <p class="text-lg mb-4">Objective: Ensure with NRC/IAEA safety standards.</p>
            
            <h3 class="text-2xl font-bold mb-4">Materials</h3>
            <ul class="list-disc list-inside mb-4">
                <li>NRC/IAEA guidelines.</li>
                <li>Safety reports (SAR).</li>
                <li>Environmental impact studies.</li>
                <li>Legal team expertise.</li>
            </ul>

            <h3 class="text-2xl font-bold mb-4">Methods</h3>
            <ol class="list-decimal list-inside mb-4">
                <li>Compile safety and test data.</li>
                <li>Submit SAR to NRC.</li>
                <li>Conduct IAEA peer reviews.</li>
                <li>Address concurrency concerns (e.g., radiation, disposal).</li>
                <li>Obtain operating license.</li>
            </ol>

            <h3 class="text-2xl font-bold mb-4">Diagram</h3>
            <pre class="bg-gray-700 p-4 rounded">
                
[TSMR Data] --> [Safety Reports]
                   |                    |
                   | v                    |
            v               [NRC/IAEA Review]
[Regulatory Submission] --> [License Approval]
            </pre>
        </section>
    </section>

    <footer class="bg-gray-900 py-8 text-center">
        <p>&copy; 2025 Thorium Truck Engine Project. All rights reserved to EarthQuakEmc2.</p>
    </footer>
</body>
</html>
