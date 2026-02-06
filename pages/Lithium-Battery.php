<?php
$pageTitle = "Inverter Solutions | Clay Option Concepts";
$pageDescription = "Discover reliable inverter solutions with Clay Option Concepts. We provide expert installation, maintenance, and integration of inverters for homes and businesses, ensuring uninterrupted power alongside solar, CCTV, fire alarms, and biometric access systems.";
$pageKeywords = "inverter installation, inverter repair, inverter maintenance, inverter solutions, power backup systems, inverter services Nigeria, home inverter installation, business inverter solutions";
$pageOGImage = "assets/image/services.jpg";
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
        <section class="flex items-center relative h-[70vh] bg-center bg-cover p-6 -z-50"
            style="background-image: url('assets/image/battery-banner.jpg');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-primary/75"></div>

            <!-- Content -->
            <div class="relative z-10 text-white max-w-2xl px-6">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">
                    Long-Lasting Power with Lithium Batteries
                </h2>
                <p class="text-lg md:text-xl mb-6">
                    Experience reliable energy storage with our high-performance lithium batteries, built for
                    durability,
                    efficiency, and consistent backup for your home and business.
                </p>
                <a href="#inverters"
                    class="inline-block bg-info px-6 py-3 rounded-lg font-semibold hover:bg-accent transition">
                    Explore Batteries
                </a>
            </div>
        </section>
        <!-- Battery section -->
        <section class="py-16 bg-background" id="inverters">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-primary mb-12">Our Lithium Batteries</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Battery Card -->
                    <div
                        class="bg-surface shadow-lg rounded-xl p-6 text-center hover:scale-105 transition-transform duration-300">
                        <img src="assets/image/battery1.jpg" alt="Lithium Battery 1"
                            class="w-full h-48 object-contain mb-4 rounded-lg">
                        <h3 class="text-xl font-semibold text-textPrimary">Lithium 100Ah Battery</h3>
                        <p class="text-textSecondary mt-2">₦180,000</p>
                        <button class="mt-4 bg-primary text-white px-4 py-2 rounded-lg hover:bg-accent transition">
                            View Details
                        </button>
                    </div>

                    <!-- Battery Card -->
                    <div
                        class="bg-surface shadow-lg rounded-xl p-6 text-center hover:scale-105 transition-transform duration-300">
                        <img src="assets/image/battery2.jpg" alt="Lithium Battery 2"
                            class="w-full h-48 object-contain mb-4 rounded-lg">
                        <h3 class="text-xl font-semibold text-textPrimary">Lithium 200Ah Battery</h3>
                        <p class="text-textSecondary mt-2">₦350,000</p>
                        <button class="mt-4 bg-primary text-white px-4 py-2 rounded-lg hover:bg-accent transition">
                            View Details
                        </button>
                    </div>

                    <!-- Battery Card -->
                    <div
                        class="bg-surface shadow-lg rounded-xl p-6 text-center hover:scale-105 transition-transform duration-300">
                        <img src="assets/image/battery3.jpg" alt="Lithium Battery 3"
                            class="w-full h-48 object-contain mb-4 rounded-lg">
                        <h3 class="text-xl font-semibold text-textPrimary">Lithium 250Ah Battery</h3>
                        <p class="text-textSecondary mt-2">₦420,000</p>
                        <button class="mt-4 bg-primary text-white px-4 py-2 rounded-lg hover:bg-accent transition">
                            View Details
                        </button>
                    </div>

                </div>
            </div>
        </section>


    </main>
    <?php include 'includes/footer.inc.php' ?>
    <script src="assets/js/scroll-animations.js" defer></script>
    <script src="assets/js/custom.js" defer></script>
</body>

</html>