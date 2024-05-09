<?php


function enqueue_tailwind_style()
{
    // Enqueue custom CSS
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/dist/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_tailwind_style');
