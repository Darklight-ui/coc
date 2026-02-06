<?php
// menu-data.php
$menuData = [
    'logo' => [
        'src' => BASE_URL.'assets/image/clay-option-logo.png',
        'alt' => 'Clay Option Logo',
        'text' => 'Clay Option Concepts'
    ],
    'mainMenu' => [
        [
            'text' => 'Batteries',
            'submenu' => [
                ['text' => 'Lithium Batteries', 'url' => BASE_URL.'batteries/Lithium-Battery'],
                ['text' => 'Deep Cycle (GEL) Battery', 'url' => BASE_URL.'batteries/gel-batteries'],
                ['text' => 'Tubular (Wet Cell) Battery', 'url' => BASE_URL.'batteries/agm-batteries']
            ]
        ],
        [
            'text' => 'Products',
            'submenu' => [
                [
                    'text' => 'Inverters',
                    'submenu' => [
                        ['text' => 'Hybrid', 'url' => BASE_URL.'inverters/inverter'],
                        ['text' => 'Non-Hybrid', 'url' => BASE_URL.'inverters/non-hybrid-inverter']
                    ]
                ],
                [
                    'text' => 'Batteries',
                    'submenu' => [
                        ['text' => 'Lithium Batteries', 'url' => 'Lithium-Battery'],
                        ['text' => 'Gel Batteries', 'url' => 'gel-batteries'],
                        ['text' => 'AGM Batteries', 'url' => 'agm-batteries']
                    ]
                ],
                ['text' => 'Solar Panels', 'url' => '#'],
                ['text' => 'Charge Controllers', 'url' => '#'],
                ['text' => 'Security Devices', 'url' => '#'],
                ['text' => 'Fire Alarm System', 'url' => '#'],
                ['text' => 'Communication Devices', 'url' => '#'],
                ['text' => 'SaaS', 'url' => '#'],
                ['text' => 'Accessories', 'url' => '#']
            ]
        ],
        ['text' => 'Services', 'url' => BASE_URL.'services/services'],
        ['text' => 'About', 'url' => '#'],
        ['text' => 'Contact', 'url' => 'Contact-us']
    ],
    'ctaButton' => [
        'text' => 'Request A Quote',
        'url' => '#'
    ]
];

// Helper functions
function generateDesktopMenu($items) {
    $html = '';
    foreach ($items as $item) {
        if (isset($item['submenu'])) {
            $html .= '
                <li class="relative">
                    <button class="desktop-dropdown flex items-center hover:text-accent transition-colors duration-200 focus:outline-none">
                        ' . htmlspecialchars($item['text']) . '
                        <svg class="ml-1 h-4 w-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    ' . generateDesktopSubmenu($item['submenu']) . '
                </li>
            ';
        } else {
            $html .= '
                <li><a href="' . htmlspecialchars($item['url']) . '" class="hover:text-accent transition-colors duration-200">' . htmlspecialchars($item['text']) . '</a></li>
            ';
        }
    }
    return $html;
}

function generateDesktopSubmenu($items) {
    $html = '<ul class="desktop-submenu absolute left-0 mt-2 w-60 bg-surface border border-border rounded-lg shadow-lg opacity-0 invisible transition-opacity duration-200 z-50">';
    
    foreach ($items as $item) {
        if (isset($item['submenu'])) {
            $html .= '
                <li class="relative group">
                    <button class="flex justify-between items-center w-full px-4 py-2 hover:bg-primary hover:text-white rounded-lg">
                        ' . htmlspecialchars($item['text']) . '
                        <svg class="ml-2 h-4 w-4 transform group-hover:rotate-90 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    ' . generateDesktopSubSubmenu($item['submenu']) . '
                </li>
            ';
        } else {
            $html .= '
                <li><a href="' . htmlspecialchars($item['url']) . '" class="block px-4 py-2 hover:bg-primary hover:text-white rounded-lg">' . htmlspecialchars($item['text']) . '</a></li>
            ';
        }
    }
    
    $html .= '</ul>';
    return $html;
}

function generateDesktopSubSubmenu($items) {
    $html = '<ul class="absolute top-0 left-full ml-1 w-52 bg-surface border border-border rounded-lg shadow-lg opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-opacity duration-200">';
    
    foreach ($items as $item) {
        $html .= '
            <li><a href="' . htmlspecialchars($item['url']) . '" class="block px-4 py-2 hover:bg-primary hover:text-white rounded-lg">' . htmlspecialchars($item['text']) . '</a></li>
        ';
    }
    
    $html .= '</ul>';
    return $html;
}

function generateMobileMenu($items, $padding = 4) {
    $html = '';
    foreach ($items as $item) {
        if (isset($item['submenu'])) {
            $html .= '
                <li>
                    <button class="w-full flex justify-between items-center hover:text-accent transition-colors duration-200 dropdown-toggle">
                        ' . htmlspecialchars($item['text']) . '
                        <svg class="ml-1 h-4 w-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    ' . generateMobileSubmenu($item['submenu'], 4) . '
                </li>
            ';
        } else {
            $html .= '
                <li><a href="' . htmlspecialchars($item['url']) . '" class="hover:text-accent transition-colors duration-200">' . htmlspecialchars($item['text']) . '</a></li>
            ';
        }
    }
    return $html;
}

function generateMobileSubmenu($items, $padding) {
    $html = '<ul class="hidden pl-' . $padding . ' mt-2 space-y-1">';
    
    foreach ($items as $item) {
        if (isset($item['submenu'])) {
            $html .= '
                <li>
                    <button class="w-full flex justify-between items-center px-4 py-2 hover:bg-primary hover:text-white rounded-lg dropdown-toggle">
                        ' . htmlspecialchars($item['text']) . '
                        <svg class="ml-1 h-4 w-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    ' . generateMobileSubmenu($item['submenu'], $padding + 2) . '
                </li>
            ';
        } else {
            $html .= '
                <li><a href="' . htmlspecialchars($item['url']) . '" class="block px-4 py-2 hover:bg-primary hover:text-white rounded-lg">' . htmlspecialchars($item['text']) . '</a></li>
            ';
        }
    }
    
    $html .= '</ul>';
    return $html;
}
?>
<header class="bg-white/30 backdrop-blur-md border-b border-custom">
    <nav class="container mx-auto flex items-center justify-between px-4 py-3 relative">
        <!-- Logo -->
        <div class="flex gap-3 items-center font-bold">
            <a href="<?= BASE_URL ?>">
                <img src="<?php echo $menuData['logo']['src']; ?>" alt="<?php echo $menuData['logo']['alt']; ?>" class="h-10 w-auto">
            </a>
            <h3><?php echo $menuData['logo']['text']; ?></h3>
        </div>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-6 text-text-primary font-medium">
            <?php echo generateDesktopMenu($menuData['mainMenu']); ?>
        </ul>

        <!-- RAQ Button (Desktop) -->
        <a href="<?php echo $menuData['ctaButton']['url']; ?>"
            class="hidden md:inline-block bg-primary text-white px-4 py-2 rounded-lg hover:bg-accent transition-colors duration-200">
            <?php echo $menuData['ctaButton']['text']; ?>
        </a>

        <!-- Mobile Hamburger -->
        <button id="mobile-toggle" class="md:hidden flex items-center text-text-primary focus:outline-none z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="mobile-menu md:hidden fixed top-16 right-0 w-64 bg-surface shadow-lg rounded-lg z-50 transform scale-y-0 origin-top transition-transform duration-300">
            <ul class="px-6 py-8 space-y-2 text-text-primary font-medium">
                <?php echo generateMobileMenu($menuData['mainMenu']); ?>
                
                <!-- RAQ Button -->
                <a href="<?php echo $menuData['ctaButton']['url']; ?>"
                    class="md:hidden block bg-primary text-white px-4 py-2 mx-6 mb-6 rounded-lg hover:bg-accent transition-colors duration-200 text-center">
                    <?php echo $menuData['ctaButton']['text']; ?>
                </a>
            </ul>
        </div>
    </nav>
</header>