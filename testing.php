<?php
    header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Phase</title>
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
        </div>
    </ul>

    <section class="py-16 bg-gray-800">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8">Testing Phase</h2>
            <p class="text-lg mb-4">Objective: Validate the TSMR prototype for safety, efficiency.</p>
            
            <h3 class="text-2xl font-bold mb-4">Materials</h3>
            <ul class="list-disc list-inside mb-4">
                <li>Radiation detectors (Geiger, neutron).</li>
                <li>Power meters (1 W to 10 kW range).</li>
                <li>Thermal</li>
                <li>Thermal imaging cameras.</li>
                <li>Software: LabVIEW for data analysis.</li>
            </ul>

            <h3 class="text-2xl font-bold mb-4">Methods</h3>
            <ol class="list-decimal list-inside mb-4">
                <li>Test 1 W lab prototype for fission output.</li>
                <li>Measure radiation leakage (ensure <0.1 mSv/hr at 1 m).</li>
                <li>Verify thermal management (core temp <100°C).</li>
                <li>Scale tests to 10 kW prototype.</li>
                <li>Document results for regulators.</li>
            </ol>

            <h3 class="text-2xl font-bold mb-4">Diagram</h3>
            <pre class="bg-gray-700 p-4 rounded">bg-gray
[Test Setup]:Test]
            [TSMR Prototype] --> [Radiation Detectors]
                   |
                   | v
            v      [Power Meter: 1 W–10 kW]
[Thermal Cameras] --> [Thermal Management]
                   |
                   v
                [Data Logger: LabVIEW]
            </pre>
    </section>
</body>
    <footer class="bg-gray-900 py-8 text-center">
        <p>&copy; 2025 Thorium Truck Engine Project.</p>
</footer>
</body>