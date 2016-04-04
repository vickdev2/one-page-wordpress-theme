<?php
/**
 * The template for displaying all single posts and attachments
 
 */

get_header(); ?>

<div id="" class="">
	<main id="" class="" role="">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="">Published in</span><span class="">%title</span>', 'Parent post link', 'wp_proaject_thm' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="" aria-hidden="">' . __( 'Next', 'wp_proaject_thm' ) . '</span> ' .
						'<span class="">' . __( 'Next post:', 'wp_proaject_thm' ) . '</span> ' .
						'<span class="">%title</span>',
					'prev_text' => '<span class="" aria-hidden="">' . __( 'Previous','wp_proaject_thm' ) . '</span> ' .
						'<span class="">' . __( 'Previous post:', 'wp_proaject_thm' ) . '</span> ' .
						'<span class="">%title</span>',
				) );
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
