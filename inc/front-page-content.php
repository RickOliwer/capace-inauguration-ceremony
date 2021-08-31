<?php

if(!function_exists('capace_first_box')){
    function capace_first_box(){
        if(!function_exists('get_field')){
            return;
        }

        $firstBoxImg = get_field('first_box_img');
        if(!$firstBoxImg){
            return;
        }

        ?>
        <div class="img-frame">

            <div class="img-frame-text">
                <h2>capa</h2>
                <h2 class="ce">ce <span>.</span></h2>
            </div>

            <div style="background-image: url(<?= $firstBoxImg['url']; ?>);" class="first-box-img"></div>

            <?php 

            if( have_rows('first_box_lables')){
                
                while(have_rows('first_box_lables')){
                    the_row();
                    
                    $firstLable = get_sub_field('first_lable');
                    $secondLable = get_sub_field('second_lable');
                    $thirdLable = get_sub_field('third_lable');
                    printf('
                        <div class="img-frame-lables">
                            <h3>%s</h3>
                            <h3>%s</h3>
                            <h3>%s</h3>
                        </div>',
                        $firstLable,
                        $secondLable,
                        $thirdLable,
                    );
                }
            }
            ?>
        </div>


        <?php
    }
}

if(!function_exists('capace_content_header')){
    function capace_content_header(){

        if(!function_exists('get_field')){
            return;
        }

        if( have_rows('header')){
            
            while(have_rows('header')){
                the_row();
                
                $headerTextPoppins = get_sub_field('header_text_poppins');
                $headerTextCaveatOrange = get_sub_field('header_text_caveat_orange');
                printf('
                    <h1 class="front-page-header">%s <span>%s</span></h1>',
                    $headerTextPoppins,
                    $headerTextCaveatOrange,
                );
            }
        }
    }
}

if(!function_exists('capace_second_box')){
    function capace_second_box(){
        if(!function_exists('get_field')){
            return;
        }

        $secondBoxVideo = get_field('mp4_video');
        if(!$secondBoxVideo){
            return;
        }

        ?>
            <video width="100%" margin="auto"  autoplay loop muted>
                <source src="<?= $secondBoxVideo['url']; ?>" type="video/mp4">
            </video>

        <?php
    }
}