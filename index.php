<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            
        <!-- <div class="quest-buttons">
                DAG
            </div>

            <div class="quest-buttons">
                AFTEN
            </div> -->

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>