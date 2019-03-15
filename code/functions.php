<?php
// Function bp_files: load CSS file for Blue Pages website
function bp_files()
{
    // Loads CSS file to display on site
    wp_enqueue_style('bp_styles', get_stylesheet_uri());
}

// Parameters:
// Type of instruction - wp_enqueue_scripts
// Function to call - bp_files
// Function add_action: Loads the function 'bp_files'
add_action('wp_enqueue_scripts', 'bp_files', NULL);

// Function theme_features: generates a custom title for each page - visible in the browser tab
function theme_features()
{
    add_theme_support('title-tag');
}

// Function add_action: Runs the function 'theme_features' once the theme has gone through its setup phase.
add_action('after_setup_theme', 'theme_features'); 
?>