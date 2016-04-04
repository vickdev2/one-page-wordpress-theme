<?php
/**
 * The template part for displaying results in search pages
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="">
		<?php the_title( sprintf( '<h2 class=""><a href="%s" rel="">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php wp_proaject_thm_post_thumbnail(); ?>

	<?php wp_proaject_thm_excerpt(); ?>

	<?php if ( 'post' === get_post_type() ) : ?>

		<footer class="">
			<?php wp_proaject_thm_entry_meta(); ?>
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'wp_proaject_thm' ),
						get_the_title()
					),
					'<span class="">',
					'</span>'
				);
			?>
		</footer>

	<?php else : ?>

		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'wp_proaject_thm' ),
					get_the_title()
				),
				'<footer class="entry-footer"><span class="edit-link">',
				'</span></footer><!-- .entry-footer -->'
			);
		?>

	<?php endif; ?>
</article><!-- #post-## -->

