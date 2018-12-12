<?php
if (! function_exists('redolive_scripts') ) :
	function redolive_scripts() {

		// Uncomment for Google Fonts.
        // wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Montserrat:300,400,700', array(), false, 'all' );
        
		// Enqueue FontAwesome from CDN. Uncomment the line below if you need FontAwesome.
        //wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/5016a31c8c.js', array(), '4.7.0', true );
        
        // Main WP stylesheet
		wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), '1.0');
		
		// Red Olive
        wp_enqueue_style( 'redolive_styles', get_template_directory_uri() . '/dist/redolive.css', array(), '1.0');
        wp_enqueue_script( 'redolive_scripts', get_template_directory_uri() . '/dist/redolive.js', array(), '1.0');
		
		// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );
		
		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );
		
		// Deregister the jquery-migrate version bundled with WordPress.
		wp_deregister_script( 'jquery-migrate' );
		
		// CDN hosted jQuery migrate for compatibility with jQuery 3.x
		// wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', false );

		// Enqueue jQuery migrate. Uncomment the line below to enable.
		// wp_enqueue_script( 'jquery-migrate' );


		// Add the comment-reply library on pages where it is necessary
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'redolive_scripts' );
endif;