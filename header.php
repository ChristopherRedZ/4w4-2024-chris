<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Heist</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Teko:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&family=Roboto&family=Teko:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c1a11825f1.js" crossorigin="anonymous"></script>
</head>

<body>

    <div id="menu__entete" class="global">
        <header class="menu__header">
            <input type="checkbox" name="" id="chk_burger">
            <label id="burger" for="chk_burger">
                <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#fff">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </label>
            <?php wp_nav_menu(array("container" => "nav")) ?>
        </header>
    </div>