<footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive ftlgimg" src="<?php echo get_theme_mod('wppt_footer_logo_img_opt_stng'); ?>" alt="" width="140" height="40"></a>
        </div>
        <div class="social-icons">
          <ul>
		    <li><a class="envelope" href="mailto:<?php echo get_theme_mod('wppt_footer_mail_link_opt_stng'); ?>"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="<?php echo esc_url(get_theme_mod('wppt_footer_twtr_link_opt_stng')); ?>"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="facebook" href="<?php echo esc_url(get_theme_mod('wppt_footer_fb_link_opt_stng')); ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="<?php echo esc_url(get_theme_mod('wppt_footer_linked_in_link_opt_stng')); ?>"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 ftltcn">
            <p><?php echo get_theme_mod('wppt_footer_copy_rt_content_opt_stng'); ?></p>
          </div>
          <div class="col-sm-6 ftrtcn">
            <p class="pull-right"><a href="#"><?php echo get_theme_mod('wppt_footer_copylt_content_opt_stng'); ?></a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
<script>

            // Prevent console.log from generating errors in IE for the purposes of the demo
            if ( ! window.console ) console = { log: function(){} };

            // The actual plugin
            $('.single-page-nav').singlePageNav({
                offset: $('.single-page-nav').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                beforeStart: function() {
                    console.log('begin scrolling');
                },
                onComplete: function() {
                    console.log('done scrolling');
                }
            });
        </script>
</body>
</html>
