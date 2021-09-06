
<footer>
    <div class="footer-img" style="background-image: url(<?php echo get_theme_mod('image_control_one'); ?>);"></div>
    <div class="footer-container" >
        <div class="footer-row">
            <?php dynamic_sidebar('main-footer'); ?>
        </div>
        <div class="footer-bottom-row">
            <?php dynamic_sidebar('bottom-footer'); ?>
        </div>
    </div>
</footer>
    <?php wp_footer(); ?>

    </body>
</html>