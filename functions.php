<?php
include "constants.php";
include "app/autoloader.php";
add_action('after_setup_theme','initializer::setup');
//مخفی سازی ادمین بار
//add_filter('show_admin_bar','__return_false');
add_action('init','posttype::make_product_posttype');
add_action('add_meta_boxes','metaboxes::register_product_post_meta_box');
add_action('save_post','metaboxes::save_product_price');
add_filter('manage_product_posts_columns','posttype::add_price_column');
add_action('manage_product_posts_custom_column','posttype::show_price_column',10,2);

