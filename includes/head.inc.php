<?php
// Default metadata values (in case none are set)
if (!isset($pageTitle))
    $pageTitle = "Clay Option Concepts";
if (!isset($pageDescription))
    $pageDescription = "Clay Option Concepts specializes in technology, security, and power solutions including solar, inverters, CCTV, biometric access, and fire alarms.";
if (!isset($pageKeywords))
    $pageKeywords = "solar, inverters, CCTV, fire alarms, biometric, networking, power solutions, Clay Option Concepts";
if (!isset($pageOGImage))
    $pageOGImage = "assets/image/clay-option.jpg"; // default OG image
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta -->
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">

    <!-- Open Graph (for social sharing) -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:image" content="<?php echo $pageOGImage; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">

    <!-- Favicon -->
    <link rel="icon" href="<?= BASE_URL ?>assets/favicon.ico" type="image/x-icon">

    <!-- External Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>src/output.css">
</head>