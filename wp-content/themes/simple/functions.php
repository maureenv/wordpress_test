<?php
function simple_theme_setup() {
    // Featured Image Support
    add_theme_support('post-thumbnails'); // this function won't run just like this. We need to use add_action and need hooks to hook into
}

add_action('after_setup_theme', 'simple_theme_setup'); // this will run above function and allow us to add featured image. Add_action is used to add/create something

//ecerpt length
function set_excerpt_length() {
    return 60;
}

add_filter('excerpt_length', 'set_excerpt_length');
// add_filter used to change something
