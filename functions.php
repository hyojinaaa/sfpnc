<?php

function sopcResources() {
  wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );
  wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.0.1', 'all' );
  wp_enqueue_script( 'bootstrap-js' );
  wp_enqueue_style( 'bootstrap-css' );
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'sopcResources');

remove_filter('the_content', 'wpautop');

// Create an image uploader
function themeslug_theme_customizer( $wp_customize ) {
    // Fun code will go here
    $wp_customize->add_section( 'themeslug_logo_section' , array(
        'title'       => __( 'Logo', 'themeslug' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );
    $wp_customize->add_setting( 'themeslug_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
        'label'    => __( 'Logo', 'themeslug' ),
        'section'  => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
      )));
}
add_action( 'customize_register', 'themeslug_theme_customizer' );

//Remove margin top 32px
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

//Add customer header
$args = array(
	'flex-width'    => true,
	'width'         => '100%',
	'flex-height'    => true,
	'height'        => 'auto',
	'default-image' => get_template_directory_uri() . '/images/home-background.jpg',
);
add_theme_support( 'custom-header', $args );

// Make my theme suppor widget
if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Widgetized Area',
		'id'   => 'widgetized-area',
		'description'   => 'This is a widgetized area.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}
