<?php

function sopcResources() {
  wp_enqueue_script('jquery.min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js');
  //wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );
  //wp_enqueue_script( 'bootstrap-js');
  wp_enqueue_script( 'slider', get_template_directory_uri() . '/slider.js');

  //wp_enqueue_style( 'bootstrap-css' );
  //wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.0.1', 'all' );
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
// function remove_admin_login_header() {
//     remove_action('wp_head', '_admin_bar_bump_cb');
// }
// add_action('get_header', 'remove_admin_login_header');

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
function ourWidgetsInit() {

	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));


}

add_action('widgets_init', 'ourWidgetsInit');

// Add featured image
function sfpncBlog_setup() {
	add_theme_support('post-thumbnails');
	add_image_size('thumbnail', 350, 700,  array('left', 'top'));
	add_image_size('poster', 700, 1400, true);
}

add_action('after_setup_theme', 'sfpncBlog_setup');

// Search result
add_filter('uwpqsf_result_tempt', 'customize_output', '', 4);
function customize_output($results , $arg, $id, $getdata ){
	 // The Query
            $apiclass = new uwpqsfprocess();
             $query = new WP_Query( $arg );
		ob_start();	$result = '';
			// The Loop

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();global $post; ?>

  <article>
    <?php  if ( has_post_thumbnail() ) { ?>
          <div class="post-thumbnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
          </div>
  <?php } ?>

<div <?php if ( has_post_thumbnail() ) { ?>class="post-content"<?php } ?>>

  <?php  $trimtitle = get_the_title();

          $shorttitle = wp_trim_words( $trimtitle, $num_words = 20, $more = '… ' ); ?>

            <a href="<?php the_permalink(); ?>" ><h2 class="post-title"><?php echo  $shorttitle ?></h2></a>


		<P class="post-info">By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in <?php

			$categories = get_the_category();
			$separator = ", ";
			$output = '';

			if ($categories) {

				foreach ($categories as $category) {

					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;

				}

				echo trim($output, $separator);

			}

			?></p>

		<a href="<?php the_permalink(); ?>"><p class="post-excerpt"><?php echo get_the_excerpt(); ?></p></a>
  </div>
</article>

	<?php		}
                        echo  $apiclass->ajax_pagination($arg['paged'],$query->max_num_pages, 4, $id, $getdata);
		 } else {
					 echo  'no post found';
				}
				/* Restore original Post Data */
				wp_reset_postdata();

		$results = ob_get_clean();
			return $results;
}
