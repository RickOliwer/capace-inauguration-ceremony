<?php

if(!function_exists('capace_fourth_module')){
    function capace_fourth_module(){
        if(!function_exists('get_field')){
            return;
        }

       
            if( have_rows('hero_image')){
                
                while(have_rows('hero_image')){
                    the_row();

                    $image = get_sub_field('image');
                    if(!$image){
                        return;
                    }
                    $img = $image['url'];
                    $label = get_sub_field('label');
                    printf('
                        <div class="hero-image" style="background-image: url(%s);">
                            <h4 class="hero-header">%s</h4>
                        </div>',
                        $img,
                        $label,
                    );
                }
            }
    }
}