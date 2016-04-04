//ADD IMAGE
		jQuery(document).ready(function($) {
		
		$(document).on('click','.flaskcls',function( event){

			$('.wppt_services_icon_img').val('fa fa-flask');
		
		});
		$(document).on('click','.umbrellacls',function( event){

			$('.wppt_services_icon_img').val('fa fa-umbrella');
		
		});
		$(document).on('click','.cloudcls',function( event){

			$('.wppt_services_icon_img').val('fa fa-cloud');
		
		});
		$(document).on('click','.coffeecls',function( event){

			$('.wppt_services_icon_img').val('fa fa-coffee');
		
		});
		
		$(document).on('click','.giftcls',function( event){

			$('.wppt_services_icon_img').val('fa fa-gift');
		
		});
		$(document).on('click','.bitbucketcls',function( event){

			$('.wppt_services_icon_img').val('fa fa-bitbucket');
		
		});
		$(document).on('click','.wppt_testi_img_button',function( event){
		
		    event.preventDefault();

            // Create Media Frame.
            file_frame = wp.media.frames.file_frame = wp.media({
                title: $(this).data('uploader_title'),
                button: {
                    text: $(this).data('uploader_button_text'),
                },
                multiple: false // set true for multiple select
            });

            // Selected image callback.
            file_frame.on('select', function() {
                // single image selected
                attachment = file_frame.state().get('selection').first().toJSON();
				
                // Actions
				$('.wppt_testi_custom_media_url').val(attachment.url);
				$('.wppt_testi_img').attr('src', attachment.url);
				
            });

            // Open Modal
            file_frame.open();
		});
		$(document).on('click','.wppt_pp_img_button',function( event){
		
		    event.preventDefault();

            // Create Media Frame.
            file_frame = wp.media.frames.file_frame = wp.media({
                title: $(this).data('uploader_title'),
                button: {
                    text: $(this).data('uploader_button_text'),
                },
                multiple: false // set true for multiple select
            });

            // Selected image callback.
            file_frame.on('select', function() {
                // single image selected
                attachment = file_frame.state().get('selection').first().toJSON();
				
                // Actions
				$('.wppt_pp_custom_media_url').val(attachment.url);
				$('.wppt_pp_img').attr('src', attachment.url);
				
            });

            // Open Modal
            file_frame.open();
		});
		$(document).on('click','.our_focus_img_button',function( event){
		
		    event.preventDefault();

            // Create Media Frame.
            file_frame = wp.media.frames.file_frame = wp.media({
                title: $(this).data('uploader_title'),
                button: {
                    text: $(this).data('uploader_button_text'),
                },
                multiple: false // set true for multiple select
            });

            // Selected image callback.
            file_frame.on('select', function() {
                // single image selected
                attachment = file_frame.state().get('selection').first().toJSON();
				
                // Actions
				$('.custom_media_url_our_focus').val(attachment.url);
				$('.our_focus_img').attr('src', attachment.url);
				
            });

            // Open Modal
            file_frame.open();
		});
		
		$(document).on('click','.wppt_testi_img_button',function( event){
			
		    event.preventDefault();

            // Create Media Frame.
            file_frame = wp.media.frames.file_frame = wp.media({
                title: $(this).data('uploader_title'),
                button: {
                    text: $(this).data('uploader_button_text'),
                },
                multiple: false // set true for multiple select
            });

            // Selected image callback.
            file_frame.on('select', function() {
                // single image selected
                attachment = file_frame.state().get('selection').first().toJSON();
				
                // Actions
				$('.wppt_testi_custom_media_url').val(attachment.url);
				$('.wppt_testimonial_img').attr('src', attachment.url);
				
            });

            // Open Modal
            file_frame.open();
		});
		
		$(document).on('click','.client_img_button',function( event){
			
		    event.preventDefault();

            // Create Media Frame.
            file_frame = wp.media.frames.file_frame = wp.media({
                title: $(this).data('uploader_title'),
                button: {
                    text: $(this).data('uploader_button_text'),
                },
                multiple: false // set true for multiple select
            });

            // Selected image callback.
            file_frame.on('select', function() {
                // single image selected
                attachment = file_frame.state().get('selection').first().toJSON();
				
                // Actions
				$('.custom_media_url_client').val(attachment.url);
				$('.testimonial_img').attr('src', attachment.url);
				
            });

            // Open Modal
            file_frame.open();
		});
		
		$(document).on('click','.wppt_team_mem_img_button',function( event){
		
		    event.preventDefault();

            // Create Media Frame.
            file_frame = wp.media.frames.file_frame = wp.media({
                title: $(this).data('uploader_title'),
                button: {
                    text: $(this).data('uploader_button_text'),
                },
                multiple: false // set true for multiple select
            });

            // Selected image callback.
            file_frame.on('select', function() {
                // single image selected
                attachment = file_frame.state().get('selection').first().toJSON();
				
                // Actions
				$('.wppt_team_mem_custom_media_url').val(attachment.url);
				$('.wppt_team_mem_img').attr('src', attachment.url);
				
				
				
                
            });

            // Open Modal
            file_frame.open();
		});
		});