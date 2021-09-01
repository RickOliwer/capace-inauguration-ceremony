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
        <div class="second-box">
            <div class="address-container">
                <h2>var<span>.<span></h2>
                <?php 

                    if( have_rows('address')){
    
                        while(have_rows('address')){
                            the_row();
            
                            $street = get_sub_field('street');
                            $zipCode = get_sub_field('zip_code');
                            $city = get_sub_field('city');
                            printf('
                                <div class="address-info">
                                    <p class="address">%s</p>
                                    <p class="zipcode">%s</p>
                                    <p class="city">%s</p>
                                </div>',
                                $street,
                                $zipCode,
                                $city,
                            );
                        }
                    }
                ?>
            </div>

            <video width="100%" margin="auto"  autoplay loop muted>
                <source src="<?= $secondBoxVideo['url']; ?>" type="video/mp4">
            </video>
        </div>

        <?php
    }
}

if(!function_exists('capace_third_box')){
    function capace_third_box(){
        if(!function_exists('get_field')){
            return;
        }



        ?>
        <div class="third-container">
            <?php 
                if( have_rows('border_text')){

                    while(have_rows('border_text')){
                        the_row();
        
                        $top = get_sub_field('top');
                        $bottom = get_sub_field('bottom');

                        printf('
                            <div class="border_text">
                                <p class="top">%s</p>
                                <p class="bottom">%s</p>

                            </div>',
                            $top,
                            $bottom,

                        );
                    }
                }
            ?>

        </div>

        <?php
    }
}