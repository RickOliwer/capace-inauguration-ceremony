<?php

    get_header();
?>
    <?php if(is_front_page()): ?>
        <?php 
            get_template_part('template-parts/content-static-front-page');
        ?>
    <?php else : ?>


            <main id="main" class="site-main">

                <header class="entry-header">
                    <?php the_post(); ?>
                    <!-- Title -->
                    <?php the_title('<h1>', '</h1>'); ?>
                </header>
                <div class="entry-content">
                    <!-- Content -->
                    <?php the_content(); ?>
                    <!-- .entry-content -->
                </div>
                <!-- Comments -->
                <?php comments_template(); ?>

            </main><!-- #main -->
    <?php
    get_footer();
    ?>

    <?php endif ; ?>