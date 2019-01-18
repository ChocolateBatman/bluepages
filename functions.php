<?php
// Function to load files for Blue Pages website
function bp_files()
{
    // Load any files in here (for now, CSS)
    wp_enqueue_style('bp_styles', get_stylesheet_uri());

    // wp_enqueue_script
}

// Parameters:
// Type of instruction
// Function to call
add_action('wp_enqueue_scripts', 'bp_files', NULL);
?>