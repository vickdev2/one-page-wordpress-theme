<?php
class WP_wppt_ptbl_widget extends WP_Widget {
		
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'wp_wppt_ptbl_widget',
			'description' => 'Wppt-Pricing Table Section Widget',
		);
		parent::__construct( 'wppt_ptbl_widget', 'Wppt-Pricing Table Section Widget', $widget_ops );
	}
	public function widget( $args, $instance ) {
		
		//echo $args['before_widget'];
		
		
		$wppt_ptbl_title = apply_filters( 'widget_title', empty( $instance['wppt_ptbl_title'] ) ? '' : $instance['wppt_ptbl_title'], $instance, $this->id_base );
		$wppt_ptbl_price = apply_filters( 'widget_title', empty( $instance['wppt_ptbl_price'] ) ? '' : $instance['wppt_ptbl_price'], $instance, $this->id_base );
		$wppt_ptbl_period = apply_filters( 'widget_title', empty( $instance['wppt_ptbl_period'] ) ? '' : $instance['wppt_ptbl_period'], $instance, $this->id_base );
		$wppt_ptbl_class = apply_filters( 'widget_title', empty( $instance['wppt_ptbl_class'] ) ? '' : $instance['wppt_ptbl_class'], $instance, $this->id_base );
		$wppt_ptbl_button_text = apply_filters( 'widget_title', empty( $instance['wppt_ptbl_button_text'] ) ? '' : $instance['wppt_ptbl_button_text'], $instance, $this->id_base );
		$wppt_ptbl_button_link = apply_filters( 'widget_title', empty( $instance['wppt_ptbl_button_link'] ) ? '' : $instance['wppt_ptbl_button_link'], $instance, $this->id_base );
		$wppt_ptbl_services = ! empty( $instance['wppt_ptbl_services'] ) ? $instance['wppt_ptbl_services'] : '';
		$wppt_ptbl_services = apply_filters( 'widget_text', $wppt_ptbl_services, $instance, $this );
		?>
		<div class="col-sm-3">
			<div class="<?php echo $wppt_ptbl_class; ?> single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3><?php echo $wppt_ptbl_title; ?></h3>
              <div class="price">
                <?php echo $wppt_ptbl_price; ?><span><?php echo $wppt_ptbl_period; ?></span>                          
              </div>
			  <?php echo $wppt_ptbl_services; ?>
              <a href="<?php echo esc_url($wppt_ptbl_button_link); ?>" class="btn btn-lg btn-primary"><?php echo $wppt_ptbl_button_text; ?></a>
            </div>
			
          </div>
		<?php
		//echo $before_widget;
		//echo $args['after_widget'];	
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

        $instance['wppt_ptbl_title'] = strip_tags($new_instance['wppt_ptbl_title']);
		$instance['wppt_ptbl_price'] = strip_tags($new_instance['wppt_ptbl_price']);
		$instance['wppt_ptbl_period'] = strip_tags($new_instance['wppt_ptbl_period']);
		$instance['wppt_ptbl_class'] = strip_tags($new_instance['wppt_ptbl_class']);
		
		$instance['wppt_ptbl_services'] = stripslashes(wp_filter_post_kses($new_instance['wppt_ptbl_services']));
        $instance['wppt_ptbl_button_text'] = strip_tags($new_instance['wppt_ptbl_button_text']);
        $instance['wppt_ptbl_button_link'] = strip_tags($new_instance['wppt_ptbl_button_link']);
		
		
		return $instance;
	}

	
	public function form( $instance ) {
		
		?>
		<p><label for="<?php echo $this->get_field_id('wppt_ptbl_title'); ?>"><?php _e('Title'); ?></label>
		<input  class="widefat" id="<?php echo $this->get_field_id('wppt_ptbl_title'); ?>" name="<?php echo $this->get_field_name('wppt_ptbl_title'); ?>" type="text" value="<?php if(!empty($instance['wppt_ptbl_title'])){ echo $instance['wppt_ptbl_title'];} ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_ptbl_price'); ?>"><?php _e('Price'); ?></label>
		<input  class="widefat" id="<?php echo $this->get_field_id('wppt_ptbl_price'); ?>" name="<?php echo $this->get_field_name('wppt_ptbl_price'); ?>" type="text" value="<?php if(!empty($instance['wppt_ptbl_price'])){ echo $instance['wppt_ptbl_price'];} ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_ptbl_period'); ?>"><?php _e('Period'); ?></label>
		<input  class="widefat" id="<?php echo $this->get_field_id('wppt_ptbl_period'); ?>" name="<?php echo $this->get_field_name('wppt_ptbl_period'); ?>" type="text" value="<?php if(!empty($instance['wppt_ptbl_period'])){ echo $instance['wppt_ptbl_period'];} ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_ptbl_services'); ?>"><?php _e('Services'); ?></label>
		<textarea placeholder="Put Services like this ex- <ul><li>Service 1</li><li> Service 2</li><li> Service 3</li></ul>" class="widefat" rows="8" cols="20" id="<?php echo $this->get_field_id('wppt_ptbl_services'); ?>" name="<?php echo $this->get_field_name('wppt_ptbl_services'); ?>"><?php if(!empty($instance['wppt_ptbl_services'])){ echo $instance['wppt_ptbl_services'];}?></textarea></p>
		<p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_ptbl_button_text'); ?>"><?php _e('Button Text'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('wppt_ptbl_button_text'); ?>" name="<?php echo $this->get_field_name('wppt_ptbl_button_text'); ?>" type="text" value="<?php if(!empty($instance['wppt_ptbl_button_text'])){ echo $instance['wppt_ptbl_button_text'];} ?>" />
		</p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_ptbl_button_link'); ?>"><?php _e('Button Link'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('wppt_ptbl_button_link'); ?>" name="<?php echo $this->get_field_name('wppt_ptbl_button_link'); ?>" type="text" value="<?php if(!empty($instance['wppt_ptbl_button_link'])){ echo $instance['wppt_ptbl_button_link'];} ?>" />
		</p>
		<p><label for="<?php echo $this->get_field_id('wppt_ptbl_class'); ?>"><?php _e('<b>Type Featured for Highlighting</b>'); ?></label>
		<input  class="widefat" id="<?php echo $this->get_field_id('wppt_ptbl_class'); ?>" name="<?php echo $this->get_field_name('wppt_ptbl_class'); ?>" type="text" value="<?php if(!empty($instance['wppt_ptbl_class'])){ echo $instance['wppt_ptbl_class'];} ?>" /></p>
		
		<?php
	}
}
?>
