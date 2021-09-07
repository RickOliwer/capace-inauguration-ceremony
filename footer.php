
<footer>
    <div class="footer-img" style="background-image: url(<?php echo get_theme_mod('image_control_one'); ?>);"></div>
    <div class="footer-container" >
        <div class="footer-row">
            <?php dynamic_sidebar('main-footer'); ?>
        </div>
        <div class="footer-bottom-row">
            <?php dynamic_sidebar('bottom-footer'); ?>
        </div>
        <div class="copy">
            <div class="copy-left">
                <a href="">&copy; 2021 - Capace Media Group AB</a>
            </div>
            <div class="copy-right">
                <a href="">Cookies</a>
                <a href="">Integritetspolicy</a>
            </div>
        </div>
    </div>
</footer>
    <?php wp_footer(); ?>

    </body>
</html>