<?php

get_header('front');
?>
  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
	  <?php 
	  
		if ( is_active_sidebar( 'wppt_banner_sec' ) ) : 
		dynamic_sidebar( 'wppt_banner_sec' );
		endif;
		
		?>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
	<div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <h1><img class="img-responsive stlgimg" src="<?php echo get_theme_mod('wppt_site_logo_img_opt_stng'); ?>" alt="logo" width="90px"></h1>
          </a>                    
        </div>
		
        <div class="collapse navbar-collapse single-page-nav">
		<?php if ( has_nav_menu( 'wp_proaject_thm_primary_menu' ) ) : ?>
				
					<?php
						wp_nav_menu( array(
							'theme_location' => 'wp_proaject_thm_primary_menu',
							'menu_class'     => 'nav navbar-nav navbar-right',
							'menu_id'     => ' test',
							'container'=>'',
						 ) );
					?>
				
		<?php endif; ?>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2><?php echo get_theme_mod('wppt_services_mttl_opt_stng'); ?></h2>
            <p><?php echo get_theme_mod('wppt_services_sttl_opt_stng'); ?></p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
		<?php 
			if ( is_active_sidebar( 'wppt_services_sec' ) ) : 
			dynamic_sidebar( 'wppt_services_sec' );
			endif;
		?>
          
        </div>
      </div>
    </div>
  </section><!--/#services-->
  
  <section id="about-us" class="parallax" style="background:url(<?php echo get_theme_mod('wppt_about_bimage_opt_stng'); ?>);">
  
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2><?php echo get_theme_mod('wppt_abiout_mttl_opt_stng'); ?></h2>
            <p><?php echo get_theme_mod('wppt_about_sttl_opt_stng'); ?></p>
            
          </div>
        </div>
        <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead"><?php echo get_theme_mod('wppt_abiout_sk1mttl_opt_stng'); ?></p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="<?php echo get_theme_mod('wppt_abiout_sk1per_opt_stng'); ?>"><?php echo get_theme_mod('wppt_abiout_sk1per_opt_stng'); ?>%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead"><?php echo get_theme_mod('wppt_abiout_sk2mttl_opt_stng'); ?></p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="<?php echo get_theme_mod('wppt_abiout_sk2per_opt_stng'); ?>"><?php echo get_theme_mod('wppt_abiout_sk2per_opt_stng'); ?>%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead"><?php echo get_theme_mod('wppt_abiout_sk3mttl_opt_stng'); ?></p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="<?php echo get_theme_mod('wppt_abiout_sk3per_opt_stng'); ?>"><?php echo get_theme_mod('wppt_abiout_sk3per_opt_stng'); ?>%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead"><?php echo get_theme_mod('wppt_abiout_sk4mttl_opt_stng'); ?></p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="<?php echo get_theme_mod('wppt_abiout_sk4per_opt_stng'); ?>"><?php echo get_theme_mod('wppt_abiout_sk4per_opt_stng'); ?>%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2><?php echo get_theme_mod('wppt_portfolio_mttl_opt_stng'); ?></h2>
          <p><?php echo get_theme_mod('wppt_portfolio_sttl_opt_stng'); ?></p>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
	  <?php 
	  
		if ( is_active_sidebar( 'wppt_pf_sec' ) ) : 
		dynamic_sidebar( 'wppt_pf_sec' );
		endif;
		
		?>
		<?php
			$args=array('post_type' =>'wppt_portfolio','post_status' => 'publish');
			query_posts( $args );
			while ( have_posts() ) : the_post();
				?>
		<div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php the_post_thumbnail_url();  ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3><?php $period= get_post_meta(get_the_ID (), 'period'); echo $period[0];?></h3>
                    <p><?php $title= get_post_meta(get_the_ID (), 'title'); echo $title[0];?></p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="<?php the_permalink(); ?>" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php the_post_thumbnail_url();?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		   	<?php
			endwhile;

			// Reset Query
			wp_reset_query();
			?>
        
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2><?php echo get_theme_mod('wppt_your_team_mttl_opt_stng'); ?></h2>
          <p><?php echo get_theme_mod('wppt_your_team_sttl_opt_stng'); ?></p>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
		<?php if ( is_active_sidebar( 'wppt_team_member' ) ) : 
		dynamic_sidebar( 'wppt_team_member' );
		endif; ?>
        </div>
      </div>            
    </div>
  </section><!--/#team-->

  <section id="features" class="parallax" style="background:url(<?php echo get_theme_mod('wppt_counter_bimage_opt_stng'); ?>);">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <h3 class="timer clnthd"><?php echo get_theme_mod('wppt_client_mttl_opt_stng'); ?></h3>
          <p class="clntpr"><?php echo get_theme_mod('wppt_client_sttl_opt_stng'); ?></p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-desktop"></i>
          <h3 class="timer webhd"><?php echo get_theme_mod('wppt_web_mttl_opt_stng'); ?></h3>                    
          <p class="webpr"><?php echo get_theme_mod('wppt_web_sttl_opt_stng'); ?></p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-trophy"></i>
          <h3 class="timer awrdhd"><?php echo get_theme_mod('wppt_adawd_mttl_opt_stng'); ?></h3>                    
          <p class="awrdpr"><?php echo get_theme_mod('wppt_award_sttl_opt_stng'); ?></p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-comment-o"></i>                    
          <h3 class="sprthd"><?php echo get_theme_mod('wppt_support_mttl_opt_stng'); ?></h3>
          <p class="sprtpr"><?php echo get_theme_mod('wppt_support_sttl_opt_stng'); ?></p>
        </div>                 
      </div>
    </div>
  </section><!--/#features-->

  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2><?php echo get_theme_mod('wppt_price_table_mttl_opt_stng'); ?></h2>
          <p><?php echo get_theme_mod('wppt_price_table_sttl_opt_stng'); ?></p>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
		<?php if ( is_active_sidebar( 'wppt_ptbl_sec' ) ) : 
		dynamic_sidebar( 'wppt_ptbl_sec' );
		endif; ?>
        </div>
      </div>
    </div>
  </section><!--/#pricing-->

  <section id="twitter" class="parallax" style="background:url(<?php echo get_theme_mod('wppt_testimonial_bimage_opt_stng'); ?>);">
    <div class="tstmn">
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 tstmnl" >
            <div class="twitter-icon text-center">
              <h1 style="color:#fff;"><?php echo get_theme_mod('wppt_testimonial_mttl_opt_stng'); ?></h1>
			  <p style="color:#fff;"><b><?php echo get_theme_mod('wppt_testimonial_sttl_opt_stng'); ?></b></p>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <?php if ( is_active_sidebar( 'wppt_testi_sec' ) ) : 
				dynamic_sidebar( 'wppt_testi_sec' );
				endif; ?>
			  </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2><?php echo get_theme_mod('wppt_latest_post_ttl_opt_stng'); ?></h2>
          <p><?php echo get_theme_mod('wppt_latest_post_sttl_opt_stng'); ?></p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
			<?php
			$args = array( 'posts_per_page' => 3);
			//$args=array('post_type' =>'wppt_portfolio','post_status' => 'publish','posts_per_page' => 3);
			query_posts( $args );
			while ( have_posts() ) : the_post();
				?>
			<div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="<?php the_permalink(); ?>"><img style="width:300px; height:300px" class="img-responsive" src="<?php the_post_thumbnail_url();  ?>" alt=""></a> 
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i><a href="<?php the_permalink(); ?>/#respond"> <?php comments_number( ' 0 Comment', ' 1 Comment', '% Comments' ); ?></a></span>
				
              </div>
              
            </div>
            <div class="entry-header">
              <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
              <?php //wp_proaject_thm_entry_meta(); ?>
			  <span class="date"><?php the_time('F j, Y');?></span>
              <span class="cetagory"><?php wp_proaject_thm_entry_taxonomies(); ?></span>
            </div>
            <div class="entry-content">
              <p><?php the_excerpt();?></p>
			  <p><?php //$period= get_post_meta(get_the_ID (), 'period'); echo $period[0];?></p>
            </div>
          </div>
				<?php
			endwhile;

			// Reset Query
			wp_reset_query();
			?>
          
                          
      </div>
    </div>
  </section><!--/#blog-->

  <section id="contact" >
    <div id="google-map" class="wow fadeIn" data-latitude="<?php echo get_theme_mod('wppt_gmaplat_opt_stng') ?>" data-longitude="<?php echo get_theme_mod('wppt_gmaplong_opt_stng') ?>" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax" style="background:url(<?php echo get_theme_mod('wppt_contact_us_bimage_opt_stng'); ?>);">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2><?php echo get_theme_mod('wppt_contact_us_mttl_opt_stng'); ?></h2>
            
			<p><?php echo get_theme_mod('wppt_contact_us_sttl_opt_stng'); ?></p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit fmbtn"><?php echo get_theme_mod('wppt_contact_us_emailbtn_opt_stng') ?></button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p><?php echo get_theme_mod('wppt_contact_us_rtxt_opt_stng') ?></p>
                <ul class="address">
                  <li class="cnt-add"><i class="fa fa-map-marker"></i> <span class="cnt-add-tl"> <?php echo get_theme_mod('wppt_contact_us_addttl_opt_stng') ?></span><span class="cnt-add-cn"> <?php echo get_theme_mod('wppt_contact_us_addtxt_opt_stng') ?> </span></li>
                  <li class="cnt-phn"><i class="fa fa-phone"></i> <span class="cnt-phn-tl"><?php echo get_theme_mod('wppt_contact_us_phonettl_opt_stng') ?></span><span class="cnt-phn-cn"><?php echo get_theme_mod('wppt_contact_us_phonetxt_opt_stng') ?> </span></li>
                  <li class="cnt-ml"><i class="fa fa-envelope"></i> <span class="cnt-ml-tl"> <?php echo get_theme_mod('wppt_contact_us_emailttl_opt_stng') ?></span><a href="mailto:<?php echo get_theme_mod('wppt_contact_us_emailtxt_opt_stng') ?>" target="_blank"> <span class="cnt-ml-cn"><?php echo get_theme_mod('wppt_contact_us_emailtxt_opt_stng') ?></span></a></li>
                  <li class="cnt-wb"><i class="fa fa-globe"></i> <span class="cnt-wb-tl"><?php echo get_theme_mod('wppt_contact_us_webttl_opt_stng') ?></span> <a href="#"><span class="cnt-wb-cn"><?php echo get_theme_mod('wppt_contact_us_webtxt_opt_stng') ?></span></a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  
<?php 
//dynamic_sidebar('home_right_1');

get_footer();
?>