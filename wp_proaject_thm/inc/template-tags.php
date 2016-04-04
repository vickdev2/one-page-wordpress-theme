<?php

if ( ! function_exists( 'wp_proaject_thm_excerpt' ) ) :
	/**
	 * Displays the optional excerpt.
	 *
	 * Wraps the excerpt in a div element.
	 * 
	 */
	function wp_proaject_thm_excerpt( $class = 'entry-summary' ) {
		$class = esc_attr( $class );

		if ( has_excerpt() || is_search() ) : ?>
			<div class="<?php echo $class; ?>">
				<?php the_excerpt(); ?>
			</div><!-- .<?php echo $class; ?> -->
		<?php endif;
	}
endif;

if ( ! function_exists( 'wp_proaject_thm_post_thumbnail' ) ) :
/**
 * Displays an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 *
 
 */
function wp_proaject_thm_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="">
		<?php the_post_thumbnail(); ?>
	</div>

	<?php else : ?>

	<a class="" href="<?php the_permalink(); ?>" aria-hidden="">
		<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
	</a>

	<?php endif; // End is_singular()
}
endif;

if ( ! function_exists( 'wp_proaject_thm_entry_taxonomies' ) ) :
/**
 * Prints HTML with category and tags for current post.
 **/
function wp_proaject_thm_entry_taxonomies() {
	$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'wp_proaject_thm' ) );
	if ( $categories_list && wp_proaject_thm_categorized_blog() ) {
		printf( '<span class=""><span class="">%1$s </span>%2$s</span>',
			_x( 'Categories', 'Used before category names.', 'wp_proaject_thm' ),
			$categories_list
		);
	}

	$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'wp_proaject_thm' ) );
	if ( $tags_list ) {
		printf( '<span class=""><span class="">%1$s </span>%2$s</span>',
			_x( 'Tags', 'Used before tag names.', 'wp_proaject_thm' ),
			$tags_list
		);
	}
}
endif;

/**
 * Determines whether blog/site has more than one category.
 */
function wp_proaject_thm_categorized_blog() {
	// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );
		$all_the_cool_cats = count( $all_the_cool_cats );
	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so wp_proaject_thm_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so wp_proaject_thm_categorized_blog should return false.
		return false;
	}
}


if ( ! function_exists( 'wp_proaject_thm_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the categories, tags.
 
 */
function wp_proaject_thm_entry_meta() {
	if ( 'post' === get_post_type() ) {
		//$author_avatar_size = apply_filters( 'twentysixteen_author_avatar_size', 49 );
		$author_avatar_size=49;
		printf( '<span class=""><span class="">%1$s<span class="">%2$s </span> <a class="url fn n" href="%3$s">%4$s</a></span></span>',
			get_avatar( get_the_author_meta( 'user_email' ), $author_avatar_size ),
			_x( 'Author', 'Used before post author name.', 'wp_proaject_thm' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
	}

	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		?><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));?>" > <?php the_time('F j, Y g:i a');?> </a><?php
	}

	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="">%1$s<a href="%2$s">%3$s</a></span>',
			sprintf( '<span class="">%s </span>', _x( 'Format', 'Used before post format.', 'wp_proaject_thm' ) ),
			esc_url( get_post_format_link( $format ) ),
			get_post_format_string( $format )
		);
	}

	if ( 'post' === get_post_type() ) {
		wp_proaject_thm_entry_taxonomies();
	}

	if ( ! is_singular() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( sprintf( __( 'Leave a comment<span class=""> on %s</span>', 'wp_proaject_thm' ), get_the_title() ) );
		echo '</span>';
	}
}
endif;