<?php

get_header(); ?>

<main class="home">

<div class="hero" style="background-image:url(<?php header_image(); ?>)" height="auto" width="100%">

	<div class="hero-text">

	 <h1>Upcoming Seminars</h1>
	 <div class="main-search">
			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
			    <div>
			      <input type="text" value="Search" name="s" id="s" placeholder="<?php the_search_query(); ?>" />
			      <i class="fa fa-search" aria-hidden="true"></i>
			    </div>
			</form>
		 </div>
	</div>

	<?php
	//Set server timezone to central
		date_default_timezone_set('Pacific/Auckland');
		//Today's date
		$date_1 = date('Ymd', strtotime("now"));
		//Future date - the arg will look between today's date and this future date to see if the post fall within the 2 dates.
		$date_2 = date('Ymd', strtotime("+12 months"));

		//arg to determine if the post is an upcoming event.
	$upcoming_args = array(
		'post_type'		=> 'seminars',
		'posts_per_page'	=> -1,
		'meta_key' => 'date',
		'meta_compare' => 'BETWEEN',
		'meta_type' => 'numeric',
		'meta_value' => array($date_1, $date_2),
		'orderby' => 'meta_value_num',
		'order' => 'ASC'
	);

	// the upcoming events query
	$upcoming_query = new WP_Query( $upcoming_args );
	//var_dump($upcoming_query);
?>
<?php if ( $upcoming_query->have_posts() ) : ?>
  <!-- the loop -->
  <?php while ( $upcoming_query->have_posts() ) : $upcoming_query->the_post(); ?>
<h2><?php the_title(); ?>
  	<!--Your Content-->

  <?php endwhile; ?>
  <!-- end of the loop -->

  <?php wp_reset_postdata(); ?>

<?php else:  ?>
  <p><?php _e( 'There are currently no upcoming events, please check back soon.' ); ?></p>
<?php endif; ?>

</div>

</main>

<?php get_footer();

?>
