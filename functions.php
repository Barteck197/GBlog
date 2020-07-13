<?php

function learningWP_res() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'learningWP_res');
