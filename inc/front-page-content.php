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