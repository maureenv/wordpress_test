<?php
function simple_theme_setup() {
    // Featured Image Support
    add_theme_support('post-thumbnails'); // this function won't run just like this. We need to use add_action and need hooks to hook into

    // Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu') // this is a localization function for using multiple languages. Now if we go to Appearance there should be a Menus option. Then in the Menus window, create menu  then in Menu Settings > Display Location > select 'Primary Menu' (the Primary Menu can be anything, this is just a name we give this specific menu). The words primary can also be named whatever you like. This is the word that will passed into other functions, Primary Menu is for humans to see on the CMS side.
    ));
}

add_action('after_setup_theme', 'simple_theme_setup'); // this will run above function and allow us to add featured image. Add_action is used to add/create something

//ecerpt length
function set_excerpt_length() {
    return 60;
}

add_filter('excerpt_length', 'set_excerpt_length');
// add_filter used to change something

// widget Location
function init_widgets($id) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar', // id is usually named the same thing just with lower case. if it's more than one word use hyphens
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'init_widgets'); // the widgets_init function adds the Widgets functionality into themes
