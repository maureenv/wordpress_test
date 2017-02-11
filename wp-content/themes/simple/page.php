<!-- page.php is for pages that don't have posts. Ex: About, Contact us page -->
<?php get_header(); ?> <!-- it's common practice to put header in external file -->
<div class="main">
    <div class="container">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()): the_post(); ?> <!-- the_post looks kind of weird but you need to have this in wordpress when looping through posts -->
                <article class="post">
                    <h3>
                            <?php the_title(); ?>
                    </h3> <!-- this gets the title of the post -->
                    <?php if(has_post_thumbnail()) :?> <!-- to add thumbnail image into post -->
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                    <br>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop('Sorry, no posts were found'); ?> <!-- wpautop takes double line breaks and turns them into paragraphs. Basically you can write a lot of text in wpautop and it will turn it into paragraphs for you. -->

        <?php endif; ?>

        <!-- the above syntax can also be written as php if() {} ?> -->
    </div>
</div>
<?php get_footer(); ?>
