<?php
    header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Phase</title>
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
            <h2 class="text-3xl font-bold mb-8">Design Phase</h2>
            <p class="text-lg mb-4">Objective: Create a detailed blueprint for the TSMR (~1 m³, 10 kW) using 2035 technology projections.</p>
            
            <h3 class="text-2xl font-bold mb-4">Materials</h3>
            <ul class="list-disc list-inside mb-4">
                <li>Thorium-232 (5 kg).</li>
                <li>Electrostatic plates (stainless steel, 30x30 cm).</li>
                <li>Compact proton accelerator (ceramic/steel, 20x20x20 cm).</li>
                <li>AI control unit (ARM-based, 20x20x10 cm).</li>
                <li>Software: AutoCAD, Blender for visualization.</li>
            </ul>

            <h3 class="text-2xl font-bold mb-4">Methods</h3>
            <ol class="list-decimal list-inside mb-4">
                <li>Design fission core (30x30x30 cm) with thorium lattice.</li>
                <li>Integrate accelerator for subcritical operation.</li>
                <li>Model collector plates for 10% efficiency.</li>
                <li>Develop cooling loop (liquid sodium, 50x50x20 cm).</li>
                <li>Use AutoCAD for 2D layout; Blender for 3D rendering.</li>
            </ol>

            <h3 class="text-2xl font-bold mb-4">Diagram</h3>
            <pre class="bg-gray-700 p-4 rounded">
+-------------------+
| [Fission Core]    |
| [30x30x30 cm]     |
| [Thorium-232]     |
+-------------------+
        |                     |
[Proton Accelerator] --> [Collector]
        |                     |
[AI Control Unit] --> [Cooling Loop]
        |
[Shielding: 1 m³]
+-------------------+
[Output: 10 kW, 800 V DC]
            </pre>
        </div>
    </section>

    <footer class="bg-gray-900 py-8 text-center">
        <p>&copy; 2025 Thorium Truck Engine Project.</p>
    </footer>
</body>
</html>