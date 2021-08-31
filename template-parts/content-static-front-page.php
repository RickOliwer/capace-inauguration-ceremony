<main id="main" class="site-main">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : ?>

            <?php the_post(); ?>



            <div class="the-content-paragraph">
                <?php capace_first_box(); ?>

                <?php the_title('<h1>', '</h1>'); ?>
                <?php the_content(); ?>
            </div>

            <?php endwhile ; ?>

    <?php endif ; ?>
        <!-- Comments -->
    <?php comments_template(); ?>

</main><!-- #main -->

<?php
get_footer();
?>