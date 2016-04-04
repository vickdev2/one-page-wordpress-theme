<?php
/**
 * The template used for displaying page content
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="">', '</h1>' ); ?>
	</header>

	<?php wp_proaject_thm_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class=""><span class="">' . __( 'Pages:', 'wp_proaject_thm' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'wp_proaject_thm' ) . ' </span>%',
			'separator'   => '<span class="">, </span>',
		) );
		?>
	</div>

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class=""> "%s"</span>', 'wp_proaject_thm' ),
				get_the_title()
			),
			'<footer class=""><span class="">',
			'</span></footer>'
		);
	?>

</article>
