<?php
/**
 * The template part for displaying content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class=""><?php _e( 'Featured', 'wp_proaject_thm' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class=""><a href="%s" rel="">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>

	<?php wp_proaject_thm_excerpt(); ?>

	<?php wp_proaject_thm_post_thumbnail(); ?>

	<div class="">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class=""> "%s"</span>', 'wp_proaject_thm' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class=""><span class="">' . __( 'Pages:', 'wp_proaject_thm' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="">' . __( 'Page', '' ) . ' </span>%',
				'separator'   => '<span class="">, </span>',
			) );
		?>
	</div>

	<footer class="">
		<?php wp_proaject_thm_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class=""> "%s"</span>', 'wp_proaject_thm' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer>
</article>
