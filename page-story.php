<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <?php
                $first_story_title = get_field("first-story-title");
                $second_story_title = get_field("second-story-title");
                $first_story_text = get_field("first-story-text");
                $second_story_text = get_field("second-story-text");
                $third_story_text = get_field("third-story-text");
                $fourth_story_text = get_field("fourth-story-text");
                $fifth_story_text = get_field("fifth-story-text");
                $sixth_story_text = get_field("sixth-story-text");   
                $seventh_story_text = get_field("seventh-story-text");
                $first_character = get_field("first-character");
                $second_character = get_field("second-character");
                $third_character = get_field("third-character");
                $fourth_character = get_field("fourth-character");
                $fifth_character = get_field("fifth-character");
                $sixth_character = get_field("sixth-character");
                $seventh_character = get_field("seventh-character");
                $first_character_title = get_field("first-character-title");
                $second_character_title = get_field("second-character-title");
                $third_character_title = get_field("third-character-title");
                $fourth_character_title = get_field("fourth-character-title");
                $fifth_character_title = get_field("fifth-character-title");
                $sixth_character_title = get_field("sixth-character-title");
                $seventh_character_title = get_field("seventh-character-title");
                $first_character_description = get_field("first-character-description");
                $second_character_description = get_field("second-character-description");
                $third_character_description = get_field("third-character-description");
                $fourth_character_description = get_field("fourth-character-description");
                $fifth_character_description = get_field("fifth-character-description");
                $sixth_character_description = get_field("sixth-character-description");
                $seventh_character_description = get_field("seventh-character-description");                
             
            ?>

            <div class="background-image-story">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bog.jpg" alt="" class="story-image">
            </div>
            <div class="story-title-box">
                <h1 class="story-title">HISTORIEN</h1>
            </div>

            <div class="story-text-box">

                <div class="story-text-box-row">
                    <h1 class="story-subtitle"><?php echo $first_story_title; ?></h1>
                    <p>
                        <?php echo $first_story_text; ?>
                    </p>
                    <p>
                        <?php echo $second_story_text; ?>
                    </p>
                    <p>
                        <?php echo $third_story_text; ?>
                    </p>
                </div>

                <div class="story-text-box-row">
                    <h1 class="story-subtitle"><?php echo $second_story_title; ?></h1>
                    <p>
                        <?php echo $fourth_story_text; ?>
                    </p>
                    <p>
                        <?php echo $fifth_story_text; ?>
                    </p>
                    <p>
                        <?php echo $sixth_story_text; ?>
                    </p>
                    <p>
                        <?php echo $seventh_story_text; ?>
                    </p>
                </div>
            </div>

            <div class="characters-section">
                <div class="characters-title">
                    <h1>KARAKTERNE</h1>
                </div>
                <div class="characters">
                    <div class="characters-row">
                        <div class="character">
                            <div class="characters-image-box">
                                <img src="<?php echo $first_character["url"] ?>" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">  
                                    <?php echo $first_character_title; ?>
                                </h1>
                                <p>
                                    <?php echo $first_character_description; ?>
                                </p>
                            </div>
                        </div>

                        <div class="character">
                            <div class="characters-image-box">
                                <img src="<?php echo $second_character["url"] ?>" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">
                                    <?php echo $second_character_title; ?>
                                </h1>
                                <p>
                                    <?php echo $second_character_description; ?>
                                </p>
                            </div>
                        </div>

                        <div class="character">
                            <div class="characters-image-box">
                                <img src="<?php echo $third_character["url"] ?>" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">    
                                    <?php echo $third_character_title; ?>
                                </h1>
                                <p>
                                    <?php echo $third_character_description; ?>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="characters-row">
                        <div class="character">
                            <div class="characters-image-box">
                                <img src="<?php echo $fourth_character["url"] ?>" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">
                                    <?php echo $fourth_character_title; ?>
                                </h1>
                                <p>
                                    <?php echo $fourth_character_description; ?>
                                </p>
                            </div>
                        </div>

                        <div class="character">
                            <div class="characters-image-box">
                                <img src="<?php echo $fifth_character["url"] ?>" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">
                                    <?php echo $fifth_character_title; ?>
                                </h1>
                                <p>
                                    <?php echo $fifth_character_description; ?>
                                </p>
                            </div>
                        </div>
                        

                        <div class="character">
                            <div class="characters-image-box">
                                <img src="<?php echo $sixth_character["url"] ?>" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">
                                    <?php echo $sixth_character_title; ?>
                                </h1>
                                <p>
                                    <?php echo $sixth_character_description; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="characters-row character-portal">
                        <div class="big-character">
                            <div class="characters-image-box">
                                <img src="<?php echo $seventh_character["url"] ?>" alt="" class="characters-image">
                            </div>
                            <div class="characters-text-box">
                                <h1 class="characters-text-title">
                                    <?php echo $seventh_character_title; ?>
                                </h1>
                                <p>
                                <?php echo $seventh_character_description; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php 
if(is_page(16)) {
   get_footer('quest');
} else {
   get_footer();
}
?>  