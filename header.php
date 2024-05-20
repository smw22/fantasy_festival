<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
    <header id="home">
        <nav>
            <div class="logo">
                <a href="<?php echo get_permalink(get_page_by_path("frontpage")) ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/drage.jpg" alt="" class="logo-image"></a>
            </div>
            <ul>
                <li><a href="https://www.universe.com/events/family-quest-dagquest-tickets-C6PYX3">KØB BILETTER</a></li>
                <li><a href="">OM</a></li>
                <li><a href="">KONTAKT</a></li>
                <li class="ham-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </li>
            </ul>
        </nav>
        <div class="off-screen-menu">
                <ul>
                    <li class="link"><a href="https://fantasyfestival.dk/">Fantasy Festival</a></li>
                    <li class="link">Second</li>
                    <li class="link">Third</li>
                </ul>
            </div>
    </header>
    <main>