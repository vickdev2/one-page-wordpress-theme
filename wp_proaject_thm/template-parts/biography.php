<?php
/**
 * The template part for displaying an Author biography
 *
 */
?>

<div class="">
	<div class="">
		<?php
		
		//$author_bio_avatar_size = apply_filters( 'twentysixteen_author_bio_avatar_size', 42 );
		$author_avatar_size=49;
		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div>

	<div class="">
		<h2 class=""><span class=""><?php _e( 'Author:', 'wp_proaject_thm' ); ?></span> <?php echo get_the_author(); ?></h2>

		<p class="">
			<?php the_author_meta( 'description' ); ?>
			<a class="" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="">
				<?php printf( __( 'View all posts by %s', 'wp_proaject_thm' ), get_the_author() ); ?>
			</a>
		</p>
	</div>
</div>
