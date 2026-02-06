<?php
$pageTitle = "Home - Clay Option Concepts";
$pageDescription = "Explore our services including solar installations, inverters, CCTV, fire alarms, biometric access, and business solutions.";
$pageKeywords = "solar installation, inverter, CCTV, fire alarm, biometric, accounting software";
$pageOGImage = "assets/image/services-image/services.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<?php include "includes/head.inc.php"; ?>

<body>
    <div class="mini-header bg-border flex gap-x-3 items-center justify-between px-6 py-3">
        <a href="mailto:info@coc.ng" class="text-sm font-semibold text-text-primary flex items-center"><span class="text-primary"><span
                    class="text-xl">✉:</span>
            </span>info@coc.ng
        </a>
        <a href="https://wa.me/message/IRG6QOCLKVIKP1" class="text-sm font-semibold text-text-primary flex items-center"><span class="text-primary"><span
                    class="text-sm">📞:</span>
            </span>+2348117855119
        </a>
    </div>
    <div id="header-container" class="transition-all ease-in-out duration-75">
        <?php include 'includes/header.inc.php' ?>
    </div>

    <!-- Hero Section -->
    <section class="relative w-full md:h-screen overflow-hidden -z-50">
        <!-- Slides Container -->
        <div id="slider" class="flex w-full h-full transition-transform duration-700 ease-in-out">
            <!-- Slide 1 -->
            <div class="slide relative w-full h-full flex-shrink-0">
                <img src="assets/image/slide-1.jpg" class="w-full h-full object-cover" alt="">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/40 text-center px-4">
                    <h1 class="text-white text-2xl sm:text-3xl md:text-6xl font-bold">
                        Smart Solutions for Homes & Businesses in Nigeria
                    </h1>
                    <p class="mt-4 text-white text-sm sm:text-base md:text-lg max-w-2xl">
                        From solar inverters to CCTV, fire alarms, and IT solutions – we keep your business secure and
                        efficient.
                    </p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="slide relative w-full h-full flex-shrink-0">
                <img src="assets/image/slide-2.jpg" class="w-full h-full object-cover" alt="">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/40 text-center px-4">
                    <h1 class="text-white text-2xl sm:text-3xl md:text-6xl font-bold">
                        Smart Surveillance for Modern Security
                    </h1>
                    <p class="mt-4 text-white text-sm sm:text-base md:text-lg max-w-2xl">
                        24/7 monitoring to protect what matters most
                    </p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide relative w-full h-full flex-shrink-0">
                <img src="assets/image/slide-3.jpg" class="w-full h-full object-cover" alt="">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/40 text-center px-4">
                    <h1 class="text-white text-2xl sm:text-3xl md:text-6xl font-bold">
                        Power When You Need It Most
                    </h1>
                    <p class="mt-4 text-white text-sm sm:text-base md:text-lg max-w-2xl">
                       Reliable 12V battery solutions with secure jumper connections
                    </p>
                </div>
            </div>

            <!-- Clone first slide for infinite loop -->
            <div class="slide relative w-full h-full flex-shrink-0">
                <img src="assets/image/slide-1.jpg" class="w-full h-full object-cover" alt="">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/40 text-center px-4">
                    <h1 class="text-white text-2xl sm:text-3xl md:text-6xl font-bold">
                        Smart Solutions for Homes & Businesses in Nigeria
                    </h1>
                    <p class="mt-4 text-white text-sm sm:text-base md:text-lg max-w-2xl">
                        From solar inverters to CCTV, fire alarms, and IT solutions – we keep your business secure and
                        efficient.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Powering Your World with Solar Energy -->
    <section
        class="relative w-full lg:min-h-screen overflow-hidden flex flex-col md:flex-row items-center justify-center px-6 py-12 gap-8 bg-background">

        <!-- Image -->
        <img src="assets/image/cta-bg.jpeg" alt="Solar Installation"
            class="w-[200px] sm:w-[300px] md:w-1/2  max-w-lg h-auto rounded-2xl shadow-lg object-cover border opacity-0 translate-y-8 transition-all duration-700 border-border"
            id="animatedImage" data-animate />

        <!-- Text -->
        <div class="text-center md:text-left md:w-1/2 max-w-2xl opacity-0 translate-y-8 transition-all duration-700"
            id="animatedText" data-animate>
            <h1 class="text-md sm:text-lg  md:text-5xl font-bold mb-4 text-danger">
                Powering Your World with Solar Energy
            </h1>
            <p class="text-base md:text-lg leading-relaxed text-text-secondary">
                We provide reliable solar installations for homes and businesses,
                ensuring you enjoy uninterrupted clean energy while saving costs.
            </p>
        </div>
    </section>

    <!-- Enery saving calculatur -->
    <section id="energy-calculator" style="padding:60px 20px; background:#f8fafc;">
        <h1 class="text-orange-500 text-4xl md:text-5xl font-semibold tracking-wide mb-3">
            KNOW YOUR LOAD
        </h1>
        <p class="text-gray-600 text-base md:text-lg mb-8">
            Use our calculator to determine your total power needs and find the ideal inverter, battery, and solar
            solution for your home or business.
        </p>

        <div class="bg-white rounded-2xl shadow-lg p-8 max-w-xl mx-auto">
            <div class="space-y-4">
                <div class="flex justify-between items-center max-w-md mx-auto">
                    <label class="font-semibold text-gray-800">Bulb (15W):</label>
                    <input type="number" id="bulb" value="0" min="0"
                        class="w-24 text-center px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400" />
                </div>

                <div class="flex justify-between items-center max-w-md mx-auto">
                    <label class="font-semibold text-gray-800">Fan (70W):</label>
                    <input type="number" id="fan" value="0" min="0"
                        class="w-24 text-center px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400" />
                </div>

                <div class="flex justify-between items-center max-w-md mx-auto">
                    <label class="font-semibold text-gray-800">TV (100W):</label>
                    <input type="number" id="tv" value="0" min="0"
                        class="w-24 text-center px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400" />
                </div>

                <div class="flex justify-between items-center max-w-md mx-auto">
                    <label class="font-semibold text-gray-800">Fridge (200W):</label>
                    <input type="number" id="fridge" value="0" min="0"
                        class="w-24 text-center px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400" />
                </div>

                <div class="flex justify-between items-center max-w-md mx-auto">
                    <label class="font-semibold text-gray-800">Iron (1000W):</label>
                    <input type="number" id="iron" value="0" min="0"
                        class="w-24 text-center px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400" />
                </div>

                <div class="flex justify-between items-center max-w-md mx-auto">
                    <label class="font-semibold text-gray-800">Laptop (60W):</label>
                    <input type="number" id="laptop" value="0" min="0"
                        class="w-24 text-center px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400" />
                </div>

                <div class="flex justify-between items-center max-w-md mx-auto">
                    <label class="font-semibold text-gray-800">Router (20W):</label>
                    <input type="number" id="router" value="0" min="0"
                        class="w-24 text-center px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400" />
                </div>

                <div class="flex justify-between items-center max-w-md mx-auto">
                    <label class="font-semibold text-gray-800">Air Conditioner (1200W):</label>
                    <input type="number" id="ac" value="0" min="0"
                        class="w-24 text-center px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400" />
                </div>
            </div>

            <button onclick="calculateLoad()"
                class="bg-orange-500 hover:bg-orange-600  font-medium mt-8 py-3 px-6 rounded-lg transition duration-300">
                CALCULATE MY SYSTEM
            </button>

            <div id="result" class="bg-blackrounded-xl p-6 mt-8 text-left shadow-xl"></div>
        </div>

        <p class="text-gray-500 text-sm mt-6">
            *Tip: Enter only the appliances you plan to run together.
        </p>
    </section>

    <!-- High Energy Bill? No Problem! -->
    <section
        class="relative w-full lg:min-h-screen overflow-hidden flex flex-col md:flex-row items-center justify-center px-6 py-12 gap-8 bg-surface">

        <!-- Text -->
        <div class="text-center md:text-left md:w-1/2 max-w-2xl opacity-0 translate-y-8 transition-all duration-1000 ease-out delay-300"
            id="billText" data-animate>

            <h2 class="text-md sm:text-lg  md:text-5xl font-bold mb-4 text-primary">
                High Energy Bill? No Problem!
            </h2>

            <p class="text-base md:text-lg mb-4 text-primary">
                If you:
            </p>
            <ul class="list-disc list-inside text-sm md:text-lg mb-6 text-text-secondary">
                <li>Own or lease the property.</li>
                <li>Are the electric utility account owner.</li>
                <li>Have a Standard Domestic Utility Rate.</li>
            </ul>

            <p class="text-sm md:text-lg mb-4 text-text-secondary">
                Then, get <strong>Simple Payback</strong> in <strong>1 - 3 years</strong>.
            </p>

            <p class="text-sm md:text-lg mb-4 text-text-secondary">
                <strong>Mobile Solar Panels</strong> have no roof penetrations and will never leak.
            </p>

            <button class="px-6 py-3 rounded-lg text-white font-semibold shadow-md hover:shadow-lg transition"
                style="background-color: var(--color-primary);">
                <a href="#">Get Energy Analysis</a>
            </button>
        </div>
        <!-- Image -->
        <img src="assets/image/solar-panel.jpg" alt="Mobile Solar Panels"
            class="w-full md:w-1/2 max-w-lg h-auto rounded-2xl shadow-lg object-cover border border-border opacity-0 translate-y-8 transition-all duration-1000 ease-out"
            data-animate />
    </section>

    <!-- Mission and Vission -->
    <section class="relative w-full py-16 px-6 bg-background">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- Mission -->
            <div class="opacity-0 translate-y-8 transition-all duration-1000 ease-out delay-300" id="mission"
                data-animate>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-primary">
                    Our Mission
                </h2>
                <p class="text-base md:text-lg leading-relaxed mb-6 text-text-secondary">
                    To deliver reliable, affordable, and sustainable solar energy solutions that
                    empower communities, reduce carbon footprints, and foster a cleaner, greener future
                    for generations to come.
                </p>
                <img src="assets/image/inverter-battery.jpeg" alt="Mission Image"
                    class="w-full h-auto rounded-2xl shadow-lg object-cover border border-border" />
            </div>

            <!-- Vision -->
            <div class="opacity-0 translate-y-8 transition-all duration-1000 ease-out delay-300" id="vision"
                data-animate>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-primary">
                    Our Vision
                </h2>
                <p class="text-base md:text-lg leading-relaxed mb-6 text-text-secondary">
                    To become the leading provider of solar energy solutions in the region, setting
                    industry standards through innovation, exceptional service, and an unwavering
                    commitment to environmental stewardship.
                </p>
                <img src="assets/image/vision.jpeg" alt="Vision Image"
                    class="w-full h-auto rounded-2xl shadow-lg object-cover border border-border" />
            </div>
        </div>
    </section>

    <!-- Our core service -->
    <section class="py-16 px-6" style="background-color: var(--color-surface);">
        <div class="max-w-7xl mx-auto text-center mb-12 opacity-0 translate-y-8 transition-all duration-1000 ease-out delay-300"
            data-animate>
            <h2 class="text-3xl md:text-4xl font-bold text-primary">
                Our Core Services
            </h2>
            <p class="mt-4 text-base md:text-lg text-text-secondary">
                Providing reliable security, power, and technology solutions tailored to your needs.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Card Template -->
            <div class="p-6 rounded-xl border bg-white transform transition-all duration-300 hover:scale-105"
                style="border-color: var(--color-border); box-shadow: 0 4px 6px rgba(0,0,0,0.1);"
                onmouseover="this.style.boxShadow='0 10px 20px rgba(227,108,8,0.3)'"
                onmouseout="this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)'" data-animate data-animate>
                <img src="assets/image/services-image/service-1.jpeg" alt="Inverter & Solar Installation"
                    class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2 text-primary">
                    Inverter & Solar Installations
                </h3>
                <p class="text-sm text-text-secondary">
                    Efficient and durable power solutions to keep your home or business running without interruptions.
                </p>
            </div>

            <div class="p-6 rounded-xl border bg-white transform transition-all duration-300 hover:scale-105"
                style="border-color: var(--color-border); box-shadow: 0 4px 6px rgba(0,0,0,0.1);"
                onmouseover="this.style.boxShadow='0 10px 20px rgba(227,108,8,0.3)'"
                onmouseout="this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)'" data-animate>
                <img src="assets/image/services-image/service-2.jpeg" alt="CCTV & Biometric Access"
                    class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2 text-primary">
                    CCTV & Biometric Access
                </h3>
                <p class="text-sm text-text-secondary">
                    Advanced surveillance and access control systems for improved security and monitoring.
                </p>
            </div>

            <div class="p-6 rounded-xl border bg-white transform transition-all duration-300 hover:scale-105"
                style="border-color: var(--color-border); box-shadow: 0 4px 6px rgba(0,0,0,0.1);"
                onmouseover="this.style.boxShadow='0 10px 20px rgba(227,108,8,0.3)'"
                onmouseout="this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)'" data-animate>
                <img src="assets/image/services-image/service-3.jpeg" alt="Fire Alarm Systems"
                    class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2 text-primary">
                    Fire Alarm Systems
                </h3>
                <p class="text-sm text-text-secondary">
                    Early detection systems to protect lives and property from fire hazards.
                </p>
            </div>

            <div class="p-6 rounded-xl border bg-white transform transition-all duration-300 hover:scale-105"
                style="border-color: var(--color-border); box-shadow: 0 4px 6px rgba(0,0,0,0.1);"
                onmouseover="this.style.boxShadow='0 10px 20px rgba(227,108,8,0.3)'"
                onmouseout="this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)'" data-animate>
                <img src="assets/image/services-image/service-5.jpeg" alt="Business Accounting Software"
                    class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2 text-primary">
                    Business Accounting Software
                </h3>
                <p class="text-sm text-text-secondary">
                    Reliable software solutions to simplify business finances and improve efficiency.
                </p>
            </div>

            <div class="p-6 rounded-xl border bg-white transform transition-all duration-300 hover:scale-105"
                style="border-color: var(--color-border); box-shadow: 0 4px 6px rgba(0,0,0,0.1);"
                onmouseover="this.style.boxShadow='0 10px 20px rgba(227,108,8,0.3)'"
                onmouseout="this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)'" data-animate>
                <img src="assets/image/services-image/service-4.jpeg" alt="Network Solutions"
                    class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2 text-primary">
                    Network Solutions
                </h3>
                <p class="text-sm text-text-secondary">
                    Secure and efficient networking setups for homes, offices, and enterprises.
                </p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 px-6" style="background-color: var(--color-background);">
        <div class="max-w-7xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary">
                What Our Clients Say
            </h2>
            <p class="mt-4 text-base md:text-lg text-text-secondary">
                Real feedback from businesses and homeowners who trust Clay Option Concept.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial Card -->
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-border transform transition-all duration-300 hover:scale-105"
                style="border-color: var(--color-border);">
                <p class="text-text-secondary mb-4">
                    "Clay Option Concept installed our solar system efficiently and professionally. Our energy bills
                    have dropped significantly."
                </p>
                <div class="flex items-center gap-4">
                    <img src="assets/image/avatar.jpeg" alt="Client 1" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <h4 class="text-text-primary font-semibold">John Doe</h4>
                        <p class="text-sm text-muted">Homeowner, Lagos</p>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-white rounded-2xl shadow-lg border border-border transform transition-all duration-300 hover:scale-105"
                style="border-color: var(--color-border);">
                <p class="text-text-secondary mb-4">
                    "Their CCTV and network solutions helped us secure our offices. The team was reliable and
                    professional."
                </p>
                <div class="flex items-center gap-4">
                    <img src="assets/image/avatar.jpeg" alt="Client 2" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <h4 class="text-text-primary font-semibold">Jane Smith</h4>
                        <p class="text-sm text-muted">Business Owner, Lagos</p>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-white rounded-2xl shadow-lg border border-border transform transition-all duration-300 hover:scale-105"
                style="border-color: var(--color-border);">
                <p class="text-text-secondary mb-4">
                    "Their fire alarm systems and IT solutions gave us peace of mind. Highly recommended for
                    businesses!"
                </p>
                <div class="flex items-center gap-4">
                    <img src="assets/image/avatar.jpeg" alt="Client 3" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <h4 class="text-text-primary font-semibold">Michael Brown</h4>
                        <p class="text-sm text-muted">Company Manager, Lagos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA SECTION -->
    <section class="relative py-20 px-6 text-center bg-fixed bg-center bg-cover"
        style="background-image: url('assets/image/cta-bg.jpeg');">
        <!-- Overlay for darkening the background -->
        <div class="absolute inset-0 bg-black/75 z-10"></div>

        <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 relative z-10">
            <!-- Text -->
            <div class="text-white">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Ready to Secure Your Home or Business?
                </h2>
                <p class="text-base md:text-lg">
                    Get expert installations and solutions for solar, security, and IT systems. Let us help you save
                    costs and stay protected.
                </p>
            </div>

            <!-- Button -->
            <a href="#contact"
                class="inline-block bg-primary text-white font-semibold px-6 py-3 rounded-xl shadow-lg hover:bg-accent transition-all duration-300">
                Request A Quote
            </a>
        </div>
    </section>

    <!-- Why Choose us? -->
    <section class="py-16 bg-background">
        <div class="max-w-6xl mx-auto px-6">
            <div class="max-w-6xl mx-auto text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-primary">
                    Why Choose Us
                </h2>
                <p class="text-base md:text-lg text-text-secondary">
                    At Clay Option Concept, we combine expertise, innovation, and reliability to deliver
                    outstanding solutions for your security, power, and IT needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Item -->
                <div
                    class="text-center p-6 rounded-lg shadow-md transition-transform duration-300 hover:scale-105 bg-surface border border-border">
                    <i
                        class="fas fa-bolt text-5xl mb-4 text-primary transition-colors duration-300 hover:text-[var(--color-accent)]"></i>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Reliable Power
                        Solutions</h3>
                    <p class="text-[var(--color-text-secondary)] text-sm">
                        We deliver sustainable solar and inverter systems for uninterrupted power.
                    </p>
                </div>

                <!-- Item -->
                <div
                    class="text-center p-6 rounded-lg shadow-md transition-transform duration-300 hover:scale-105 bg-surface border border-border">
                    <i
                        class="fas fa-video text-5xl mb-4 text-primary transition-colors duration-300 hover:text-[var(--color-accent)]"></i>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Advanced CCTV
                        Systems</h3>
                    <p class="text-[var(--color-text-secondary)] text-sm">
                        Top-tier security camera installations for home and business safety.
                    </p>
                </div>

                <!-- Item -->
                <div
                    class="text-center p-6 rounded-lg shadow-md transition-transform duration-300 hover:scale-105 bg-surface border border-border">
                    <i
                        class="fas fa-fire-extinguisher text-5xl mb-4 text-primary transition-colors duration-300 hover:text-[var(--color-accent)]"></i>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Fire Safety Experts
                    </h3>
                    <p class="text-[var(--color-text-secondary)] text-sm">
                        Fire alarms and prevention systems to protect what matters most.
                    </p>
                </div>

                <!-- Item -->
                <div
                    class="text-center p-6 rounded-lg shadow-md transition-transform duration-300 hover:scale-105 bg-surface border border-border">
                    <i
                        class="fas fa-network-wired text-5xl mb-4 text-primary transition-colors duration-300 hover:text-[var(--color-accent)]"></i>
                    <h3 class="text-xl font-semibold mb-2 text-primary">Network & IT
                        Solutions</h3>
                    <p class="text-[var(--color-text-secondary)] text-sm">
                        Seamless networking and IT setups tailored to your business needs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us  -->
    <section id="contact" class="py-16 px-4 sm:px-6 lg:px-8 bg-surface">
        <div class="max-w-6xl mx-auto rounded-xl shadow-xl overflow-hidden md:flex">

            <!-- Left Side: Contact Info with Background Image -->
            <div class="md:w-1/2 relative bg-cover bg-center h-96 md:h-auto"
                style="background-image: url('assets/image/contact.jpg');">
                <!-- Overlay to make text readable -->
                <div
                    class="absolute inset-0 bg-black/75  flex flex-col justify-center items-center p-8 text-white text-center">
                    <h2 class="text-sm sm:text-2xl md:4xl font-bold mb-6">Contact Information</h2>
                    <p class="text-sm sm:text-sm mb-8 max-w-sm">
                        Feel free to reach out to us with any questions or to get a free quote for your project.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <i class="fa-solid fa-phone text-2xl text-primary"></i>
                            <div>
                                <h3 class="text-sm md:text-lg font-semibold">Phone</h3>
                                <p class="text-sm">+234-801-234-5678</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fa-solid fa-envelope text-2xl text-primary"></i>
                            <div>
                                <h3 class="text-sm md:text-lg font-semibold">Email</h3>
                                <p class="text-sm">info@clayoption.com</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fa-solid fa-location-dot text-2xl text-primary"></i>
                            <div>
                                <h3 class="text-sm md:text-lg font-semibold">Address</h3>
                                <p class="text-sm">123 Business Rd, Lagos, Nigeria</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="md:w-1/2 p-8 sm:p-12 md:p-16 bg-white border border-border">
                <h2 class="text-2xl sm:text-3xl font-bold text-center text-primary mb-8">Send Us a Message</h2>
                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-text-primary">Full Name</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full p-3 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary transition-shadow duration-200"
                            placeholder="Your Name" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-text-primary">Email Address</label>
                        <input type="email" id="email" name="email"
                            class="mt-1 block w-full p-3 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary transition-shadow duration-200"
                            placeholder="you@example.com" required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-text-primary">Your Message</label>
                        <textarea id="message" name="message" rows="5"
                            class="mt-1 block w-full p-3 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary transition-shadow duration-200"
                            placeholder="Tell us about your project or inquiry..." required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="w-full sm:w-auto bg-primary text-white py-3 px-8 rounded-lg font-semibold shadow-md hover:bg-accent transition-colors duration-300">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include 'includes/footer.inc.php' ?>
    <script src="assets/js/scroll-animations.js" defer></script>
    <script src="assets/js/custom.js" defer></script>
    <script src="assets/js/energy-calc.js" defer></script>

    <script>
        function calculateLoad() {
            // Get appliance values
            const bulb = Number(document.getElementById("bulb").value) * 15;
            const fan = Number(document.getElementById("fan").value) * 70;
            const tv = Number(document.getElementById("tv").value) * 100;
            const fridge = Number(document.getElementById("fridge").value) * 200;
            const iron = Number(document.getElementById("iron").value) * 1000;
            const laptop = Number(document.getElementById("laptop").value) * 60;
            const router = Number(document.getElementById("router").value) * 20;
            const ac = Number(document.getElementById("ac").value) * 1200;

            // Total power load
            const totalLoad = bulb + fan + tv + fridge + iron + laptop + router + ac;

            // Validate input
            if (totalLoad === 0) {
                document.getElementById("result").innerHTML =
                    "<b>Please enter at least one appliance.</b>";
                return;
            }

            // Inverter sizing (kVA)
            let inverterSizeKVA = (totalLoad / 800).toFixed(1);
            if (inverterSizeKVA < 0.5) inverterSizeKVA = 0.5;
            if (inverterSizeKVA > 100) inverterSizeKVA = 100;

            // Nearest standard inverter rating
            const standardRatings = [0.8, 1.5, 2.5, 3.5, 5, 7.5, 10, 15, 20, 30, 50, 100];
            const nearestRating = standardRatings.find(r => r >= inverterSizeKVA) || 100;

            const inverterRecommendation = `
      Calculated Load Requirement: ${inverterSizeKVA} kVA<br>
      Nearest Standard Inverter Rating: ${nearestRating} kVA
    `;

            // Battery calculations
            const backupHours = 4;
            const batteryVoltage = 48;
            const inverterEfficiency = 0.85;
            const totalWh = totalLoad * backupHours;
            const batteryAh = Math.ceil(totalWh / (batteryVoltage * inverterEfficiency));
            const leadBatteryCount = Math.ceil(batteryAh / 200);
            const leadRecommendation = `${leadBatteryCount} × 200Ah (${batteryVoltage}V each)`;

            // Lithium battery option
            const lithiumWh = totalWh / inverterEfficiency;
            const lithiumKWh = (lithiumWh / 1000).toFixed(1);
            const lithiumRecommendation = `${lithiumKWh} kWh Lithium Battery Pack (Recommended)`;

            // Solar recommendation
            const sunHours = 5;
            const requiredSolarWatts = Math.ceil(totalWh / sunHours);
            const panelSizes = [200, 250, 300, 400, 450, 550, 650];
            const chosenPanel =
                panelSizes.find(p => requiredSolarWatts / p <= Math.ceil(requiredSolarWatts / 300)) || 300;
            const solarPanelCount = Math.ceil(requiredSolarWatts / chosenPanel);
            const solarRecommendation = `${solarPanelCount} × ${chosenPanel}W panels (~${requiredSolarWatts}W total)`;

            // Backup estimates
            const noSolarBackup = backupHours;
            const withSolarBackup = (backupHours + sunHours * 0.6).toFixed(1);

            // Output results
            document.getElementById("result").innerHTML = `
      <h3 class="text-orange-500 text-xl font-semibold mb-3">🔋 Power System Summary</h3>
      <p><b>Total Load:</b> ${totalLoad.toLocaleString()} W</p>
      <p><b>Recommended Inverter:</b><br>${inverterRecommendation}</p>
      <hr class="border-t border-gray-700 my-3">
      <p><b>Lead-Acid Battery Bank:</b> ${leadRecommendation}</p>
      <p><b>Lithium Battery Option:</b> ${lithiumRecommendation}</p>
      <hr class="border-t border-gray-700 my-3">
      <p><b>Solar Panel Recommendation:</b> ${solarRecommendation}</p>
      <p><b>Estimated Backup Time:</b><br>
         • Without Solar: ${noSolarBackup} hours<br>
         • With Solar Support: ${withSolarBackup} hours</p>
    `;
        }
    </script>

</body>

</html>