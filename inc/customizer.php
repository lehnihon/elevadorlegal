<?php
function site_customize_register( $wp_customize ) {


  // SECTION HOME
  $wp_customize->add_section( 'home' , array(
    'title' => __( 'Home', 'imaginara' ),
    'description' => sprintf(__('Home', 'imaginara')),
    'priority' => 30
  ) );

  $wp_customize->add_setting('gallery_home',array(
    'default' => _x('','imaginara'),
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control( 'gallery_home', array(
    'label' => __( 'Galeria Shortcode', 'imaginara' ),
    'type' => 'text',
    'section' => 'home',
    'priority' => 15
  ) );

  $wp_customize->add_setting('contact_home',array(
    'default' => _x('','imaginara'),
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control( 'contact_home', array(
    'label' => __( 'Formulário Shortcode', 'imaginara' ),
    'type' => 'text',
    'section' => 'home',
    'priority' => 20
  ) );

  $wp_customize->add_setting('news_home',array(
    'default' => _x('','imaginara'),
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control( 'news_home', array(
    'label' => __( 'Newsletter Shortcode', 'imaginara' ),
    'type' => 'text',
    'section' => 'home',
    'priority' => 25
  ) );

  $wp_customize->add_setting('facebook_home',array(
    'default' => _x('','imaginara'),
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control( 'facebook_home', array(
    'label' => __( 'Facebook', 'imaginara' ),
    'type' => 'text',
    'section' => 'home',
    'priority' => 30
  ) );

  $wp_customize->add_setting('instagram_home',array(
    'default' => _x('','imaginara'),
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control( 'instagram_home', array(
    'label' => __( 'Instagram', 'imaginara' ),
    'type' => 'text',
    'section' => 'home',
    'priority' => 35
  ) );

}
add_action( 'customize_register', 'site_customize_register' );