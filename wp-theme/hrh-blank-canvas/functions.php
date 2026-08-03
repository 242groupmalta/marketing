<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', function () {
    // Strip out core/theme styles that inject their own container widths,
    // alignment classes (alignfull/alignwide), and default margins - the
    // whole point of this theme is that nothing but our own block CSS
    // touches the page.
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
}, 100);
