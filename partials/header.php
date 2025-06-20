<?php
session_start();
$isLoggedIn = isset($_SESSION['user']);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>Caffeine</title>
<link rel="icon" href="img/caffeine_icon.ico" type="image/x-icon">
  </head>
  <body>
    <header class="header">
      <h1><a href="#" class="logo"> Caffeine </a></h1>
      <button class="mobile-nav-toggle">☰</button>

      <nav class="main-nav">
       <ul class="main-nav-list">
          <li>
            <a href="index.php" class="main-nav-link <?php if($currentPage === 'index') echo 'main-nav-link--active'; ?>">Home</a>
          </li>
          <li>
            <a href="menu.php" class="main-nav-link <?php if($currentPage === 'menu') echo 'main-nav-link--active'; ?>">Menu</a>
          </li>
          <li>
            <a href="about.php" class="main-nav-link <?php if($currentPage === 'about') echo 'main-nav-link--active'; ?>">About Us</a>
          </li>
          <li>
            <a href="facilities.php" class="main-nav-link <?php if($currentPage === 'facilities') echo 'main-nav-link--active'; ?>">Facilities</a>
          </li>
        </ul>
        <ul class="sign-in-wrapper">
          <?php if ($isLoggedIn): ?>
            <li><a href="php/logout.php" class="main-nav-link">Logout (<?php echo htmlspecialchars($_SESSION['user']); ?>)</a></li>
          <?php else: ?>
            <li><a href="sign-in.php" class="main-nav-link">Sign In</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </header>