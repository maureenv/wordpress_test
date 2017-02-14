<div class="sidebar">
    <?php if(is_active_sidebar('sidebar')) :?> <!-- put in id of sidebar here -->
        <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
</div>

<div class="clr"></div>
</div>
<footer>
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></p> <!-- pass in copywrite and year so it updates on its own every year -->
    </div>
</footer>

<?php wp_footer(); ?> <!-- this adds in the ADMIN BAR at the top of page. Without this top bar ther will be a white space when signed in as an admin -->

</body>
</html>
