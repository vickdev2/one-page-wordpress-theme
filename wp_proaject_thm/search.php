<?php
/**
 * The template for displaying search results pages
 */

get_header(); ?>

	<section id="" class="">
		<main id="" class="" role="">

		<?php if ( have_posts() ) : ?>

			<header class="">
				<h1 class=""><?php printf( __( 'Search Results for: %s', 'wp_proaject_thm' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'wp_proaject_thm' ),
				'next_text'          => __( 'Next page', 'wp_proaject_thm' ),
				'before_page_number' => '<span class="">' . __( 'Page', 'wp_proaject_thm' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main>
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
