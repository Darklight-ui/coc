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
    <main class="bg-background text-text-primary">
        <!-- Inverter Details Section -->
        <section class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Left: Images -->
            <div>
                <img src="assets/image/inverter-images/inverter1.jpg" alt="Inverter"
                    class="w-60 rounded-2xl shadow-lg mb-4">
                <div class="flex gap-3">
                    <img src="assets/image/inverter-images/inverter1.jpg" alt="Inverter thumb"
                        class="w-20 h-20 object-cover rounded-lg cursor-pointer border border-border hover:border-primary">
                    <img src="assets/image/inverter-images/inverter2.jpg" alt="Inverter thumb"
                        class="w-20 h-20 object-cover rounded-lg cursor-pointer border border-border hover:border-primary">
                    <img src="assets/image/inverter-images/inverter3.jpg" alt="Inverter thumb"
                        class="w-20 h-20 object-cover rounded-lg cursor-pointer border border-border hover:border-primary">
                </div>
            </div>

            <!-- Right: Info -->
            <div>
                <h1 class="text-3xl font-bold mb-4">Premium Solar Inverter 5kVA</h1>
                <p class="text-lg text-text-secondary mb-4">
                    Reliable and energy-efficient inverter designed for home and business use. Delivers stable power
                    with smart energy management.
                </p>
                <p class="text-2xl font-semibold text-primary mb-6">$850.00</p>

                <!-- Quantity Selector -->
                <div class="flex items-center gap-4 mb-6">
                    <button id="decrement"
                        class="px-3 py-2 bg-surface border border-border rounded-lg hover:bg-primary hover:text-white transition">-</button>
                    <span id="quantity" class="text-lg font-semibold">1</span>
                    <button id="increment"
                        class="px-3 py-2 bg-surface border border-border rounded-lg hover:bg-primary hover:text-white transition">+</button>
                </div>

                <!-- Add to Cart -->
                <button class="bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-accent transition">
                    Add to Cart
                </button>

                <!-- Extra Details -->
                <div class="mt-10 space-y-4">
                    <h2 class="text-xl font-bold">Product Details</h2>
                    <ul class="list-disc pl-6 space-y-2 text-text-secondary">
                        <li>Capacity: 5kVA / 48V</li>
                        <li>Battery Support: Lithium / Lead-acid</li>
                        <li>Efficiency: 95%</li>
                        <li>Warranty: 2 Years</li>
                        <li>Smart LCD Display</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Related Products -->
        <section class="bg-surface py-12 px-6">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-2xl font-bold mb-6">Related Inverters</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-background rounded-lg shadow p-4 text-center">
                        <img src="assets/image/inverter-images/inverter2.jpg"
                            class="w-full h-40 object-cover rounded-lg mb-4">
                        <h3 class="font-semibold">Hybrid Inverter 3.5kVA</h3>
                        <p class="text-primary font-bold">$650</p>
                    </div>
                    <div class="bg-background rounded-lg shadow p-4 text-center">
                        <img src="assets/image/inverter-images/inverter3.jpg"
                            class="w-full h-40 object-cover rounded-lg mb-4">
                        <h3 class="font-semibold">Off-Grid Inverter 2kVA</h3>
                        <p class="text-primary font-bold">$450</p>
                    </div>
                    <div class="bg-background rounded-lg shadow p-4 text-center">
                        <img src="assets/image/inverter-images/inverter3.jpg"
                            class="w-full h-40 object-cover rounded-lg mb-4">
                        <h3 class="font-semibold">High-Capacity Inverter 10kVA</h3>
                        <p class="text-primary font-bold">$1,200</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php include 'includes/footer.inc.php' ?>
    <script src="assets/js/inverter.js" defer></script>
    <script src="assets/js/scroll-animations.js" defer></script>
    <script src="assets/js/custom.js" defer></script>
</body>

</html>