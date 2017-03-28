<?php
    //theme Support. All of our theme support functions will start with adv as a prefix
    function MV_theme_support(){
        // Nav Menus
        register_nav_menus(array(
            'MVprimary' => __('Primary Menu'),
            'footer' => __('Footer Menu') // second string is string you see on wordpress appearance page
        ));
    }

    add_action('after_setup_theme', 'MV_theme_support');
