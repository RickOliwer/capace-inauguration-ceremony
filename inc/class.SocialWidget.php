<?php

class SocialWidget extends WP_Widget {
    /**
     * Construct a new widget
     */

     public function __construct() 
     {
         parent::__construct(
            'capace-social-widget',
            'Capace Social Links',
         );
     }
     /**
      * Frontend display of widget
      *
      * @param array $args widget arguments.
      * @param array $instance 
      * @return void
      */
     public function widget($args, $instance){
        
        echo $args['before_widget'];

        // render title
		if (!empty($instance['title'])) {
			echo $args['before_title'] . $instance['title'] . $args['after_title'];
        }
        
        if($instance['first_social'] == 'facebook'){
            $output =  '<div class="first_social">' .

                    '<a href="' . $instance['first_url'] .'">' .
                    
                        '<i class="fab fa-facebook-f" style="color: white; font-size: 60px;"></i>
                    </a>
                </div>';
        }

        if($instance['first_social'] == 'instagram'){ 
            $output =  '<div class="first_social">' .

                '<a href="' . $instance['first_url'] . '">
                
                    <i class="fab fa-instagram" style="color: white; font-size: 60px;"></i>
                </a>
            </div>';
        }

        if($instance['first_social'] == 'linkedin'){
            $output =  '<div class="first_social">' .

                '<a href="' . $instance['first_url'] . '">
                
                    <i class="fab fa-linkedin-in" style="color: white; font-size: 60px;"></i>
                </a>
            </div>';
        }

        // second

        if($instance['second_social'] == 'facebook'){
            $second_output =  '<div class="second_social">' .

                    '<a href="' . $instance['second_url'] .'">' .
                    
                        '<i class="fab fa-facebook-f" style="color: white; font-size: 60px;"></i>
                    </a>
                </div>';
        }

        if($instance['second_social'] == 'instagram'){ 
            $second_output =  '<div class="second_social">' .

                '<a href="' . $instance['second_url'] . '">
                
                    <i class="fab fa-instagram" style="color: white; font-size: 60px;"></i>
                </a>
            </div>';
        }

        if($instance['second_social'] == 'linkedin'){
            $second_output =  '<div class="second_social">' .

                '<a href="' . $instance['second_url'] . '">
                
                    <i class="fab fa-linkedin-in" style="color: white; font-size: 60px;"></i>
                </a>
            </div>';
        }

        //third

        if($instance['third_social'] == 'facebook'){
            $third_output =  '<div class="third_social">' .

                    '<a href="' . $instance['third_url'] .'">' .
                    
                        '<i class="fab fa-facebook-f" style="color: white; font-size: 60px;"></i>
                    </a>
                </div>';
        }

        if($instance['third_social'] == 'instagram'){ 
            $third_output =  '<div class="third_social">' .

                '<a href="' . $instance['third_url'] . '">
                
                    <i class="fab fa-instagram" style="color: white; font-size: 60px;"></i>
                </a>
            </div>';
        }

        if($instance['third_social'] == 'linkedin'){
            $third_output =  '<div class="third_social">' .

                '<a href="' . $instance['third_url'] . '">
                
                    <i class="fab fa-linkedin-in" style="color: white; font-size: 60px;"></i>
                </a>
            </div>';
        }
        

    
        echo '<div class="social-container">';
        echo $output;
        echo $second_output;
        echo $third_output;
        echo '</div>';

    
        echo $args['after_widget'];
     }

     /**
      * Back-end widget form
      * 
      * @see WP_Widget::form()
      * @param array $instance
      * @return void
      */
     public function form($instance){
        $first_social = ! empty( $instance['first_social']) ? $instance['first_social'] : '';
        $first_url = ! empty( $instance['first_url']) ? $instance['first_url'] : '';
        $second_social = ! empty( $instance['second_social']) ? $instance['second_social'] : '';
        $second_url = ! empty( $instance['second_url']) ? $instance['second_url'] : '';
        $third_social = ! empty( $instance['third_social']) ? $instance['third_social'] : '';
        $third_url = ! empty( $instance['third_url']) ? $instance['third_url'] : '';
         
        ?>
            <p>
                <label for="<?php echo $this->get_field_id('first_url'); ?>">First Url:</label>

                <input 
                type="text" 
                class="widefat" 
                value="<?php echo esc_attr( $first_url ) ?>"
                id="<?php echo $this->get_field_id('first_url'); ?>"
                name="<?php echo $this->get_field_name('first_url'); ?>"
                >
            </p>

            <p>
                <label for="<?php echo $this->get_field_id('first_social'); ?>">First Icon</label>

                <select 
                class="widefat" 
                name="<?php echo esc_attr( $this->get_field_name('first_social')) ?>" 
                id="<?php echo esc_attr( $this->get_field_id('first_social')) ?>"
                >
                    <option value="facebook" <?php echo ($first_social == 'facebook') ? 'selected' : ''; ?>>
                        Facebook
                    </option>
                    <option value="instagram" <?php echo ($first_social == 'instagram') ? 'selected' : ''; ?>>
                        Instagram
                    </option>
                    <option value="linkedin" <?php echo ($first_social == 'linkedin') ? 'selected' : ''; ?>>
                        Linkedin
                    </option>
                </select>
            </p>

            <p>
                <label for="<?php echo $this->get_field_id('second_url'); ?>">Second Url:</label>

                <input 
                type="text" 
                class="widefat" 
                value="<?php echo esc_attr( $second_url ) ?>"
                id="<?php echo $this->get_field_id('second_url'); ?>"
                name="<?php echo $this->get_field_name('second_url'); ?>"
                >
            </p>

            <p>
                <label for="<?php echo $this->get_field_id('second_social'); ?>">Second Icon</label>

                <select 
                class="widefat" 
                name="<?php echo esc_attr( $this->get_field_name('second_social')) ?>" 
                id="<?php echo esc_attr( $this->get_field_id('second_social')) ?>"
                >
                    <option value="facebook" <?php echo ($second_social == 'facebook') ? 'selected' : ''; ?>>
                        Facebook
                    </option>
                    <option value="instagram" <?php echo ($second_social == 'instagram') ? 'selected' : ''; ?>>
                        Instagram
                    </option>
                    <option value="linkedin" <?php echo ($second_social == 'linkedin') ? 'selected' : ''; ?>>
                        Linkedin
                    </option>
                </select>
            </p>

            <p>
                <label for="<?php echo $this->get_field_id('third_url'); ?>">Third Url:</label>

                <input 
                type="text" 
                class="widefat" 
                value="<?php echo esc_attr( $third_url ) ?>"
                id="<?php echo $this->get_field_id('third_url'); ?>"
                name="<?php echo $this->get_field_name('third_url'); ?>"
                >
            </p>

            <p>
                <label for="<?php echo $this->get_field_id('third_social'); ?>">Third Icon</label>

                <select 
                class="widefat" 
                name="<?php echo esc_attr( $this->get_field_name('third_social')) ?>" 
                id="<?php echo esc_attr( $this->get_field_id('third_social')) ?>"
                >
                    <option value="facebook" <?php echo ($third_social == 'facebook') ? 'selected' : ''; ?>>
                        Facebook
                    </option>
                    <option value="instagram" <?php echo ($third_social == 'instagram') ? 'selected' : ''; ?>>
                        Instagram
                    </option>
                    <option value="linkedin" <?php echo ($third_social == 'linkedin') ? 'selected' : ''; ?>>
                        Linkedin
                    </option>
                </select>
            </p>
         <?php

     }

     /**
      * Sanitixe widget
      *
      * @param array $new_instance
      * @param array $old_instance
      * @return void
      */
     public function update($new_instance, $old_instance){
        $instance = [];
        $instance['first_url'] = ( ! empty( $new_instance['first_url'])) ? strip_tags( $new_instance['first_url']) : '';
        $instance['first_social'] = ( ! empty( $new_instance['first_social'])) ? strip_tags( $new_instance['first_social']) : '';

        $instance['second_url'] = ( ! empty( $new_instance['second_url'])) ? strip_tags( $new_instance['second_url']) : '';
        $instance['second_social'] = ( ! empty( $new_instance['second_social'])) ? strip_tags( $new_instance['second_social']) : '';

        $instance['third_url'] = ( ! empty( $new_instance['third_url'])) ? strip_tags( $new_instance['third_url']) : '';
        $instance['third_social'] = ( ! empty( $new_instance['third_social'])) ? strip_tags( $new_instance['third_social']) : '';
        
    
        return $instance;
     }
}