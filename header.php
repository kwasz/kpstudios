<?php 
require_once 'functions.php'; 
$page_title = $page_title ?? 'KPStudios';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="style_for_game_site.css">
</head>
<body>
    <div class="gradient">
        <header class="box">
            <span class="logo"><a href="index.php" style="color: #ffffff;">KPStudios</a></span>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="news.php">News</a></li>
                    <li class="button"><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>