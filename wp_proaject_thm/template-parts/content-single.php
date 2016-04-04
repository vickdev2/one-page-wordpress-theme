<?php
/**
 * The template part for displaying single posts
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="">
		<?php the_title( '<h1 class="">', '</h1>' ); ?>
	</header>

	<?php wp_proaject_thm_excerpt; ?>

	<?php wp_proaject_thm_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class=""><span class="">' . __( 'Pages:', 'wp_proaject_thm' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="">' . __( 'Page', 'wp_proaject_thm' ) . ' </span>%',
				'separator'   => '<span class="">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
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
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
