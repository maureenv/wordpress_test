<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
    <meta charset = "<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title> <!-- this displays the name of the site we originally determined -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?> <!-- this puts any additional necesary information into the head. For example if I download a plugin and it needs to add additional stylesheets they will be added in with this function -->
</head>
<body>
    <header>
        <div class="container">
            <h1> <?php bloginfo('name'); ?> </h1> <!-- you can change site title in settings -->
            <span><?php bloginfo('description')?></span>
        </div>
    </header>

    <nav class="main-nav">
        <div class="container">
        <?php
            $args = array(
                'theme_location' => 'primary'
            ); // this specifies what menu we want to put here

            wp_nav_menu($args); // built in wordpress function for menu
        ?>
        </div>
    </nav>
