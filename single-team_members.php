<?php

get_header();

echo '<h1 class="text-center">' . get_the_title() . '</h1>';

echo get_post_meta( $post->ID, 'job_title', true);

// echo get_field( 'job_title');

get_footer();