<?php
$pageTitle = "Home - Clay Option Concepts";
$pageDescription = "Get in touch with Clay Option Concept for expert services in solar installations, inverters, CCTV, fire alarms, networking, and business solutions. We're here to assist you.";
$pageKeywords = "Clay Option Concept, contact us, solar installation, inverters, batteries, CCTV, fire alarms, networking, Abuja Nigeria";
$pageOGImage = "assets/image/services-image/services.jpg";
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

    <section class="py-16 bg-background">
        <div class="container mx-auto px-4">
            <!-- Heading -->
            <h2 class="text-3xl font-bold text-center text-primary mb-8">Contact Us</h2>
            <p class="text-center text-textSecondary mb-12 max-w-2xl mx-auto">
                Have questions about our products or services? Reach out to us today — our team is always ready to assist you.
            </p>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                <!-- Contact Information -->
                <div class="space-y-6">
                    <div class="bg-surface p-6 rounded-xl shadow-md">
                        <h3 class="text-xl font-semibold text-textPrimary mb-4">Get in Touch</h3>
                        <p class="text-textSecondary mb-2"><strong>Phone:</strong> +234 800 123 4567</p>
                        <p class="text-textSecondary mb-2"><strong>Email:</strong> info@clayoptionconcept.com</p>
                        <p class="text-textSecondary mb-2"><strong>Address:</strong> 12 Clay Concept Plaza, Abuja, Nigeria</p>
                        <p class="text-textSecondary"><strong>Working Hours:</strong> Mon - Sat, 9:00 AM - 6:00 PM</p>
                    </div>

                    <!-- Map -->
                    <div class="bg-surface p-4 rounded-xl shadow-md">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.593251408734!2d7.49508!3d9.05785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0a4c7e2f63b7%3A0xe1234567890abcd!2sAbuja!5e0!3m2!1sen!2sng!4v1689192699932"
                            width="100%"
                            height="250"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-surface p-8 rounded-xl shadow-md">
                    <h3 class="text-xl font-semibold text-textPrimary mb-6">Send Us a Message</h3>
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label for="name" class="block text-textPrimary font-medium">Full Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full mt-2 px-4 py-3 rounded-lg border border-border focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="email" class="block text-textPrimary font-medium">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full mt-2 px-4 py-3 rounded-lg border border-border focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="subject" class="block text-textPrimary font-medium">Subject</label>
                            <input type="text" id="subject" name="subject"
                                class="w-full mt-2 px-4 py-3 rounded-lg border border-border focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="message" class="block text-textPrimary font-medium">Message</label>
                            <textarea id="message" name="message" rows="4" required
                                class="w-full mt-2 px-4 py-3 rounded-lg border border-border focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-accent transition">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->
    <?php include 'includes/footer.inc.php' ?>
    <script src="assets/js/scroll-animations.js" defer></script>
    <script src="assets/js/custom.js" defer></script>
</body>

</html>