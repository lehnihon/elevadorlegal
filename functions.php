<?php
/**
 * Jorgewp functions and definitions
 *
 * @package site
 */

if ( ! function_exists( 'site_setup' ) ) :

function site_setup() {

  add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

  register_sidebar( array(
    'name'          => __( 'Barra Lateral Principal', 'imaginara' ),
    'id'            => 'sidebar-1',
    'before_widget' => '<div class="row-margin">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  add_image_size('case-thumb',300,200,true);
	add_image_size('home-thumb',620,300,true);
  add_image_size('single-post',1140,450,true);
}
endif; // site_setup
add_action( 'after_setup_theme', 'site_setup' );


/**
 * Enqueue scripts and styles.
 */
function site_scripts() {
  wp_enqueue_style( 'site-style-animate', get_template_directory_uri() . '/assets/css/animate.css' );
  wp_enqueue_style( 'site-style-owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
  wp_enqueue_style( 'site-style-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
  wp_enqueue_style( 'site-style-font', 'https://fonts.googleapis.com/css?family=Titillium+Web:100,200,300,400,500,600,700,800');
  wp_enqueue_style( 'site-style', get_stylesheet_uri() );

	wp_enqueue_script( 'site-script-jquery', get_template_directory_uri() ."/assets/js/jquery-3.3.1.min.js");
	wp_enqueue_script( 'site-script-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array(),false,true);
  wp_enqueue_script( 'site-script-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array(),false,true);
  wp_enqueue_script( 'site-script-wow', get_template_directory_uri() . '/assets/js/wow.min.js',array(),false,true);
	wp_enqueue_script( 'site-script', get_template_directory_uri() . '/assets/js/script.js',array(),false,true);
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );


function register_post_type_cases(){
  $singular = 'Case Post';
  $plural = 'Cases Posts';
  $labels = array(
    'name' => $plural,
    'singular_name' => $singular,
    'add_new_item' => 'Adicionar novo '.$singular,
    );
  $args = array(
    'labels' => $labels,
    'public' => true,
        'supports' => array('title', 'editor','thumbnail'),
        'menu_position' => 5
    );

  register_post_type('cases',$args);
}
add_action( 'init','register_post_type_cases');



require get_template_directory() . '/inc/util.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
