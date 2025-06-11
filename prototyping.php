<?php
    header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototyping Phase</title>
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
            <h2 class="text-3xl font-bold mb-8">Build Phase</h2>
            <p class="text-lg mb-4">Objective: Construct a 1 W lab prototype (~1 dm³), scaling to a 10 kW TSMR (~1 m³).</p>
            
            <h3 class="text-2xl font-bold mb-4">Materials</h3>
            <ul class="list-disc list-inside mb-4">
                <li>Thorium-232 (0.1 g for lab; 5 kg for TSMR).</li>
                <li>Electrostatic plates (10x10 cm lab; 30x30 cm TSMR).</li>
                <li>Mini proton source (lab-scale, 5x5 cm).</li>
                <li>Liquid sodium (0.1 L lab; 5 L TSMR).</li>
                <li>Tools: CNC machining, 3D printing (titanium).</li>
            </ul>

            <h3 class="text-2xl font-bold mb-4">Methods</h3>
            <ol class="list-decimal list-inside mb-4">
                <li>Assemble 1 W lab reactor (10x10x10 cm).</li>
                <li>Test fission fragment collection at low power.</li>
                <li>Scale to 10 kW with larger core and shielding.</li>
                <li>Use CNC for precision components.</li>
                <li>Validate with radiation sensors.</li>
            </ol>

            <h3 class="text-2xl font-bold mb-4">Schematic</h3>
            <pre class="bg-gray-700 p-4 rounded">
[Lab Prototype: 10x10x10 cm]
[Thorium: 0.1 g] --> [Mini Accelerator]
       |                     |
       v                     v
[Collector: 10x10 cm] --> [Cooling: 0.1 L]
       |
[Output: 1 W]
</pre>
        </div>
    </section>

    <footer class="bg-gray-900 py-8 text-center">
        <p>&copy; 2025 Thorium Truck Engine Project.</p>
    </footer>
</body>
</html>