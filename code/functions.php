<?php
// Function to load files for Blue Pages website
function bp_files()
{
    // Load any files in here (for now, CSS)
    wp_enqueue_style('bp_styles', get_stylesheet_uri());

    // wp_enqueue_script - for any JavaScript
}

// Parameters:
// Type of instruction
// Function to call
add_action('wp_enqueue_scripts', 'bp_files', NULL);

// theme_features: generates a custom title for each page - visible in the browser tab
function theme_features()
{
    add_theme_support('title-tag');
}

// Runs the function 'theme_features' once the theme has gone through its setup phase.
add_action('after_setup_theme', 'theme_features'); 




?>