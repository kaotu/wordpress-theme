<?php

function my_theme_enqueue_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

wp_register_style('Boostrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
wp_enqueue_style('Boostrap4');

// function team_member_customer_post_type(){
//     register_post_type('team-members', array(
//         'labels' => array(
//             'name' => 'Team members',
//             'singluar_name' => 'Team Member'
//         ),
//         'public' => true,
//         'has_archive' => true
//     ));
// }

// add_action('init', 'team_member_customer_post_type');