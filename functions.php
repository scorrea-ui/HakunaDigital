<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
    wp_enqueue_style( 'child-custom-style', get_stylesheet_directory_uri() . '/custom.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

add_action('comment_form_after_fields', 'add_comment_notice');
function add_comment_notice() {
    $commenter = wp_get_current_commenter();
    echo '<p class="menu-texts-size">We’re committed to your privacy. Hakuna Digital uses the information you provide to us to contact you about relevant updates. You may unsubscribe from these communications at any time. For more information, check out our <a href="https://hakunadigital.com/privacy-policy/">privacy policy.</a></p>';
}