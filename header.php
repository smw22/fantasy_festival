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
                <li class="nav-menu"><a href="https://www.universe.com/events/family-quest-dagquest-tickets-C6PYX3">KØB BILETTER</a></li>
                <li class="nav-menu"><a href="<?php echo get_permalink(get_page_by_path("story")) ?>">OM</a></li>
                <li class="nav-menu"><a href="<?php echo get_permalink(get_page_by_path("contact")) ?>">KONTAKT</a></li>
                <li class="ham-menu">
                    <span class="ham-menu-first-span"></span>
                    <span class="ham-menu-midle-span"></span>
                    <span class="ham-menu-last-span"></span>
                </li>

            </ul>
        </nav>
        <a href="#">
            <div class="off-screen-menu">
                <ul>
                    <li class="responsive-menu"><a href="https://www.universe.com/events/family-quest-dagquest-tickets-C6PYX3" class="off-screen-menu-link">Køb biletter</a></li>
                    <li class="responsive-menu"><a href="<?php echo get_permalink(get_page_by_path("story")) ?>" class="off-screen-menu-link">Om</a></li>
                    <li class="responsive-menu"><a href="<?php echo get_permalink(get_page_by_path("contact")) ?>" class="off-screen-menu-link">Kontakt</a></li>
                    <li class=""><a href="https://fantasyfestival.dk/" class="off-screen-menu-link">Fantasy Festival</a></li>
                    <li class=""><a href="<?php echo get_template_directory_uri(); ?>/img/program.png" download class="off-screen-menu-link">Hent Program</a></li>
                    <li class=""><a href="<?php echo get_permalink(get_page_by_path("information")) ?>" class="off-screen-menu-link">Praktiske info</a></li>
                </ul>
            </div>
        </a>
    </header>
    <main>