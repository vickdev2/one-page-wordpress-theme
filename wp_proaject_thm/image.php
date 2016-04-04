<?php
/**
 * The template for displaying image attachments
 *
 */

get_header(); ?>

	<div id="" class="">
		<main id="" class="" role="">

			<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
			?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<nav id="" class="">
						<div class="">
							<div class=""><?php previous_image_link( false, __( 'Previous Image', 'wp_proaject_thm' ) ); ?></div>
							<div class=""><?php next_image_link( false, __( 'Next Image', 'wp_proaject_thm' ) ); ?></div>
						</div>
					</nav>

					<header class="">
						<?php the_title( '<h1 class="">', '</h1>' ); ?>
					</header>

					<div class="">

						<div class="">
							<?php
								
								$image_size = apply_filters( 'wp_proaject_thm_attachment_size', 'large' );

								echo wp_get_attachment_image( get_the_ID(), $image_size );
							?>

							<?php wp_proaject_thm_excerpt('entry-caption' ); ?>

						</div>

						<?php
							the_content();
							wp_link_pages( array(
								'before'      => '<div class=""><span class="">' . __( 'Pages:', 'wp_proaject_thm' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="">' . __( 'Page', 'wp_proaject_thm' ) . ' </span>%',
								'separator'   => '<span class="wp_proaject_thm">, </span>',
							) );
						?>
					</div>

					<footer class="">
						<?php wp_proaject_thm_entry_meta(); ?>
						<?php
							// Retrieve attachment metadata.
							$metadata = wp_get_attachment_metadata();
							if ( $metadata ) {
								printf( '<span class=""><span class="">%1$s </span><a href="%2$s">%3$s &times; %4$s</a></span>',
									esc_html_x( 'Full size', 'Used before full size attachment link.', 'wp_proaject_thm' ),
									esc_url( wp_get_attachment_url() ),
									absint( $metadata['width'] ),
									absint( $metadata['height'] )
								);
							}
						?>
						<?php
							edit_post_link(
								sprintf(
									/* translators: %s: Name of current post */
									__( 'Edit<span class=""> "%s"</span>', 'wp_proaject_thm' ),
									get_the_title()
								),
								'<span class="">',
								'</span>'
							);
						?>
					</footer>
				</article>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

					// Parent post navigation.
					the_post_navigation( array(
						'prev_text' => _x( '<span class="">Published in</span><span class="">%title</span>', 'Parent post link', 'wp_proaject_thm' ),
					) );
				// End the loop.
				endwhile;
			?>

		</main>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
