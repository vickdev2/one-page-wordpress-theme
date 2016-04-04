<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 */
?>

<section class="">
	<header class="">
		<h1 class=""><?php _e( 'Nothing Found', 'wp_proaject_thm' ); ?></h1>
	</header>

	<div class="">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wp_proaject_thm' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wp_proaject_thm' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wp_proaject_thm' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
</section>
