<?php

function register_wp_proaject_thm_widget() {
    register_widget( 'WP_wppt_testi_widget' );
	register_widget( 'WP_wppt_team_widget' );
	register_widget( 'WP_wppt_banner_widget' );
	register_widget( 'WP_wppt_ptbl_widget' );
	register_widget( 'WP_wppt_services_widget' );
	register_widget( 'WP_wppt_test_widget' );
	
	
	
}
add_action( 'widgets_init', 'register_wp_proaject_thm_widget' );
require get_template_directory() . '/inc/wppt_testimonial_widget.php';
require get_template_directory() . '/inc/wppt_banner_widget.php';
require get_template_directory() . '/inc/wppt_pricing_table_widget.php';
require get_template_directory() . '/inc/wppt_services_widget.php';
require get_template_directory() . '/inc/wppt-test.php';


class WP_wppt_team_widget extends WP_Widget {
		
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'wp_wppt_team_widget',
			'description' => 'Wppt-Team Member Widget',
		);
		parent::__construct( 'wppt_team_widget', 'Wppt-Team Member Widget', $widget_ops );
	}
	public function widget( $args, $instance ) {
		/*if($instance['wppt_team_member_img_open_new_window']){
			echo $instance['wppt_team_member_img_open_new_window'];
			
		}
		else{
		echo $instance['wppt_team_member_img_open_new_window'];
		}*/
		echo $args['before_widget'];
		if(!empty($instance['wppt_team_member_image_uri'])){
			$wppt_team_member_image_uri=$instance['wppt_team_member_image_uri'];
		
		}
		$wppt_team_member_name = apply_filters( 'widget_title', empty( $instance['wppt_team_member_name'] ) ? '' : $instance['wppt_team_member_name'], $instance, $this->id_base );
		$wppt_team_member_fb_link = apply_filters( 'widget_title', empty( $instance['wppt_team_member_fb_link'] ) ? '' : $instance['wppt_team_member_fb_link'], $instance, $this->id_base );
		$wppt_team_member_twtr_link = apply_filters( 'widget_title', empty( $instance['wppt_team_member_twtr_link'] ) ? '' : $instance['wppt_team_member_twtr_link'], $instance, $this->id_base );
		$wppt_team_member_position = ! empty( $instance['wppt_team_member_position'] ) ? $instance['wppt_team_member_position'] : '';
		$wppt_team_member_position = apply_filters( 'widget_text', $wppt_team_member_position, $instance, $this );
		$wppt_team_member_description = ! empty( $instance['wppt_team_member_description'] ) ? $instance['wppt_team_member_description'] : '';
		$wppt_team_member_description = apply_filters( 'widget_text', $wppt_team_member_description, $instance, $this );
		
		?>
		<div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="<?php echo $wppt_team_member_image_uri; ?>" alt="">
              </div>
              <div class="member-info">
                <h3><?php echo $wppt_team_member_name; ?></h3>
                <h4><?php echo $wppt_team_member_position; ?></h4>
                <p><?php echo $wppt_team_member_description; ?></p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="<?php echo esc_url($wppt_team_member_fb_link); ?>"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="<?php echo esc_url($wppt_team_member_twtr_link); ?>"><i class="fa fa-twitter"></i></a></li>
                  
                </ul>
              </div>
            </div>
          </div>
		<?php
        echo $before_widget;
		echo $args['after_widget'];	
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

        $instance['wppt_team_member_name'] = strip_tags($new_instance['wppt_team_member_name']);
        $instance['wppt_team_member_position'] = stripslashes(wp_filter_post_kses($new_instance['wppt_team_member_position']));
        $instance['wppt_team_member_description'] = stripslashes(wp_filter_post_kses($new_instance['wppt_team_member_description']));
        $instance['wppt_team_member_fb_link'] = strip_tags($new_instance['wppt_team_member_fb_link']);
        $instance['wppt_team_member_twtr_link'] = strip_tags($new_instance['wppt_team_member_twtr_link']);
        $instance['wppt_team_member_image_uri'] = strip_tags($new_instance['wppt_team_member_image_uri']);
		$instance['wppt_team_member_img_open_new_window'] = !empty($new_instance['wppt_team_member_img_open_new_window']) ? 1 : 0;
        return $instance;
	}

	
	public function form( $instance ) {
		$wppt_team_member_img_open_new_window = isset( $instance['wppt_team_member_img_open_new_window'] ) ? (bool) $instance['wppt_team_member_img_open_new_window'] : false;
		?>
		<p><label for="<?php echo $this->get_field_id('wppt_team_member_name'); ?>"><?php _e('Name'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('wppt_team_member_name'); ?>" name="<?php echo $this->get_field_name('wppt_team_member_name'); ?>" type="text" value="<?php if(!empty($instance['wppt_team_member_name'])){ echo $instance['wppt_team_member_name'];} ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_team_member_position'); ?>"><?php _e('Position'); ?></label>
		<textarea class="widefat" rows="8" cols="20" id="<?php echo $this->get_field_id('wppt_team_member_position'); ?>" name="<?php echo $this->get_field_name('wppt_team_member_position'); ?>"><?php if(!empty($instance['wppt_team_member_position'])){ echo $instance['wppt_team_member_position'];} ?></textarea></p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_team_member_description'); ?>"><?php _e('Description'); ?></label>
		<textarea class="widefat" rows="8" cols="20" id="<?php echo $this->get_field_id('wppt_team_member_description'); ?>" name="<?php echo $this->get_field_name('wppt_team_member_description'); ?>"><?php if(!empty($instance['wppt_team_member_description'])){ echo $instance['wppt_team_member_description'];} ?></textarea></p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_team_member_fb_link'); ?>"><?php _e('Facebook Link'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('wppt_team_member_fb_link'); ?>" name="<?php echo $this->get_field_name('wppt_team_member_fb_link'); ?>" type="text" value="<?php if(!empty($instance['wppt_team_member_fb_link'])){ echo $instance['wppt_team_member_fb_link'];} ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_team_member_twtr_link'); ?>"><?php _e('Twitter Link'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('wppt_team_member_twtr_link'); ?>" name="<?php echo $this->get_field_name('wppt_team_member_twtr_link'); ?>" type="text" value="<?php if(!empty($instance['wppt_team_member_twtr_link'])){ echo $instance['wppt_team_member_twtr_link'];} ?>" /></p>
		
		<p>
            <input type="checkbox" name="<?php echo $this->get_field_name('wppt_team_member_img_open_new_window'); ?>" id="<?php echo $this->get_field_id('wppt_team_member_img_open_new_window'); ?>" <?php if( !empty($instance['wppt_team_member_img_open_new_window']) ): checked($wppt_team_member_img_open_new_window); endif; ?> ><?php _e( 'Open links in new window?' ); ?><br>
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('wppt_team_member_image_uri'); ?>"><?php _e('Image'); ?></label><br/>

            <?php

            if ( !empty($instance['wppt_team_member_image_uri']) ) :

                echo '<img class="wppt_team_mem_img" src="' . $instance['wppt_team_member_image_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" alt="'.__( 'Uploaded image').'" /><br />';

            endif;

            ?>

            <input type="text" class="widefat wppt_team_mem_custom_media_url" name="<?php echo $this->get_field_name('wppt_team_member_image_uri'); ?>" id="<?php echo $this->get_field_id('wppt_team_member_image_uri'); ?>" value="<?php if( !empty($instance['wppt_team_member_image_uri']) ): echo $instance['wppt_team_member_image_uri']; endif; ?>" style="margin-top:5px;">
            <input type="button" class="button button-primary wppt_team_mem_img_button" id="wppt_team_mem_custom_media_button" name="<?php echo $this->get_field_name('wppt_team_member_image_uri'); ?>" value="<?php _e('Upload Image'); ?>" style="margin-top:5px;">
        </p>
		<div style="display:none;" >
		<p><label for="<?php echo $this->get_field_id('wppt_ptbl_services'); ?>"><?php _e('Services'); ?></label>
		<textarea style="display:none;" placeholder="Put Services like this ex- <ul><li>Service 1</li><li> Service 2</li><li> Service 3</li></ul>" class="widefat" rows="8" cols="20" id="<?php echo $this->get_field_id('wppt_ptbl_services'); ?>" name="<?php echo $this->get_field_name('wppt_ptbl_services'); ?>"><?php if(!empty($instance['wppt_ptbl_services'])){ echo $instance['wppt_ptbl_services'];}?></textarea></p>
		<p>
		</div>
		
		<?php
		}
}