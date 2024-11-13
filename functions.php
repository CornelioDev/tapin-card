<?php
function theme_files() {
    wp_enqueue_style( 'tailwind', '//cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' );
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap' );
    wp_enqueue_style( 'style', get_theme_file_uri( '/css/main.css' ));
}
add_action('wp_enqueue_scripts','theme_files');