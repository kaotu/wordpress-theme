<?php
get_header();
echo 'blog index page';

$args = array(
    'post_type' => 'post',
    'numbetposts' => 10,
    'orderby' => 'date',
    'order' => 'DESC'
);

$latest_posts = get_posts($args);

echo '<div class="container-fluid">';
echo '<div class="row">';
foreach ( $latest_posts as $latest_post ){
    echo '<div class="col-md-6">';

    $categories = get_the_category( $latest_post->ID);
    foreach ($categories as $category) {
        echo $category->name;
    }
    echo '<h4>' . $latest_post->post_title . '</h4>';
    echo '<p>' . $latest_post->post_date . '</p>';
    echo '<p>' . $latest_post->post_content . '</p>';
    echo '<img src="' . get_the_post_thumbnail_url( $latest_post->ID) . '">';
    echo '</div>';
}
    echo '</div>';
    echo '</div>';


get_footer();