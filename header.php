<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="ametis: Intelligent QA and Test Automation Services to help you release better software, faster." />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ametis | Intelligent QA Services</title>
    
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/styles.css" />

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="/" aria-label="ametis Home">
                    <img src="assets/images/am1-blue.svg" alt="ametis Quality Assurance Services" width="180" height="40" />
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="main-nav hidden md:block" aria-label="Main navigation">
                <ul>
                    <li><a href="/" class="nav-link">Home</a></li>
                    <li><a href="/services.php" class="nav-link">Services</a></li>
                    <li><a href="/about.php" class="nav-link">About</a></li>
                    <li><a href="/contact.php" class="nav-link">Contact</a></li>
                </ul>
            </nav>
            
            <!-- Mobile Menu Button -->
            <button class="mobile-menu-button md:hidden" aria-label="Toggle navigation" aria-expanded="false">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Navigation -->
        <div class="mobile-nav md:hidden hidden" aria-label="Mobile navigation">
            <div class="container py-4">
                <ul>
                    <li><a href="/" class="mobile-nav-link">Home</a></li>
                    <li><a href="/about.php" class="mobile-nav-link">About</a></li>
                    <li><a href="/contact.php" class="mobile-nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>