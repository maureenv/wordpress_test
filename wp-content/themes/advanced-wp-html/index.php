<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?> <!-- this adds space to top of page to allow WP navigation bar -->
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <h1>
                <a href="index.html">
                    <?php bloginfo('name'); ?>
                </a>
                <small><?php bloginfo('description'); ?> </small> <!-- description is the tagline -->
            </h1>
            <div class="h_right">
                <form method="get" action="<?php esc_url(home_url('/')); ?>">
                    <input type="text" name="s" placeholder="search ...">
                </form>
            </div>
        </div>
    </header>

    <nav class="nav main-nav">
        <div class="container">
            <?php
                // $args = array(
                //     'theme_location' => 'primary'
                // );
                // ?>

                <?php wp_nav_menu($args); ?>

        <!--    <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Services</a></li>
            </ul> -->
        </div>
    </nav>

    <div class="container content">
        <div class="main block">
                <article class="post">
                    <h2> Blog Post 1 </h2>
                    <p class="meta">Posted at 11:00 on May 9 by admin</p> <!-- for date, author etc -->
                    <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. </p>
                    <a class="button" href="#"> Read More </a>
                </article>

                <article class="post">
                    <h2> Blog Post 2 </h2>
                    <p class="meta">Posted at 11:00 on May 9 by admin</p> <!-- for date, author etc -->
                    <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. </p>
                    <a class="button" href="#"> Read More </a>
                </article>

                <article class="post">
                    <h2> Blog Post 3 </h2>
                    <p class="meta">Posted at 11:00 on May 9 by admin</p> <!-- for date, author etc -->
                    <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. </p>
                    <a class="button" href="#"> Read More </a>
                </article>
        </div>

        <div class="side">
            <div class="block">
                <h3>Sidebar Head</h3>
                <p>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                </p>
                <a class="button">More</a>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <div class="container">
            <div class="f_left">
                <p>&copy; 2016 = Advanced WP Theme </p>
            </div>

            <div class="f_right">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?> <!-- ironically footer adds wp bar to top of page -->
</body>
</html>
