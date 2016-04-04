<?php
/**
 * Template for displaying search forms 
 *
 
 */
?>

<form role="" method="get" class="" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class=""><?php echo _x( 'Search for:', 'label', 'wp_proaject_thm' ); ?></span>
		<input type="search" class="" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'wp_proaject_thm' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'wp_proaject_thm' ); ?>" />
	</label>
	<button type="submit" class=""><span class=""><?php echo _x( 'Search', 'submit button', 'wp_proaject_thm' ); ?></span></button>
</form>
