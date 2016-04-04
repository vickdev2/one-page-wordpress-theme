<?php
class WP_wppt_testi_widget extends WP_Widget {
		
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'wp_wppt_testi_widget',
			'description' => 'Wppt-Testimonial Section Widget',
		);
		parent::__construct( 'wppt_testi_widget', 'Wppt-Testimonial Section Widget', $widget_ops );
	}
	public function widget( $args, $instance ) {
		
		//echo $args['before_widget'];
		if(!empty($instance['wppt_testi_image_uri'])){
			$wppt_testi_image_uri=$instance['wppt_testi_image_uri'];
		}
		
		$wppt_testi_name = apply_filters( 'widget_title', empty( $instance['wppt_testi_name'] ) ? '' : $instance['wppt_testi_name'], $instance, $this->id_base );
		$wppt_testi_class = apply_filters( 'widget_title', empty( $instance['wppt_testi_class'] ) ? '' : $instance['wppt_testi_class'], $instance, $this->id_base );
		
		$wppt_testi_text = ! empty( $instance['wppt_testi_text'] ) ? $instance['wppt_testi_text'] : '';
		$wppt_testi_text = apply_filters( 'widget_text', $wppt_testi_text, $instance, $this );
		?>
		<div class="item <?php echo $wppt_testi_class;?>">
		  <p><?php echo $wppt_testi_text;?></p>
			<div class="">
			  <img class="img-thumbnail" src="<?php echo $wppt_testi_image_uri;?>" style="width:150px; height:150px">
			  <h4>- <?php echo  $wppt_testi_name;?></h4>
			</div>
		</div>
		<?php
		//echo $before_widget;
		//echo $args['after_widget'];	
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

        $instance['wppt_testi_name'] = strip_tags($new_instance['wppt_testi_name']);
		$instance['wppt_testi_class'] = strip_tags($new_instance['wppt_testi_class']);
		$instance['wppt_testi_text'] = stripslashes(wp_filter_post_kses($new_instance['wppt_testi_text']));
        $instance['wppt_testi_image_uri'] = strip_tags($new_instance['wppt_testi_image_uri']);
		return $instance;
	}

	
	public function form( $instance ) {
		
		?>
		<p><label for="<?php echo $this->get_field_id('wppt_testi_name'); ?>"><?php _e('Name'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('wppt_testi_name'); ?>" name="<?php echo $this->get_field_name('wppt_testi_name'); ?>" type="text" value="<?php if(!empty($instance['wppt_testi_name'])){ echo $instance['wppt_testi_name'];} ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_testi_text'); ?>"><?php _e('Testimonial Text'); ?></label>
		<textarea class="widefat" rows="8" cols="20" id="<?php echo $this->get_field_id('wppt_testi_text'); ?>" name="<?php echo $this->get_field_name('wppt_testi_text'); ?>"><?php if(!empty($instance['wppt_testi_text'])){ echo $instance['wppt_testi_text'];} ?></textarea></p>
		<p>
		
		    <label for="<?php echo $this->get_field_id('wppt_testi_image_uri'); ?>"><?php _e('Testimonial Image'); ?></label><br/>

            <?php

            if ( !empty($instance['wppt_testi_image_uri']) ) :

                echo '<img class="wppt_testi_img" src="' . $instance['wppt_testi_image_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" alt="'.__( 'Uploaded image').'" /><br />';

            endif;

            ?>

            <input type="text" class="widefat wppt_testi_custom_media_url" name="<?php echo $this->get_field_name('wppt_testi_image_uri'); ?>" id="<?php echo $this->get_field_id('wppt_testi_image_uri'); ?>" value="<?php if( !empty($instance['wppt_testi_image_uri']) ): echo $instance['wppt_testi_image_uri']; endif; ?>" style="margin-top:5px;">
            <input type="button" class="button button-primary wppt_testi_img_button" id="wppt_testi_custom_media_button" name="<?php echo $this->get_field_name('wppt_testi_image_uri'); ?>" value="<?php _e('Upload Image'); ?>" style="margin-top:5px;">
        </p>
		<p><label for="<?php echo $this->get_field_id('wppt_testi_class'); ?>"><?php _e('<b>Type <span style="color:red;">active</span> in this box <span style="color:red;">only for first slide <span> not for others slides. </b>'); ?></label>
		<input  class="widefat" id="<?php echo $this->get_field_id('wppt_testi_class'); ?>" name="<?php echo $this->get_field_name('wppt_testi_class'); ?>" type="text" value="<?php if(!empty($instance['wppt_testi_class'])){ echo $instance['wppt_testi_class'];} ?>" /></p>
		<?php
	}
}
