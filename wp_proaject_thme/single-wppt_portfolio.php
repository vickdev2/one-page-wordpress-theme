<?php

get_header();
?>
<?php

//$args = array( 'post_type' => 'wppt_portfolio', 'posts_per_page' => 1);
//$loop = new WP_Query( $args );
if( have_posts() ) { the_post();?>
   <div id="single-portfolio">
	<div id="portfolio-details" class="container">
		<img class="img-responsive" src="<?php the_post_thumbnail_url();  ?>" alt="">
		<div class="row">
			<div class="col-sm-9">
				<div class="project-info">
					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
					
				</div>
			</div>
			<div class="col-sm-3">
				<div class="project-details">
					<h3>Project Details</h3>
					<p><span>Client: </span>WrapBootstrap</p>
					<p><span>Date:</span> 15 Oct 2014</p>
					<p><span>Tag:</span> Graphic, Design, Creative</p>
				</div>  
			</div>
		</div>
	</div>
</div>
<?php }
?>

<?php
get_footer();
?>