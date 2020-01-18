<?php
get_header();

echo 'team member';

if ( have_posts() ){
    while (have_posts()){
        the_post();

        echo '<a href="' . get_the_permalink() . '">';
        echo '<h2>' . get_the_title() . '</h2>';
        echo '</a>';
    }
}
get_footer();