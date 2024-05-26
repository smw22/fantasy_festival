<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <div class="temporal-blue-header-background">
                
            </div>
            
            
            <div class="portal-backgroud">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portal-website.webp" alt="" class="portal-background-image">
            </div>

            <div class="home-container">
                

                <div class="quest-buttons night-quest-button">
                    <a class="quest-link" href="<?php echo get_permalink(get_page_by_path("quest")) ?>">AFTEN QUEST</a>
                </div>
                
                <div class="quest-buttons day-quest-button">
                    <a class="quest-link" href="#">DAG QUEST</a>
                </div>
            </div>

            
            <div class="information-section">
                <h1 class="information-title">INFORMATION</h1>
                <div class="information-section-row">

                    <a class="information-link" href="<?php echo get_permalink(get_page_by_path("information")) ?>"><div class="information-section-item">
                        <div class="information-section-item-icon">
                            <svg class="homepage-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="currentColor" d="M512 64a448 448 0 1 1 0 896.064A448 448 0 0 1 512 64m67.2 275.072c33.28 0 60.288-23.104 60.288-57.344s-27.072-57.344-60.288-57.344c-33.28 0-60.16 23.104-60.16 57.344s26.88 57.344 60.16 57.344M590.912 699.2c0-6.848 2.368-24.64 1.024-34.752l-52.608 60.544c-10.88 11.456-24.512 19.392-30.912 17.28a12.99 12.99 0 0 1-8.256-14.72l87.68-276.992c7.168-35.136-12.544-67.2-54.336-71.296c-44.096 0-108.992 44.736-148.48 101.504c0 6.784-1.28 23.68.064 33.792l52.544-60.608c10.88-11.328 23.552-19.328 29.952-17.152a12.8 12.8 0 0 1 7.808 16.128L388.48 728.576c-10.048 32.256 8.96 63.872 55.04 71.04c67.84 0 107.904-43.648 147.456-100.416z"/></svg>

                        </div>
                        <p class="information-section-item-title">Praktisk information</p>
                    </div>
                    </a>

                    <a href="#home" class="information-link"><div class="information-section-item">
                        <div class="information-section-item-icon">
                        <svg class="homepage-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M13.8 5.2C13 5 12.2 5 11.4 5l3.2-2.7l1.4 4c-.7-.5-1.4-.8-2.2-1.1M7 7.1c.6-.6 1.3-1.1 2-1.4l-4.1-.8l.7 4.1c.4-.7.8-1.4 1.4-1.9m-1.8 6.7C5 13 5 12.2 5 11.4l-2.7 3.2l4 1.4c-.5-.6-.9-1.4-1.1-2.2M22 19v2H3l5.4-5.5c-1.9-2-1.9-5.1 0-7.1c1.9-1.9 5.1-1.9 7 0l3-3l1.4 1.4L7.7 19zM9.8 14.1L14 9.8c-1.2-1.1-3-1.1-4.2 0c-1.1 1.2-1.1 3.1 0 4.3"/></svg>
                        </div>
                        <p class="information-section-item-title">Kort om de forskellige Quests</p>
                    </div>
                    </a>

                    <a class="information-link" href="<?php echo get_permalink(get_page_by_path("story")) ?>"><div class="information-section-item">
                        <div class="information-section-item-icon">
                        <svg class="homepage-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" d="M1 2.828c.885-.37 2.154-.769 3.388-.893c1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493c-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752c1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81c-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02c1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877c1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/></svg>

                        </div>
                        <p class="information-section-item-title">Hvad er historien om Fantasy Quest</p>
                    </div>
                    </a>
                </div>

                <div class="information-section-row">

                    <a class="information-link" href="https://www.universe.com/events/fantasy-quest-aftenquest-tickets-2PCHR4"><div class="information-section-item">
                        <div class="information-section-item-icon">
                        <svg class="homepage-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32"><path fill="currentColor" d="M29 14a1 1 0 0 0 1-1V8a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v5a1 1 0 0 0 1 1a2 2 0 0 1 0 4a1 1 0 0 0-1 1v5a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2v-5a1 1 0 0 0-1-1a2 2 0 0 1 0-4m-1 5.87V24h-7v-3h-2v3H4v-4.13a4 4 0 0 0 0-7.74V8h15v3h2V8h7v4.13a4 4 0 0 0 0 7.74"/><path fill="currentColor" d="M19 13h2v6h-2z"/></svg>
                        </div>
                        <p class="information-section-item-title">Køb biletter</p>
                    </div>
                    </a>

                    <a class="information-link" href="<?php echo get_permalink(get_page_by_path("contact")) ?>"><div class="information-section-item">
                        <div class="information-section-item-icon">
                        <svg class="homepage-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M22 3H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m0 16H2V5h20zM21 6h-7v5h7zm-1 2l-2.5 1.75L15 8V7l2.5 1.75L20 7zM9 12a3 3 0 0 0 3-3a3 3 0 0 0-3-3a3 3 0 0 0-3 3a3 3 0 0 0 3 3m0-4a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1m6 8.59c0-2.5-3.97-3.59-6-3.59s-6 1.09-6 3.59V18h12zM5.5 16c.72-.5 2.2-1 3.5-1s2.77.5 3.5 1z"/></svg>
                        </div>
                        <p class="information-section-item-title">Kontakt os</p>
                    </div>
                    </a>

                    <a class="information-link" href="<?php echo get_template_directory_uri(); ?>/img/program.pdf" download><div class="information-section-item">
                        <div class="information-section-item-icon">
                        <svg class="homepage-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11zm-6 4q-.825 0-1.412-.587T4 18v-3h2v3h12v-3h2v3q0 .825-.587 1.413T18 20z"/></svg>
                        </div>
                        <p class="information-section-item-title">Download programoversigt</p>
                    </div>
                    </a>
                </div>

            </div>


            
            <div class="program-image-box">
                <h1 class="information-title">PROGRAM </h1>
                <img src="<?php echo get_template_directory_uri(); ?>/img/program-website.webp" alt="" class="program-image">
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php 
if(is_page(7)) {
   get_footer('frontpage');
} else {
   get_footer();
}
?>  