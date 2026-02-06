<?php
$pageTitle = "Inverter Solutions | Clay Option Concepts";
$pageDescription = "Discover reliable inverter solutions with Clay Option Concepts. We provide expert installation, maintenance, and integration of inverters for homes and businesses, ensuring uninterrupted power alongside solar, CCTV, fire alarms, and biometric access systems.";
$pageKeywords = "inverter installation, inverter repair, inverter maintenance, inverter solutions, power backup systems, inverter services Nigeria, home inverter installation, business inverter solutions";
$pageOGImage = "assets/image/services.jpg";

// Load JSON file
$json = file_get_contents('data/inverterList.json');


// Convert JSON to PHP associative array
$inverterList = json_decode($json, true)
    ?>

<!DOCTYPE html>
<html lang="en">
<?php include "includes/head.inc.php"; ?>

<body>
    <div class="mini-header bg-border flex gap-x-3 items-center justify-between px-6 py-3">
        <p class="text-sm font-semibold text-text-primary"><span class="text-primary">Email: </span>ClayOptionEmail
        </p>
        <p class="text-sm font-semibold text-text-primary"><span class="text-primary">Phone: </span>ClayOptionPhone
        </p>
    </div>
    <div id="header-container" class="transition-all ease-in-out duration-75">
        <?php include 'includes/header.inc.php' ?>
    </div>
    <main>
        <!-- banner -->
        <section class="flex items-center relative lg:h-[70vh] bg-center bg-cover p-6 -z-50"
            style="background-image: url('assets/image/inverter-banner.jpg');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-primary/75"></div>

            <!-- Content -->
            <div class="relative z-10 text-white max-w-2xl px-6">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">
                    Power Your World with Reliable Inverters
                </h2>
                <p class="text-lg md:text-xl mb-6">
                    Discover our range of durable, energy-efficient inverters designed to keep your home and business
                    running smoothly.
                </p>
                <a href="#inverters"
                    class="inline-block bg-info px-6 py-3 rounded-lg font-semibold hover:bg-accent transition">
                    Explore Inverters
                </a>
            </div>
        </section>
        <!-- Inverters section -->
        <section class="py-16 bg-background">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-primary mb-12">Our Inverters</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Inverter Card -->
                    <?php foreach ($inverterList as $inverter): ?>
                        <div
                            class="bg-surface shadow-lg rounded-xl p-6 text-center hover:scale-105 transition-transform duration-300">
                            <img src="<?= BASE_URL ?>assets/image/inverter-images/inverter1.jpg" alt="Inverter 1"
                                class="w-full h-48 object-contain mb-4 rounded-lg">
                            <h3 class="text-xl font-semibold text-textPrimary"><?= $inverter['category'] ?></h3>
                            <p class="text-textSecondary mt-2">₦<?= $inverter['selling_price'] ?></p>
                            <button class="mt-4 bg-primary text-white px-4 py-2 rounded-lg hover:bg-accent transition">
                                View Details
                            </button>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>

        <!-- Energy Calculator Section -->
        <section id="energy-calculator" style="padding:60px 20px; background:#f8fafc;">
            <div class="container" style="max-width:1200px; margin:auto;">
                <h2 style="text-align:center; margin-bottom:30px; font-size:28px; color:#222;">Energy Calculator</h2>

                <div class="container" style="display:flex; gap:20px; flex-wrap:wrap;">

                    <!-- Appliance Input Section -->
                    <div class="card"
                        style="background:white; padding:20px; border-radius:12px; flex:1; min-width:320px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                        <h3>Add Appliance</h3>
                        <input type="text" id="appliance-name" placeholder="Appliance Name"
                            style="width:100%; margin-bottom:8px;">
                        <input type="number" id="appliance-watts" placeholder="Watts"
                            style="width:100%; margin-bottom:8px;">
                        <input type="number" id="appliance-hours" placeholder="Hours/Day"
                            style="width:100%; margin-bottom:8px;">
                        <button onclick="addAppliance()"
                            style="margin-top:8px; background:#2563eb; color:white; padding:10px 20px; border:none; border-radius:8px; cursor:pointer;">➕
                            Add Appliance</button>

                        <h4 style="margin-top:20px;">Your Appliances</h4>
                        <div id="appliance-list"></div>

                        <!-- Calculate Button -->
                        <button onclick="calculateSystem()"
                            style="margin-top:15px; background:#16a34a; color:white; padding:12px 24px; border:none; border-radius:8px; font-weight:bold; cursor:pointer;">⚡
                            Calculate</button>
                    </div>

                    <!-- Results Section -->
                    <div class="card"
                        style="background:white; padding:20px; border-radius:12px; flex:1; min-width:320px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                        <h3>Recommended System Size</h3>
                        <div id="results" style="display:none;">
                            <p>Total Load: <span id="total-load">0</span> Watts</p>
                            <p>Total Energy Consumption: <span id="total-energy">0</span> Wh/day</p>
                            <div class="highlight"
                                style="background:#e66900; color:white; padding:10px; border-radius:8px; margin-top:10px;">
                                Inverter Size: <span id="inverter-size">0</span> kVA
                            </div>
                            <div class="highlight"
                                style="background:#e66900; color:white; padding:10px; border-radius:8px; margin-top:10px;">
                                Battery Capacity (12V): <span id="battery-capacity">0</span> Ah
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <?php include 'includes/footer.inc.php' ?>
    <script src="<?= BASE_URL ?>assets/js/custom.js" defer></script>
    <script src="<?= BASE_URL ?>assets/js/energy-calc.js" defer></script>
</body>

</html>