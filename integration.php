<?php
    header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integration Phase</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">
    <nav class="bg-gray-800 p-4 sticky top-0 z-10">
        <div class="container mx-auto flex justify-between items-center">
            <a href="index.html" class="text-2xl font-bold">Thorium Truck Engine</a>
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
    </nav>

    <section class="py-16 bg-gray-800">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8">Integration Phase</h2>
            <p class="text-lg mb-4">Objective: Mount the TSMR in a truck and connect it to drivetrain.</p>
            
            <h3 class="text-2xl font-bold mb-4">Materials</h3>
            <ul class="list-disc ul list-inside mb-4">
                <li>TSMR (~1 (~m³).</li>
                <li>1 MWh solid-state battery (~1 (~m³).</li>
                <li>VFD (800 VDC, 2.3 MW).</li>
                <li>EV truck chassis (e.g., Tesla Semi).</li>
                <li>Cables (800V, 2750 A).</li>
            </ul>

            <h3 class="text-2xl font-bold mb-4">Methods</h3>
            <ol class="list-ol ol-decimal list-inside mb-4">
                <li>Install TSMR in cargo bay.</li>
                <li>Connect to 1 MWh battery.</li>
                <li>Wire battery to VFD and motor.</li>
                <li>Calibrate AI control for efficiency.</li>
                <li>Test drivetrain under load.</li>
            </ol>

            <h3 class="text-2xl font-bold mb-4">Schematic</h3>
            <pre class="bg-gray-700 p-4 rounded">
[TSMR: 10 kW] --> [1 MWh Battery]
            |                    |
            v                    v
      [VFD: 800 V] --> [2.2 MW Motor]
                         |
                         v
                   [Drivetrain: 5000 Nm]
            </pre>
        </div>
    </section>

    <footer class="bg-gray-900 py-8 text-center">
        <p>&copy; 2025 Thorium Truck Engine Project. All rights reserved to EarthQuakEmc2</p>
    </footer>
</body>
</html>
