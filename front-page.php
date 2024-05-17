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

            <h1 class="information-title">Information</h1>
            <div class="information-section">

                <div class="information-section-item">
                    <div class="information-section-item-icon">

                    </div>
                    <p class="information-section-item-title"></p>
                </div>

                <div class="information-section-item">
                    <div class="information-section-item-icon">

                    </div>
                    <p class="information-section-item-title"></p>
                </div>

                <div class="information-section-item">
                    <div class="information-section-item-icon">

                    </div>
                    <p class="information-section-item-title"></p>
                </div>

                <div class="information-section-item">
                    <div class="information-section-item-icon">

                    </div>
                    <p class="information-section-item-title"></p>
                </div>

                <div class="information-section-item">
                    <div class="information-section-item-icon">

                    </div>
                    <p class="information-section-item-title"></p>
                </div>

                <div class="information-section-item">
                    <div class="information-section-item-icon">

                    </div>
                    <p class="information-section-item-title"></p>
                </div>

            </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>