<?php
function fantasy_festival_load_styles_and_scripts() {
    wp_enqueue_style("fantasy_festival_styles", get_template_directory_uri(). "/style.css");
}
add_action("wp_enqueue_scripts","fantasy_festival_load_styles_and_scripts");