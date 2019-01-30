<?php
get_header();
// The Wordpress Loop
while(have_posts()) // While there is a post
{
    the_post(); ?> <!-- Get information about the next post -->
    <!-- Closing PHP --> 

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>


<!-- Opening PHP --><?php }

get_footer();

?>