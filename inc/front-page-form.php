<?php


if(!function_exists('capace_form')){
    function capace_form(){
        if(!function_exists('get_field')){
            return;
        }

        function formImg(){
            
            if(have_rows('form_img')){
                while(have_rows('form_img')){
                    the_row();
                    $formImg = get_sub_field('image');
                    $img_label = get_sub_field('img_label');
                    $theImg = $formImg['url'];
                    if(!$formImg){
                        return;
                    }
                    printf('
                        <div class="grid-container" style="background-image: url(%s);">
                            <div class="box item1"></div>
                            <div class="box item2"></div>
                            <div class="box item3"></div>
                            <div class="box item4"></div>
                            <div class="box item5"></div>
                            <div class="box item6"></div>
                            <div class="box item7"></div>
                            <div class="box item8"></div>
                            <div class="box item15"></div>
                            <div class="box item9"></div>
                            <div class="box item10"></div>
                            <div class="box item16"></div>
                            <div class="box item11"></div>
                            <div class="box item12"></div>
                            <div class="box item13"></div>
                            <div class="box item14"></div>
                            <h2>%s</h2>
                        </div>',
                        $theImg,
                        $img_label,
                    );
                }
            }

        }


        function formInfo(){
            
            if(have_rows('form_date')){
                while(have_rows('form_date')){
                    the_row();
        
                    $heading = get_field('heading');
                    $excerpt = get_field('excerpt');
                    $paragraph = get_field('paragraph');
                    $date_text = get_sub_field('date_text');
                    $day = get_sub_field('day');
                    $month = get_sub_field('month');
        
                    printf('
                        <div class="form-info">
                            <h2 class="form-heading">%s</h2>
                            <p class="excerpt">%s</p>
                            <p class="paragraph">%s</p>
                            <p class="date_text">%s</p>
                            <p class="day-and-month">%s/%s</p>
                            
                        </div>
                    ',
                    $heading,
                    $excerpt,
                    $paragraph,
                    $date_text,
                    $day,
                    $month,
                    );
                }
            }
        }

        ?>
            <div class="form-container" style="background: black ;">
            

            
                <?php formInfo(); ?>
                <div class="the__form">
                <form class="main-form" method="post">
                    <div class="txt_field">
                        <input type="text" name="namn" value="" required>
                        <span></span>
                        <label for="">Namn</label>
                    </div>
                    <div class="txt_field">
                        <input type="text" name="foretag" value="" required>
                        <span></span>
                        <label for="">Företag</label>
                    </div>
                    <div class="txt_field">
                        <input type="email" name="email" value="" required>
                        <span></span>
                        <label for="">E-mail</label>
                    </div>

                    <div class="txt_field">
                        <input type="number" name="antal" value="" required>
                        <span></span>
                        <label for="">Antal</label>
                    </div>

                    <label for="ja" class="radio">
                        <input type="radio" name="ja-nej" class="radio__input" id="ja" value="ja">
                        <div class="radio__radio">
                        </div>
                        ja, jag kommer!
                    </label>

                    <label for="nej" class="radio">
                        <input type="radio" name="ja-nej" class="radio__input" id="nej" value="nej">
                        <div class="radio__radio">
                        </div>
                        nej, jag kan inte.
                    </label>

                    <input type="submit" name="rsvp" value="rsvp">
                </form>
                
                <div class="form-img-container">

                    <?php formImg(); ?>
                </div>
                </div>
            </div>
        <?php
    }
}