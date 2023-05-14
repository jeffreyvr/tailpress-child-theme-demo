<?php

function tailpress_child_enqueue_scripts()
{
    $theme = wp_get_theme();

    wp_dequeue_style('tailpress', get_template_directory_uri() . 'css/app.css');
    wp_dequeue_script('tailpress', get_template_directory_uri() . 'js/app.js');

    wp_enqueue_style('tailpress-child', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
    wp_enqueue_script('tailpress-child', tailpress_asset('js/app.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');
