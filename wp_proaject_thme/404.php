<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>

	
			<section class="">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'wp_proaject_thm' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'wp_proaject_thm' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
				
					</div>
				</div>
			</div>
			</section><!-- .error-404 -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
