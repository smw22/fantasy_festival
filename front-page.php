<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            
            <div class="home-container">
                <div class="quest-buttons">
                    <a href="<?php echo get_permalink(get_page_by_path("quest")) ?>">DAG</a>
                </div>

                <div class="quest-buttons">
                    <a href="<?php echo get_permalink(get_page_by_path("quest")) ?>">AFTEN</a>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>