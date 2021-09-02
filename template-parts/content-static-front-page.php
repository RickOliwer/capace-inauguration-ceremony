<main id="main" class="site-main">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : ?>

            <?php the_post(); ?>



            <div class="front-container">
                <?php capace_first_box(); ?>

                <div class="main_content">
                    <?php capace_content_header(); ?>
                    <?php the_content(); ?>
                </div>
                
                <div class="second-box">
                    <?php capace_second_box(); ?>
                </div>

                <div class="third-box">
                    <?php capace_third_box(); ?>
                </div>

                <div class="form-box">
                    <?php capace_form(); ?>
                </div>
            </div>

            <?php endwhile ; ?>

    <?php endif ; ?>

</main><!-- #main -->

<?php
get_footer();
?>