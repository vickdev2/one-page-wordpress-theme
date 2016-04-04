<?php
class WP_wppt_banner_widget extends WP_Widget {
		
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'wp_wppt_banner_widget',
			'description' => 'Wppt-Banner Section Widget',
		);
		parent::__construct( 'wppt_banner_widget', 'Wppt-Banner Section Widget', $widget_ops );
	}
	public function widget( $args, $instance ) {
		
		//echo $args['before_widget'];
		if(!empty($instance['wppt_bb_image_uri'])){
			$wppt_bb_image_uri=$instance['wppt_bb_image_uri'];
		}
		
		$wppt_banner_title = apply_filters( 'widget_title', empty( $instance['wppt_banner_title'] ) ? '' : $instance['wppt_banner_title'], $instance, $this->id_base );
		$wppt_banner_class = apply_filters( 'widget_title', empty( $instance['wppt_banner_class'] ) ? '' : $instance['wppt_banner_class'], $instance, $this->id_base );
		
		$wppt_button_text = apply_filters( 'widget_title', empty( $instance['wppt_button_text'] ) ? '' : $instance['wppt_button_text'], $instance, $this->id_base );
		$wppt_button_link = apply_filters( 'widget_title', empty( $instance['wppt_button_link'] ) ? '' : $instance['wppt_button_link'], $instance, $this->id_base );
		$wppt_banner_text = ! empty( $instance['wppt_banner_text'] ) ? $instance['wppt_banner_text'] : '';
		$wppt_banner_text = apply_filters( 'widget_text', $wppt_banner_text, $instance, $this );
		?>
		<div class="item <?php echo $wppt_banner_class; ?>" style="background-image: url(<?php echo $wppt_bb_image_uri; ?>)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><?php echo $wppt_banner_title; ?><span></span></h1>
            <p class="animated fadeInRightBig"><?php echo $wppt_banner_text; ?></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="<?php echo esc_url($wppt_button_link); ?>"><?php echo $wppt_button_text; ?></a>
          </div>
        </div>
		<?php
		//echo $before_widget;
		//echo $args['after_widget'];	
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

        $instance['wppt_banner_title'] = strip_tags($new_instance['wppt_banner_title']);
		
		$instance['wppt_banner_class'] = strip_tags($new_instance['wppt_banner_class']);
		$instance['wppt_button_link'] = strip_tags($new_instance['wppt_button_link']);
        $instance['wppt_banner_text'] = stripslashes(wp_filter_post_kses($new_instance['wppt_banner_text']));
        $instance['wppt_button_text'] = strip_tags($new_instance['wppt_button_text']);
        $instance['wppt_bb_image_uri'] = strip_tags($new_instance['wppt_bb_image_uri']);
		return $instance;
	}

	
	public function form( $instance ) {
		?>
		<p><label for="<?php echo $this->get_field_id('wppt_banner_title'); ?>"><?php _e('Banner Title'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('wppt_banner_title'); ?>" name="<?php echo $this->get_field_name('wppt_banner_title'); ?>" type="text" value="<?php if(!empty($instance['wppt_banner_title'])){ echo $instance['wppt_banner_title'];} ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_banner_text'); ?>"><?php _e('Banner Sub Title'); ?></label>
		<textarea class="widefat" rows="8" cols="20" id="<?php echo $this->get_field_id('wppt_banner_text'); ?>" name="<?php echo $this->get_field_name('wppt_banner_text'); ?>"><?php if(!empty($instance['wppt_banner_text'])){ echo $instance['wppt_banner_text'];} ?></textarea></p>
		<p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_button_text'); ?>"><?php _e('Button Text'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('wppt_button_text'); ?>" name="<?php echo $this->get_field_name('wppt_button_text'); ?>" type="text" value="<?php if(!empty($instance['wppt_button_text'])){ echo $instance['wppt_button_text'];} ?>" />
		</p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_button_link'); ?>"><?php _e('Button Link'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('wppt_button_link'); ?>" name="<?php echo $this->get_field_name('wppt_button_link'); ?>" type="text" value="<?php if(!empty($instance['wppt_button_link'])){ echo $instance['wppt_button_link'];} ?>" />
		</p>
		
		
		
            <label for="<?php echo $this->get_field_id('wppt_bb_image_uri'); ?>"><?php _e('Background Image'); ?></label><br/>

            <?php

            if ( !empty($instance['wppt_bb_image_uri']) ) :

                echo '<img class="wppt_bb_img" src="' . $instance['wppt_bb_image_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" alt="'.__( 'Uploaded image').'" /><br />';

            endif;

            ?>

            <input type="text" class="widefat wppt_bb_custom_media_url" name="<?php echo $this->get_field_name('wppt_bb_image_uri'); ?>" id="<?php echo $this->get_field_id('wppt_bb_image_uri'); ?>" value="<?php if( !empty($instance['wppt_bb_image_uri']) ): echo $instance['wppt_bb_image_uri']; endif; ?>" style="margin-top:5px;">
            <input type="button" class="button button-primary wppt_bb_img_button" id="wppt_bb_custom_media_button" name="<?php echo $this->get_field_name('wppt_bb_image_uri'); ?>" value="<?php _e('Upload Image'); ?>" style="margin-top:5px;">
        </p>
		<p><label for="<?php echo $this->get_field_id('wppt_banner_class'); ?>"><?php _e('<b>Type <span style="color:red;">active</span> in this box <span style="color:red;">only for first slide <span> not for others slides. </b>'); ?></label>
		<input  class="widefat" id="<?php echo $this->get_field_id('wppt_banner_class'); ?>" name="<?php echo $this->get_field_name('wppt_banner_class'); ?>" type="text" value="<?php if(!empty($instance['wppt_banner_class'])){ echo $instance['wppt_banner_class'];} ?>" /></p>
		<?php
	}
}
