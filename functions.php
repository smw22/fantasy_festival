<?php
function fantasy_festival_load_styles_and_scripts() {
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css");

    wp_enqueue_script("animejs_library", "https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js", array(), false, true);
    wp_enqueue_script("script", get_template_directory_uri() . "/script.js", array('animejs_library'), false, true);
}
add_action("wp_enqueue_scripts", "fantasy_festival_load_styles_and_scripts");

function fantasy_festival_add_defer_attribute($tag, $handle, $src) {
    // Tilføj defer-attribut til scriptet med handle 'script'
    if ($handle === 'script') {
        return '<script src="' . esc_url($src) . '" defer></script>';
    }
    return $tag;
}
add_filter('script_loader_tag', 'fantasy_festival_add_defer_attribute', 10, 3);

function fantasy_disable_gutenberg() {
    remove_post_type_support("page", "editor");
    remove_post_type_support("post", "editor");
}
add_action("init", "fantasy_disable_gutenberg");