<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta lang="bg" />
    <title>
        <?php echo SITE_TITLE; ?>
    </title>
    <link rel="stylesheet" href="style/style.css" />
    <script src="style/jquery-1.9.0.js"></script>
</head>
<body>
<header>
    <nav id="main_navigation">
        <div id="languages">
            <span>BG</span>
            <img src="images/lang_dropdown.png">
        </div>
        <ul>
            <li<?php echo (CURRENT_PAGE == 'index') ? ' class="selected"' : ''; ?>>
                <a href="index.php">НАЧАЛО</a>
                <div class="<?php echo (CURRENT_PAGE == 'index') ? 'active' : 'unactive'; ?>"></div>
            </li>
            <li<?php echo (CURRENT_PAGE == 'about') ? ' class="selected"' : ''; ?>>
                <a href="about.php">ЗА НАС</a>
                <div class="<?php echo (CURRENT_PAGE == 'index') ? 'active' : 'unactive'; ?>"></div>
            </li>
            <li<?php echo (CURRENT_PAGE == 'contacts') ? ' class="selected"' : ''; ?>>
                <a href="contacts.php">КОНТАКТИ</a>
                <div class="<?php echo (CURRENT_PAGE == 'index') ? 'active' : 'unactive'; ?>"></div>
            </li>
        </ul>
    </nav>
</header>
<div id="wrapper">