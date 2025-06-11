<?php
    header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Phase</title>
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
            <h2 class="text-3xl font-bold mb-8">Research Phase</h2>
            <p class="text-lg mb-4">Objective: Establish the scientific and engineering foundation for a thorium-based microreactor (TSMR, ~1 m³, 10 kW) by 2035.</p>
            
            <h3 class="text-2xl font-bold mb-4">Materials</h3>
            <ul class="list-disc list-inside mb-4">
                <li>Thorium-232 (5 kg, 99.98% purity).</li>
                <li>Graphite moderators (99.9% purity).</li>
                <li>Lead/boron composite shielding (10 cm thick).</li>
                <li>Liquid sodium coolant (industrial grade).</li>
                <li>Software: MCNP6, COMSOL Multiphysics.</li>
            </ul>

            <h3 class="text-2xl font-bold mb-4">Methods</h3>
            <ol class="list-decimal list-inside mb-4">
                <li>Study fission fragment collection (e.g., LLNL dusty plasma reactors).</li>
                <li>Model subcritical thorium systems with proton accelerators (e.g., Rubbia’s ADS).</li>
                <li>Simulate neutron flux and shielding in MCNP6.</li>
                <li>Analyze heat transfer in COMSOL.</li>
                <li>Collaborate with ORNL, IAEA, and EV manufacturers (e.g., Tesla).</li>
            </ol>

            <h3 class="text-2xl font-bold mb-4">Schematic</h3>
            <pre class="bg-gray-700 p-4 rounded">
[Thorium-232 Core: 30x30x30 cm] --> [Proton Accelerator]
       |                           |
       v                           v
[Graphite Moderator] --> [Fission Fragment Collector: 30x30x20 cm]
       |                           |
       v                           v
[Liquid Sodium Cooling] --> [Lead/Boron Shielding: 10 cm]
            |
            v
[10 kW Output to Battery]
            </pre>
        </div>
    </section>

    <footer class="bg-gray-900 py-8 text-center">
        <p>&copy; 2025 Thorium Truck Engine Project. All rights reserved.</p>
    </footer>
</body>
</html>