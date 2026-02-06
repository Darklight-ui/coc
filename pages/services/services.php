<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon | Clay Option Concepts</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        
        :root {
            --primary: #3b82f6;
            --accent: #10b981;
            --surface: #ffffff;
            --text-primary: #1f2937;
            --border: #e5e7eb;
        }
        
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: white;
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        .glow {
            filter: drop-shadow(0 0 20px rgba(59, 130, 246, 0.3));
        }
        
        .energy-pulse {
            animation: energyPulse 3s ease-in-out infinite;
        }
        
        @keyframes energyPulse {
            0%, 100% { 
                opacity: 0.7;
                transform: scale(1);
            }
            50% { 
                opacity: 1;
                transform: scale(1.05);
            }
        }
        
        .float-slow {
            animation: float 6s ease-in-out infinite;
        }
        
        .float-medium {
            animation: float 4s ease-in-out infinite;
            animation-delay: 1s;
        }
        
        .float-fast {
            animation: float 3s ease-in-out infinite;
            animation-delay: 0.5s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        .circuit-path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: draw 30s linear infinite;
        }
        
        @keyframes draw {
            to {
                stroke-dashoffset: 0;
            }
        }
        
        .shimmer {
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.1),
                transparent
            );
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
    </style>
</head>
<body>
    <div class="relative w-full min-h-screen overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <!-- Circuit Board Lines -->
            <svg class="absolute inset-0 w-full h-full opacity-10" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="80" height="80" patternUnits="userSpaceOnUse">
                        <path d="M 80 0 L 0 0 0 80" fill="none" stroke="rgba(59, 130, 246, 0.3)" stroke-width="1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)"/>
                
                <!-- Animated Circuit Paths -->
                <path class="circuit-path" d="M100,100 Q250,50 400,100 T700,100" stroke="rgba(16, 185, 129, 0.2)" stroke-width="2" fill="none"/>
                <path class="circuit-path" d="M800,300 Q650,250 500,300 T200,300" stroke="rgba(59, 130, 246, 0.2)" stroke-width="2" fill="none"/>
            </svg>
            
            <!-- Floating Energy Elements -->
            <div class="absolute top-1/4 left-1/4">
                <div class="w-32 h-32 rounded-full bg-gradient-to-r from-blue-500/10 to-emerald-500/10 blur-xl float-slow"></div>
            </div>
            <div class="absolute bottom-1/4 right-1/4">
                <div class="w-40 h-40 rounded-full bg-gradient-to-r from-emerald-500/10 to-blue-500/10 blur-xl float-medium"></div>
            </div>
            <div class="absolute top-3/4 left-1/3">
                <div class="w-24 h-24 rounded-full bg-gradient-to-r from-blue-400/10 to-emerald-400/10 blur-xl float-fast"></div>
            </div>
        </div>

        <!-- Glowing Orbs -->
        <div class="absolute top-20 right-20">
            <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-emerald-400 rounded-full glow energy-pulse"></div>
        </div>
        <div class="absolute bottom-32 left-20">
            <div class="w-12 h-12 bg-gradient-to-r from-emerald-400 to-blue-500 rounded-full glow energy-pulse" style="animation-delay: 1s;"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 py-12">
            <div class="max-w-6xl mx-auto">
                <!-- Header -->
                <header class="flex justify-between items-center mb-20">
                    <a href="./" class="flex items-center gap-3">
                        <div class="bg-white/10 backdrop-blur-sm p-3 rounded-xl border border-white/20">
                            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-emerald-400 rounded-lg flex items-center justify-center">
                                <span class="text-xl font-bold text-white">CO</span>
                            </div>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-white">Clay Option Concepts</h1>
                            <p class="text-sm text-gray-300">Energy Innovation</p>
                        </div>
                    </a>
                    
                    <div class="hidden md:flex items-center gap-6">
                        <a href="Contact-us" class="text-gray-300 hover:text-white transition-colors">Contact</a>
                        <a href="#" class="px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all">
                            Get Notified
                        </a>
                    </div>
                </header>

                <!-- Main Content -->
                <main class="text-center py-12">
                    <!-- Energy Core Animation -->
                    <div class="relative mb-12">
                        <div class="relative inline-block">
                            <!-- Outer Ring -->
                            <div class="w-64 h-64 rounded-full border-4 border-blue-500/30 relative">
                                <!-- Inner Ring -->
                                <div class="absolute inset-8 rounded-full border-2 border-emerald-400/40 animate-spin" style="animation-duration: 20s;">
                                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-4 h-4 bg-emerald-400 rounded-full"></div>
                                </div>
                                
                                <!-- Energy Core -->
                                <div class="absolute inset-16 rounded-full bg-gradient-to-r from-blue-500/20 to-emerald-400/20 flex items-center justify-center">
                                    <div class="w-32 h-32 rounded-full bg-gradient-to-r from-blue-500/30 to-emerald-400/30 flex items-center justify-center">
                                        <div class="w-20 h-20 rounded-full bg-gradient-to-r from-blue-500 to-emerald-400 flex items-center justify-center energy-pulse">
                                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Orbiting Elements -->
                            <div class="absolute top-0 left-0 w-64 h-64">
                                <div class="absolute top-1/2 left-0 transform -translate-y-1/2 -translate-x-1/2">
                                    <div class="w-6 h-6 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full glow"></div>
                                </div>
                                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <div class="w-5 h-5 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full glow"></div>
                                </div>
                                <div class="absolute top-1/2 left-full transform -translate-y-1/2 -translate-x-1/2">
                                    <div class="w-6 h-6 bg-gradient-to-r from-blue-500 to-emerald-400 rounded-full glow"></div>
                                </div>
                                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2">
                                    <div class="w-5 h-5 bg-gradient-to-r from-emerald-400 to-blue-500 rounded-full glow"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Title -->
                    <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-blue-400 via-emerald-400 to-blue-400 bg-clip-text text-transparent">
                        Powering Up
                    </h1>
                    
                    <!-- Subtitle -->
                    <p class="text-2xl md:text-3xl text-gray-300 mb-6">
                        Something <span class="text-emerald-400 font-semibold">energizing</span> is on the way
                    </p>
                    
                    <!-- Description -->
                    <p class="text-lg text-gray-400 mb-12 max-w-2xl mx-auto">
                        We're working on groundbreaking energy solutions that will revolutionize 
                        how you power your world. Stay tuned for our launch - the future of energy 
                        is almost here.
                    </p>

                    <!-- Countdown Timer -->
                    <div class="max-w-2xl mx-auto mb-12">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6">
                                <div class="text-4xl font-bold text-blue-400 mb-2" id="days">00</div>
                                <div class="text-gray-400">Days</div>
                            </div>
                            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6">
                                <div class="text-4xl font-bold text-emerald-400 mb-2" id="hours">00</div>
                                <div class="text-gray-400">Hours</div>
                            </div>
                            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6">
                                <div class="text-4xl font-bold text-blue-300 mb-2" id="minutes">00</div>
                                <div class="text-gray-400">Minutes</div>
                            </div>
                            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6">
                                <div class="text-4xl font-bold text-emerald-300 mb-2" id="seconds">00</div>
                                <div class="text-gray-400">Seconds</div>
                            </div>
                        </div>
                    </div>

                    <!-- Email Subscription -->
                    <div class="max-w-md mx-auto mb-16">
                        <div class="relative">
                            <div class="bg-gradient-to-r from-blue-500/20 to-emerald-400/20 p-1 rounded-xl shimmer">
                                <div class="bg-gray-900 rounded-xl p-1">
                                    <form id="notify-form" class="flex flex-col sm:flex-row gap-2">
                                        <input type="email" 
                                               placeholder="Enter your email for exclusive updates"
                                               class="flex-grow px-4 py-3 bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                        <button type="submit"
                                                class="px-6 py-3 bg-gradient-to-r from-blue-500 to-emerald-400 text-white font-medium rounded-lg hover:from-blue-600 hover:to-emerald-500 transition-all duration-300">
                                            Get Notified
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Be the first to know about our launch and special offers</p>
                    </div>

                    <!-- Features Preview -->
                    <div class="max-w-4xl mx-auto mb-16">
                        <h3 class="text-2xl font-semibold mb-8 text-gray-300">What's Coming</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 hover:bg-white/10 transition-all duration-300">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500/20 to-blue-600/20 rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold mb-2 text-white">Advanced Batteries</h4>
                                <p class="text-gray-400">Next-generation lithium and gel battery technology</p>
                            </div>
                            
                            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 hover:bg-white/10 transition-all duration-300">
                                <div class="w-12 h-12 bg-gradient-to-r from-emerald-500/20 to-emerald-600/20 rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold mb-2 text-white">Smart Inverters</h4>
                                <p class="text-gray-400">AI-powered energy management systems</p>
                            </div>
                            
                            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 hover:bg-white/10 transition-all duration-300">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-400/20 to-emerald-400/20 rounded-lg flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold mb-2 text-white">Solar Solutions</h4>
                                <p class="text-gray-400">High-efficiency panels and monitoring systems</p>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Bar -->
                    <div class="max-w-2xl mx-auto mb-12">
                        <div class="flex justify-between text-sm text-gray-400 mb-2">
                            <span>Development Progress</span>
                            <span id="progress-percentage">85%</span>
                        </div>
                        <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                            <div id="progress-bar" class="h-full bg-gradient-to-r from-blue-500 to-emerald-400 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                </main>

                <!-- Footer -->
                <footer class="border-t border-gray-800 pt-8 mt-16">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="text-gray-400 mb-4 md:mb-0">
                            <p>© 2024 Clay Option Concepts. All rights reserved.</p>
                            <p class="text-sm mt-1">Powering the future, one innovation at a time</p>
                        </div>
                        
                        <div class="flex gap-6">
                            <a href="Contact-us" class="text-gray-400 hover:text-white transition-colors">Contact</a>
                            <a href="./" class="text-gray-400 hover:text-white transition-colors">Home</a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy</a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms</a>
                        </div>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="flex justify-center gap-4 mt-8">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                            📧
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-400 transition-colors">
                            🐦
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                            💼
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-emerald-500 transition-colors">
                            📱
                        </a>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script>
        // Countdown Timer
        function updateCountdown() {
            const launchDate = new Date('2024-12-31T00:00:00').getTime();
            const now = new Date().getTime();
            const distance = launchDate - now;
            
            if (distance < 0) {
                document.getElementById('days').textContent = '00';
                document.getElementById('hours').textContent = '00';
                document.getElementById('minutes').textContent = '00';
                document.getElementById('seconds').textContent = '00';
                return;
            }
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            document.getElementById('days').textContent = days.toString().padStart(2, '0');
            document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
            
            // Animate numbers
            animateNumber('days', days);
            animateNumber('hours', hours);
            animateNumber('minutes', minutes);
            animateNumber('seconds', seconds);
        }
        
        function animateNumber(elementId, newValue) {
            const element = document.getElementById(elementId);
            if (element.textContent !== newValue.toString().padStart(2, '0')) {
                element.style.transform = 'scale(1.2)';
                setTimeout(() => {
                    element.style.transform = 'scale(1)';
                }, 300);
            }
        }
        
        // Update countdown every second
        setInterval(updateCountdown, 1000);
        updateCountdown(); // Initial call
        
        // Animated progress bar
        function animateProgressBar() {
            const progressBar = document.getElementById('progress-bar');
            const percentage = document.getElementById('progress-percentage');
            let progress = 85;
            
            setInterval(() => {
                // Simulate occasional progress updates
                if (Math.random() > 0.98 && progress < 100) {
                    progress += 1;
                    progressBar.style.width = `${progress}%`;
                    percentage.textContent = `${progress}%`;
                    
                    // Add pulse effect
                    progressBar.style.transform = 'scaleX(1.1)';
                    setTimeout(() => {
                        progressBar.style.transform = 'scaleX(1)';
                    }, 300);
                }
            }, 2000);
        }
        
        // Form submission