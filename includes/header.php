<?php
// includes/header.php — Lab 4 shared header.
// Every page sets $page_title before including this file.
// $page_heading defaults to $page_title; $current_page marks the nav link.
if (!isset($page_heading)) {
    $page_heading = $page_title;
}
if (!isset($current_page)) {
    $current_page = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?><?php if ($page_title !== 'Ereteti Dairy Sacco') echo ' - Ereteti Dairy Sacco'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <div class="brand">
            <h1><?php echo $page_heading; ?></h1>
            <p>Milk collected twice a day, on three routes out of Ngong.</p>
        </div>
    </header>
    <nav aria-label="Main navigation">
        <a href="index.php"<?php if ($current_page === 'index') echo ' aria-current="page"'; ?>>Home</a>
        <a href="about.php"<?php if ($current_page === 'about') echo ' aria-current="page"'; ?>>About</a>
        <a href="routes.php"<?php if ($current_page === 'routes') echo ' aria-current="page"'; ?>>Our routes</a>
        <a href="contact.php"<?php if ($current_page === 'contact') echo ' aria-current="page"'; ?>>Contact</a>
        <a href="register.php"<?php if ($current_page === 'register') echo ' aria-current="page"'; ?>>Join</a>
        <a href="deliveries.php"<?php if ($current_page === 'deliveries') echo ' aria-current="page"'; ?>>Deliveries</a>
    </nav>
    <div class="page-content">
