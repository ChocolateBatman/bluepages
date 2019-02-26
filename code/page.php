<?php
get_header(); // Displaying the header - navigation and title
//freddie
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
        <div id="breadcrumb">
            <a href="<?php echo get_permalink($theParent); ?>">Back to: <?php echo get_the_title($theParent);?> </a><p>Current page: <?php the_title(); ?></p>
        </div>
    <?php } ?> <!-- End If loop -->
    <!-- *** End: Breadcrumb navigation area *** -->


    <!--  *** START: List of links ***
    To display 'child' pages of a parent page -->

    <!-- Display menu IF: on a child page, OR on a parent page
    This will stop the list of links from displaying if we are on a page that is neither a child page or a parent page with children. -->
    <?php
    // Retrieves a set of pages for the current page
    $checkIfParentPage = get_pages( array (
        'child_of' => get_the_ID()
    ));
    
    if ($theParent or $checkIfParentPage) { ?>
    <div id="page-links">

        <?php 
        // If parent page exists, set ID to the parent, otherwise set the ID to the current child page.
        if ($theParent)
        $pageID = $theParent;

        else
        $pageID = get_the_ID();
        ?>

        <h2><a href="<?php echo get_permalink($theParent)?>">Categories - <?php echo get_the_title($theParent); ?></a></h2> <!-- Displays heading with the name of the category, also a link to the parent category -->

        <?php
        // Displays the list of pages within a category
        wp_list_pages( array(
            'title_li'=> NULL, // Hides the default heading given by the function
            'child_of' => $pageID, // Gets links to corresponding page 
            'sort_column' => 'menu_order' // Sets ordering of links based on 'Order' attribute in WP panel
        ));?>
    </div>
    <?php } ?>
    <!--  *** END: List of links *** -->
    
    <!-- Displaying the contents of the current page -->
    <div id="main-content">
    <?php the_content(); ?>
    </div>

<!-- Ending the while loop and outputting the footer of the website -->
<?php }
get_footer();
?>