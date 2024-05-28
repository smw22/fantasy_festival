<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <?php
                $title_box_text = get_field("title-box");
                $first_text_box = get_field("first-text-box");
                $second_text_box = get_field("second-text-box");
                $third_text_box = get_field("third-text-box");
                $fourth_text_box = get_field("fourth-text-box");
                $fifth_text_box = get_field("fifth-text-box");
                $sixth_text_box = get_field("sixth-text-box");
                $seventh_text_box = get_field("seventh-text-box");
                $night_background_image = get_field("night-quest-background")
            ?>

            <div class="blue-header-background">
                
            </div>

            <div class="wrapper">
                <div class="night-background">
                    <img src="<?php echo $night_background_image["url"] ?>" alt="" class="night-background-image">
                </div>
                
                <div class="container">
                    <div class="title-box">
                        <h1>AFTEN QUEST</h1>
                        <p>
                            <?php echo $title_box_text; ?>
                        </p>
                    </div>
                    <div class="information">
                        <div class="information-text-box uneven">
                            <?php echo $first_text_box; ?>
                        </div>
                        <div class="information-text-box even">
                            <?php echo $second_text_box; ?> 
                        </div>
                        <div class="information-text-box uneven">
                            <?php echo $third_text_box; ?>
                        </div>
                        <div class="information-text-box even">
                            <?php echo $fourth_text_box; ?>
                        </div>
                        <div class="information-text-box uneven">
                            <?php echo $fifth_text_box; ?>
                        </div>
                        <div class="information-text-box even">
                            <?php echo $sixth_text_box; ?>
                        </div>
                        <div class="information-text-box uneven">
                            <?php echo $seventh_text_box; ?>
                        </div>
                    </div>
                </div>
            </div>
            
            

        <?php endwhile; ?>
    <?php endif; ?>
<?php 
if(is_page(11)) {
   get_footer('quest');
} else {
   get_footer();
}
?>  