<?php

function indhira_maintenance() {
	if( !is_user_logged_in() && !is_page( '4' ) )
		wp_redirect( get_the_permalink( '4' ) );
}

add_action( 'template_redirect', 'indhira_maintenance' );


show_admin_bar( false );

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1110;

// Register Theme Features
function indhira_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'gallery', 'image', 'video' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails');

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

  // Add support for two custom navigation menus.
  register_nav_menus( array(
      'primary'   => __( 'Primary Menu', 'indhira' ),
      'footer-links' => __('Footer Links', 'indhira' )
  ) );

	// Register Sidebars
	function indhira_sidebars() {

		$args = array(
			'id'            => 'sidebbar',
			'class'         => 'sidebar',
			'name'          => __( 'Sidebar', 'indhira' ),
		);
		register_sidebar( $args );

	}
	add_action( 'widgets_init', 'indhira_sidebars' );
}
add_action( 'after_setup_theme', 'indhira_theme_features' );


// Register Custom Navigation Walker
require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';






function add_theme_scripts() {
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css', array(), 'v5.0.12', 'all' );
  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), '4.1.1', 'all' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,900|Open+Sans:300,400,700|Courgette|Playfair+Display:400,700|PT+Serif:400,700', array(), null, 'all' );

  wp_enqueue_style( 'indhira', get_template_directory_uri() . '/assets/css/indhira.css', array('bootstrap'), uniqid(), 'all');

  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ), '1.14.3', true );
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'popper' ), '4.1.1', true );
  // wp_enqueue_script( 'jquery.easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array( 'jquery' ), '1.4.1', true );

  // wp_enqueue_script( 'jquery.countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array ( 'jquery' ), '2.2.0', true);
  wp_enqueue_script( 'indhira', get_template_directory_uri() . '/assets/js/indhira.js', array ( 'jquery' ), uniqid(), true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// filter the Gravity Forms button type
add_filter( 'gform_submit_button_1', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='btn btn-primary gf-btn' id='gform_submit_button_{$form['id']}'><span>Send Message</span></button>";
}
