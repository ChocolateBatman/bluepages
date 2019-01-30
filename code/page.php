<?php
get_header(); // Displaying the header - navigation and title

while (have_posts()) // While there is a 'post' - (a page to display)
{
    the_post(); ?> <!-- Get information about the next page -->

    <h1><?php the_title(); ?></h1> <!-- Outputting the title of the current page -->

    <!--  *** Start: Breadcrumb navigation area ***
    to display 'previous' page as a link for the user -->
    <?php

    // get_the_ID() -> Retrieves the ID of the CURRENT page
    // wp_get_post_parent_id() -> Retrieves the ID of the Parent page, of the specified page
    $theParent = wp_get_post_parent_id(get_the_ID());
    
    /* If a parent ID exists, the variable 'theParent' will hold True. That means the HTML content will display - only on the children pages. */
    if ($theParent) 
    { ?>
        <a href="<?php echo get_permalink($theParent); ?>">Back to: <?php echo get_the_title($theParent);?> </a><p>Current page: <?php the_title(); ?></p>

    <?php } ?> <!-- End If loop -->

    <!-- *** End: Breadcrumb navigation area -->
    
    <!-- Displaying the contents of the current page -->
    <?php the_content(); ?>

<!-- Ending the while loop and outputting the footer of the website -->
<?php }
get_footer();
?>