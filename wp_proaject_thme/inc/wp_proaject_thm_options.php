<?php

add_action( 'customize_register' , 'wp_proaject_thm_options' );

function wp_proaject_thm_options( $wp_customize ) {
	//$wp_customize->remove_section('colors');
	$wp_customize->remove_section('menus');
	$wp_customize->remove_section('static_front_page');
	
	$wp_customize->add_panel( 'wppt_gen_opt_panel', array(
	  'title' => __( 'General Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	$wp_customize->add_section( 'wppt_gen_opt_sec' , array(
	  'title' => 'General Option',
	  'panel' => 'wppt_gen_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_site_logo_img_opt_stng',
	array(
		'default' => 'http://localhost/wp/wp-content/uploads/2016/03/bg.jpg',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'wppt_site_logo_img_opt_ctrl',
        array(
            'label' => 'Site Logo',
            'section' => 'wppt_gen_opt_sec',
            'settings' => 'wppt_site_logo_img_opt_stng'
        )
    )
	);
	
	$wp_customize->add_setting( 'wppt_footer_copy_rt_content_opt_stng',
	array(
		'default' => 'copy right',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_footer_copy_rt_content_opt_ctrl',
    array(
        'label' => 'Footer Copyright left text',
		'section'  => 'wppt_gen_opt_sec',
		'settings' => 'wppt_footer_copy_rt_content_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_footer_copylt_content_opt_stng',
	array(
		'default' => 'copy right',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_footer_copy_lt_content_opt_ctrl',
    array(
        'label' => 'Footer Copyright right text',
		'section'  => 'wppt_gen_opt_sec',
		'settings' => 'wppt_footer_copylt_content_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_disable preloader_opt_stng',
	array(
		'default' => false,
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_disable preloader_opt_ctrl',
    array(
        'type' => 'checkbox',
        'label' => 'Hide copyright text',
        'section' => 'wppt_gen_opt_sec',
		'settings' => 'wppt_disable preloader_opt_stng',
    )
	);
	
	$wp_customize->add_section( 'wppt_footer_social_opt_sec' , array(
	  'title' => 'Footer Social ',
	  'panel' => 'wppt_gen_opt_panel',
	) );
	$wp_customize->add_setting( 'wppt_footer_mail_link_opt_stng',
	array(
		'default' => '#',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_mail_link_opt_ctrl',
    array(
        'label' => 'Mail Link',
		'section'  => 'wppt_footer_social_opt_sec',
		'settings' => 'wppt_footer_mail_link_opt_stng',
        'type' => 'text',
		
    )
	);
	
	$wp_customize->add_setting( 'wppt_footer_fb_link_opt_stng',
	array(
		'default' => '#',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_fb_link_opt_ctrl',
    array(
        'label' => 'Facebook Link',
		'section'  => 'wppt_footer_social_opt_sec',
		'settings' => 'wppt_footer_fb_link_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_footer_twtr_link_opt_stng',
	array(
		'default' => '#',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_twtr_link_opt_ctrl',
    array(
        'label' => 'Twitter Link',
		'section'  => 'wppt_footer_social_opt_sec',
		'settings' => 'wppt_footer_twtr_link_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_footer_linked_in_link_opt_stng',
	array(
		'default' => '#',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_linked_in_link_opt_ctrl',
    array(
        'label' => 'Linked In Link',
		'section'  => 'wppt_footer_social_opt_sec',
		'settings' => 'wppt_footer_linked_in_link_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_footer_logo_img_opt_stng',
	array(
		'default' => 'http://localhost/wp/wp-content/uploads/2016/03/bg.jpg',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'wppt_footer_logo_img_opt_ctrl',
        array(
            'label' => 'Footer Logo',
            'section' => 'wppt_footer_social_opt_sec',
            'settings' => 'wppt_footer_logo_img_opt_stng'
        )
    )
	);
	
	$wp_customize->add_panel( 'wppt_banner_opt_panel', array(
	  'title' => __( 'Banner Options' ),
	  'description' => ' Theme Bannerl Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	$wp_customize->add_section( 'wppt_banner_content_opt_sec' , array(
	  'title' => 'Banner Content Option',
	  'panel' => 'wppt_banner_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_banner_mttl_opt_stng',
	array(
		'default' => 'Banner main Title',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_banner_mttl_opt_ctrl',
    array(
        'type' => 'text',
        'label' => 'Banner Title',
        'section' => 'wppt_banner_content_opt_sec',
		'settings' => 'wppt_banner_mttl_opt_stng',
    )
	);
	$wp_customize->add_panel( 'wppt_contact_us_opt_panel', array(
	  'title' => __( 'Contact US' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	$wp_customize->add_section( 'wppt_contact_us_txt_opt_sec' , array(
	  'title' => 'Contact Us Text Section',
	  'panel' => 'wppt_contact_us_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_contact_us_mttl_opt_stng',
	array(
		'default' => 'Contact Us Main Title ',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_contact_us_mttl_opt_ctrl',
    array(
        'label' => 'Contact Us Main Title Text',
		'section'  => 'wppt_contact_us_txt_opt_sec',
		'settings' => 'wppt_contact_us_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_contact_us_sttl_opt_stng',
	array(
		'default' => 'Contact Us Sub Title ',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_contact_us_sttl_opt_ctrl',
    array(
        'label' => 'Contact Us Sub Title Text ',
		'section'  => 'wppt_contact_us_txt_opt_sec',
		'settings' => 'wppt_contact_us_sttl_opt_stng',
        'type' => 'textarea',
		
    )
	);
	$wp_customize->add_setting( 'wppt_contact_us_rtxt_opt_stng',
	array(
		'default' => 'Contact Us Right side Text ',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_contact_us_rtxt_opt_ctrl',
    array(
        'label' => 'Contact Us Right side Text ',
		'section'  => 'wppt_contact_us_txt_opt_sec',
		'settings' => 'wppt_contact_us_rtxt_opt_stng',
        'type' => 'textarea',
		
    )
	);
	$wp_customize->add_section( 'wppt_contact_us_info_opt_sec' , array(
	  'title' => 'Contact Us Info Section',
	  'panel' => 'wppt_contact_us_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_contact_us_addttl_opt_stng',
	array(
		'default' => 'Contact Us Address Title ',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_contact_us_addttl_opt_ctrl',
    array(
        'label' => 'Contact Us Address Title ',
		'section'  => 'wppt_contact_us_info_opt_sec',
		'settings' => 'wppt_contact_us_addttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_contact_us_addtxt_opt_stng',
	array(
		'default' => 'Contact Us Address Text ',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_contact_us_addtxt_opt_ctrl',
    array(
        'label' => 'Contact Us Address Text',
		'section'  => 'wppt_contact_us_info_opt_sec',
		'settings' => 'wppt_contact_us_addtxt_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_contact_us_phonettl_opt_stng',
	array(
		'default' => 'Contact Us Phone Title ',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_contact_us_phonettl_opt_ctrl',
    array(
        'label' => 'Contact Us Phone Title ',
		'section'  => 'wppt_contact_us_info_opt_sec',
		'settings' => 'wppt_contact_us_phonettl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_contact_us_phonetxt_opt_stng',
	array(
		'default' => 'Contact Us Phone',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_contact_us_phonetxt_opt_ctrl',
    array(
        'label' => 'Contact Us Phone Text ',
		'section'  => 'wppt_contact_us_info_opt_sec',
		'settings' => 'wppt_contact_us_phonetxt_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_contact_us_emailttl_opt_stng',
	array(
		'default' => 'Contact Us Email Title ',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_contact_us_emailttl_opt_ctrl',
    array(
        'label' => 'Contact Us Email Title ',
		'section'  => 'wppt_contact_us_info_opt_sec',
		'settings' => 'wppt_contact_us_emailttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_contact_us_emailtxt_opt_stng',
	array(
		'default' => 'Contact Us Email Text ',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_contact_us_emailtxt_opt_ctrl',
    array(
        'label' => 'Contact Us Email Text',
		'section'  => 'wppt_contact_us_info_opt_sec',
		'settings' => 'wppt_contact_us_emailtxt_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_contact_us_webttl_opt_stng',
	array(
		'default' => 'Contact Us Website Title ',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_contact_us_webttl_opt_ctrl',
    array(
        'label' => 'Contact Us Website Title ',
		'section'  => 'wppt_contact_us_info_opt_sec',
		'settings' => 'wppt_contact_us_webttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_contact_us_webtxt_opt_stng',
	array(
		'default' => 'Contact Us Website Text ',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_contact_us_webtxt_opt_ctrl',
    array(
        'label' => 'Contact Us Website Text',
		'section'  => 'wppt_contact_us_info_opt_sec',
		'settings' => 'wppt_contact_us_webtxt_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_section( 'wppt_contact_us_email_opt_sec' , array(
	  'title' => 'Contact Form Section',
	  'panel' => 'wppt_contact_us_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_contact_us_emailid_opt_stng',
	array(
		'default' => 'phubmrt@gmail.com',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_contact_us_emailid_opt_ctrl',
    array(
        'label' => 'Email Address ',
		'section'  => 'wppt_contact_us_email_opt_sec',
		'settings' => 'wppt_contact_us_emailid_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_contact_us_emailbtn_opt_stng',
	array(
		'default' => 'Send Now ',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_contact_us_emailbtn_opt_ctrl',
    array(
        'label' => 'Button label ',
		'section'  => 'wppt_contact_us_email_opt_sec',
		'settings' => 'wppt_contact_us_emailbtn_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_section( 'wppt_contact_us_bimage_opt_sec' , array(
	  'title' => 'Contact Us Background Image',
	  'panel' => 'wppt_contact_us_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_contact_us_bimage_opt_stng',
	array(
		'default' => 'http://localhost/wp/wp-content/uploads/2016/03/bg.jpg',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'wppt_contact_us_bimage_opt_ctrl',
        array(
            'label' => 'backgroud image',
            'section' => 'wppt_contact_us_bimage_opt_sec',
            'settings' => 'wppt_contact_us_bimage_opt_stng'
        )
    )
	);
	
	$wp_customize->add_section( 'wppt_gmap_opt_sec' , array(
	  'title' => 'Google Map Option',
	  
	) );
	
	$wp_customize->add_setting( 'wppt_gmaplat_opt_stng',
	array(
		
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_gmaplat_opt_ctrl',
    array(
        'label' => 'Enter Google Map Latitude ',
		'section'  => 'wppt_gmap_opt_sec',
		'settings' => 'wppt_gmaplat_opt_stng',
        'type' => 'text',
		
    )
	);

	$wp_customize->add_setting( 'wppt_gmaplong_opt_stng',
	array(
		
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_gmaplong_opt_ctrl',
    array(
        'label' => 'Enter Google Map Longitude ',
		'section'  => 'wppt_gmap_opt_sec',
		'settings' => 'wppt_gmaplong_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_section( 'wppt_latest_post_opt_sec' , array(
	  'title' => 'Latest News Option',
	  
	) );
	
	$wp_customize->add_setting( 'wppt_latest_post_ttl_opt_stng',
	array(
		'default'=>'Latest News',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_latest_post_ttl_opt_ctrl',
    array(
        'label' => 'Latest News Title ',
		'section'  => 'wppt_latest_post_opt_sec',
		'settings' => 'wppt_latest_post_ttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_latest_post_sttl_opt_stng',
	array(
		'default'=>'Lorem ipsum dummy content',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_latest_post_sttl_opt_ctrl',
    array(
        'label' => 'Latest News Sub Title ',
		'section'  => 'wppt_latest_post_opt_sec',
		'settings' => 'wppt_latest_post_sttl_opt_stng',
        'type' => 'textarea',
		
    )
	);
	$wp_customize->add_panel( 'wppt_your_team_opt_panel', array(
	  'title' => __( 'Your team Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	$wp_customize->add_section( 'wppt_your_team_content_opt_sec' , array(
	  'title' => 'Your Team Content Option',
	  'panel' => 'wppt_your_team_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_your_team_mttl_opt_stng',
	array(
		'default' => 'Your Team Title',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_your_team_mttl_opt_ctrl',
    array(
        'label' => 'Your Team Title ',
		'section'  => 'wppt_your_team_content_opt_sec',
		'settings' => 'wppt_your_team_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_your_team_sttl_opt_stng',
	array(
		'default' => 'Your Team Sub Title',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_your_team_sttl_opt_ctrl',
    array(
        'label' => 'Your Team Sub Title ',
		'section'  => 'wppt_your_team_content_opt_sec',
		'settings' => 'wppt_your_team_sttl_opt_stng',
        'type' => 'text',
		
    )
	);

	$wp_customize->add_panel( 'wppt_price_table_opt_panel', array(
	  'title' => __( 'Pricing Table Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	$wp_customize->add_section( 'wppt_price_table_content_opt_sec' , array(
	  'title' => 'Pricing Table Content Option',
	  'panel' => 'wppt_price_table_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_price_table_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_price_table_mttl_opt_ctrl',
    array(
        'label' => 'Pricing Table Title ',
		'section'  => 'wppt_price_table_content_opt_sec',
		'settings' => 'wppt_price_table_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_price_table_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_price_table_sttl_opt_ctrl',
    array(
        'label' => 'Pricing Table Sub Title ',
		'section'  => 'wppt_price_table_content_opt_sec',
		'settings' => 'wppt_price_table_sttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_panel( 'wppt_testimonial_opt_panel', array(
	  'title' => __( 'Testimonial Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	$wp_customize->add_section( 'wppt_testimonial_bimage_opt_sec' , array(
	  'title' => 'Background Image',
	  'panel' => 'wppt_testimonial_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_testimonial_bimage_opt_stng',
	array(
		'default' => 'http://localhost/wp/wp-content/uploads/2016/03/bg.jpg',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'wppt_testimonial_bimage_opt_ctrl',
        array(
            'label' => 'backgroud image',
            'section' => 'wppt_testimonial_bimage_opt_sec',
            'settings' => 'wppt_testimonial_bimage_opt_stng'
        )
    )
	);
	
	$wp_customize->add_section( 'wppt_testimonial_content_opt_sec' , array(
	  'title' => 'Testimonial Content Option',
	  'panel' => 'wppt_testimonial_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_testimonial_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_testimonial_mttl_opt_ctrl',
    array(
        'label' => 'Testimonial Title ',
		'section'  => 'wppt_testimonial_content_opt_sec',
		'settings' => 'wppt_testimonial_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_testimonial_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_testimonial_sttl_opt_ctrl',
    array(
        'label' => 'testimonial Sub Title ',
		'section'  => 'wppt_testimonial_content_opt_sec',
		'settings' => 'wppt_testimonial_sttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_panel( 'wppt_portfolio_opt_panel', array(
	  'title' => __( 'Portfolio Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	$wp_customize->add_section( 'wppt_portfolio_content_opt_sec' , array(
	  'title' => 'Portfolio Content Option',
	  'panel' => 'wppt_portfolio_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_portfolio_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_portfolio_mttl_opt_ctrl',
    array(
        'label' => 'Portfolio Title ',
		'section'  => 'wppt_portfolio_content_opt_sec',
		'settings' => 'wppt_portfolio_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_portfolio_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_portfolio_sttl_opt_ctrl',
    array(
        'label' => 'Portfolio Sub Title ',
		'section'  => 'wppt_portfolio_content_opt_sec',
		'settings' => 'wppt_portfolio_sttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_panel( 'wppt_services_opt_panel', array(
	  'title' => __( 'Your Services Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	$wp_customize->add_section( 'wppt_services_content_opt_sec' , array(
	  'title' => 'Your Services Content Option',
	  'panel' => 'wppt_services_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_services_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_services_mttl_opt_ctrl',
    array(
        'label' => 'Services Title ',
		'section'  => 'wppt_services_content_opt_sec',
		'settings' => 'wppt_services_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_services_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_services_sttl_opt_ctrl',
    array(
        'label' => 'Services Sub Title ',
		'section'  => 'wppt_services_content_opt_sec',
		'settings' => 'wppt_services_sttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_panel( 'wppt_counter_opt_panel', array(
	  'title' => __( 'Counter Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	$wp_customize->add_section( 'wppt_counter_bimage_opt_sec' , array(
	  'title' => 'Background Image',
	  'panel' => 'wppt_counter_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_counter_bimage_opt_stng',
	array(
		'default' => 'http://localhost/wp/wp-content/uploads/2016/03/bg.jpg',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'wppt_counter_bimage_opt_ctrl',
        array(
            'label' => 'backgroud image',
            'section' => 'wppt_counter_bimage_opt_sec',
            'settings' => 'wppt_counter_bimage_opt_stng'
        )
    )
	);
	$wp_customize->add_section( 'wppt_counter_client_opt_sec' , array(
	  'title' => 'Counter Client Content',
	  'panel' => 'wppt_counter_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_client_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_client_mttl_opt_ctrl',
    array(
        'label' => 'Client Title ',
		'section'  => 'wppt_counter_client_opt_sec',
		'settings' => 'wppt_client_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_client_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_client_sttl_opt_ctrl',
    array(
        'label' => 'Client Sub Title ',
		'section'  => 'wppt_counter_client_opt_sec',
		'settings' => 'wppt_client_sttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_section( 'wppt_counter_web_opt_sec' , array(
	  'title' => 'Counter Website Content',
	  'panel' => 'wppt_counter_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_web_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_web_mttl_opt_ctrl',
    array(
        'label' => 'Website Title ',
		'section'  => 'wppt_counter_web_opt_sec',
		'settings' => 'wppt_web_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_web_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_web_sttl_opt_ctrl',
    array(
        'label' => 'Website Sub Title ',
		'section'  => 'wppt_counter_web_opt_sec',
		'settings' => 'wppt_web_sttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_section( 'wppt_counter_award_opt_sec' , array(
	  'title' => 'Counter Awards Content',
	  'panel' => 'wppt_counter_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_adawd_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_award_mttl_opt_ctrl',
    array(
        'label' => 'Awards Title ',
		'section'  => 'wppt_counter_award_opt_sec',
		'settings' => 'wppt_adawd_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_award_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_award_sttl_opt_ctrl',
    array(
        'label' => 'Award Sub Title ',
		'section'  => 'wppt_counter_award_opt_sec',
		'settings' => 'wppt_award_sttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_section( 'wppt_counter_support_opt_sec' , array(
	  'title' => 'Counter Support Content',
	  'panel' => 'wppt_counter_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_support_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_support_mttl_opt_ctrl',
    array(
        'label' => 'Support Title ',
		'section'  => 'wppt_counter_support_opt_sec',
		'settings' => 'wppt_support_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_support_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_support_sttl_opt_ctrl',
    array(
        'label' => 'Support Sub Title ',
		'section'  => 'wppt_counter_support_opt_sec',
		'settings' => 'wppt_support_sttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_panel( 'wppt_about_opt_panel', array(
	  'title' => __( 'About Us Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	$wp_customize->add_section( 'wppt_about_content_opt_sec' , array(
	  'title' => 'About Us Content',
	  'panel' => 'wppt_about_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_abiout_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_mttl_opt_ctrl',
    array(
        'label' => 'About Title ',
		'section'  => 'wppt_about_content_opt_sec',
		'settings' => 'wppt_abiout_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_about_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_sttl_opt_ctrl',
    array(
        'label' => 'About Sub Title ',
		'section'  => 'wppt_about_content_opt_sec',
		'settings' => 'wppt_about_sttl_opt_stng',
        'type' => 'textarea',
		
    )
	);
	//
	$wp_customize->add_section( 'wppt_about_skill_opt_sec' , array(
	  'title' => 'Skills Section',
	  'panel' => 'wppt_about_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_abiout_sk1mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_sk1mttl_opt_ctrl',
    array(
        'label' => 'Skill 1 Title ',
		'section'  => 'wppt_about_skill_opt_sec',
		'settings' => 'wppt_abiout_sk1mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_abiout_sk1per_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_sk1per_opt_ctrl',
    array(
        'label' => 'Skill 1 Percentage ',
		'section'  => 'wppt_about_skill_opt_sec',
		'settings' => 'wppt_abiout_sk1per_opt_stng',
        'type' => 'text',
		
    )
	);
	//
	$wp_customize->add_setting( 'wppt_abiout_sk2mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_sk2mttl_opt_ctrl',
    array(
        'label' => 'Skill 2 Title ',
		'section'  => 'wppt_about_skill_opt_sec',
		'settings' => 'wppt_abiout_sk2mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_abiout_sk2per_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_sk2per_opt_ctrl',
    array(
        'label' => 'Skill 1 Percentage ',
		'section'  => 'wppt_about_skill_opt_sec',
		'settings' => 'wppt_abiout_sk2per_opt_stng',
        'type' => 'text',
		
    )
	);
	//
	$wp_customize->add_setting( 'wppt_abiout_sk3mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_sk3mttl_opt_ctrl',
    array(
        'label' => 'Skill 3 Title ',
		'section'  => 'wppt_about_skill_opt_sec',
		'settings' => 'wppt_abiout_sk3mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_abiout_sk3per_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_sk3per_opt_ctrl',
    array(
        'label' => 'Skill 3 Percentage ',
		'section'  => 'wppt_about_skill_opt_sec',
		'settings' => 'wppt_abiout_sk3per_opt_stng',
        'type' => 'text',
		
    )
	);
	//
	$wp_customize->add_setting( 'wppt_abiout_sk4mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_sk4mttl_opt_ctrl',
    array(
        'label' => 'Skill 4 Title ',
		'section'  => 'wppt_about_skill_opt_sec',
		'settings' => 'wppt_abiout_sk4mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_abiout_sk4per_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_sk4per_opt_ctrl',
    array(
        'label' => 'Skill 4 Percentage ',
		'section'  => 'wppt_about_skill_opt_sec',
		'settings' => 'wppt_abiout_sk4per_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_section( 'wppt_about_bimage_opt_sec' , array(
	  'title' => 'Background Image',
	  'panel' => 'wppt_about_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_about_bimage_opt_stng',
	array(
		'default' => 'http://localhost/wp/wp-content/uploads/2016/03/bg.jpg',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'wppt_about_bimage_opt_ctrl',
        array(
            'label' => 'backgroud image',
            'section' => 'wppt_about_bimage_opt_sec',
            'settings' => 'wppt_about_bimage_opt_stng'
        )
    )
	);
	
	
}/**
 * Registers a new setting for 'Link Color' in the WordPress Theme Customizer
 * that will allow users to change the color of their anchors across the
 * entire site
 *
 * Note that functions prefixed with 'tmx' stand for 'Tom McFarlin Example.'
 *
 * @param      object    $wp_customize    The WordPress Theme Customizer
 * @package    tmx
 */
function tmx_register_theme_customizer( $wp_customize ) {

	/**
   	 * Adds the setting with the unique id of 'tmx_link_color'. 
   	 *
   	 * Also defines the transport method to 'postMessage' so that 
   	 * we can use JavaScript to dynamically change the color without 
   	 * using the default method of 'refresh.'
   	 */
	$wp_customize->add_setting(
		'tmx_link_color',
		array(
			'default'     => '#000000',
			'transport'   => 'postMessage'
		)
  	);

	/**
   	 * Introduces a new color control to the Theme Customizer in the
	 * 'Colors' section. This is the actual control that will allow
	 * a user to pick a color.
	 */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'my_link_color',
			array(
			    'label'      => __( 'test color', 'tmx' ),
			    'section'    => 'colors',
			    'settings'   => 'tmx_link_color'
			)
		)
	);
	

} // end tcx_register_theme_customizer
add_action( 'customize_register', 'tmx_register_theme_customizer' );

/**
 * Registers the Theme Customizer Preview JavaScript with WordPress.
 *
 * @package    tmx
 */
function tmx_customizer_live_preview() {

	wp_enqueue_script(
		'tmx-theme-customizer',
		get_template_directory_uri() . '/js/theme-customizer.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);

} // end tcx_customizer_live_preview
add_action( 'customize_preview_init', 'tmx_customizer_live_preview' );
function wppt_sidebar_registration() {

	wp_enqueue_script( 'sidebar_customizer_script', get_template_directory_uri() . '/js/wppt-sidebar.js');
	
	
}
add_action( 'customize_controls_enqueue_scripts', 'wppt_sidebar_registration' );