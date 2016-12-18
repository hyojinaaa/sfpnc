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
</div>

<div class="slideshow">
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
	<section>
	<ul class="carousel">
		<?php $number = 1; ?>
  <?php while ( $upcoming_query->have_posts() ) : $upcoming_query->the_post(); ?>
		<!-- <i class="fa fa-chevron-left fa-2x" aria-hidden="true" id="prev"></i> -->
  	<!--Your Content-->
			<?php	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	    <li class="items main-pos <?php if($number == 3){?> left-pos<?php } elseif( $number == 2 ) {?> right-pos<?php } ?>" id="<?php echo $number; ?>" style="background-image: url(<?php echo $url ?>)">



					<div class="poster-hover-con">
						<div class="post-hover">
							<?php  $trimtitle = get_the_title();

											$shorttitle = wp_trim_words( $trimtitle, $num_words = 10, $more = '… ' ); ?>

												<a href="<?php the_permalink(); ?>" ><h2><?php echo  $shorttitle ?></h2></a>


							<?php // get raw date
								$date_and_time = get_field('date_and_time');
										// make date object
								$date_and_time = new DateTime($date_and_time); ?>
							<p><?php if(isset($date_and_time)) { echo $date_and_time->format('d M G:ia'); } else { the_field("date"); } ?></p>
							<p><?php the_field('venue'); ?></p>
							<p class="view-more" ><a href="<?php the_permalink(); ?>">View More</a></p>
						</div>
					</div>

			</li>
			<?php $number++; ?>
			<!-- <i class="fa fa-chevron-right fa-2x" aria-hidden="true" id="next"></i> -->
  <?php endwhile; ?>
  <!-- end of the loop -->
</ul>
<span>


</span>
</section>
  <?php wp_reset_postdata(); ?>

<?php else:  ?>
  <p><?php _e( 'There are currently no upcoming seminars, please check back soon.' ); ?></p>
<?php endif; ?>

</div>

</main>
<div class="minus-margin">
</div>
<?php get_footer();

?>

<script type="text/javascript">
//slideshow style interval
//var autoSwap = setInterval( swap,3500);

//pause slideshow and reinstantiate on mouseout
// $('ul, span').hover(
// function () {
// 	clearInterval(autoSwap);
// },
// function () {
//  autoSwap = setInterval( swap,3500);
// });

//global variables
var items = [];
var startItem = 1;
var position = 0;
var itemCount = $('.carousel li.items').length;
var leftpos = itemCount;
var resetCount = itemCount;

//unused: gather text inside items class
$('li.items').each(function(index) {
	items[index] = $(this).text();
});

//swap images function
function swap(action) {
var direction = action;

//moving carousel backwards
if(direction == 'counter-clockwise') {
	var leftitem = $('.left-pos').attr('id') - 1;
	if(leftitem == 0) {
		leftitem = itemCount;
	}

	$('.right-pos').removeClass('right-pos').addClass('back-pos');
	$('.main-pos').removeClass('main-pos').addClass('right-pos');
	$('.left-pos').removeClass('left-pos').addClass('main-pos');
	$('#'+leftitem+'').removeClass('back-pos').addClass('left-pos');

	startItem--;
	if(startItem < 1) {
		startItem = itemCount;
	}
}

//moving carousel forward
if(direction == 'clockwise' || direction == '' || direction == null ) {
	function pos(positionvalue) {
		if(positionvalue != 'leftposition') {
			//increment image list id
			position++;

			//if final result is greater than image count, reset position.
			if((startItem+position) > resetCount) {
				position = 1-startItem;
			}
		}

		//setting the left positioned item
		if(positionvalue == 'leftposition') {
			//left positioned image should always be one left than main positioned image.
			position = startItem - 1;

			//reset last image in list to left position if first image is in main position
			if(position < 1) {
				position = itemCount;
			}
		}

		return position;
	}

 $('#'+ startItem +'').removeClass('main-pos').addClass('left-pos');
 $('#'+ (startItem+pos()) +'').removeClass('right-pos').addClass('main-pos');
 $('#'+ (startItem+pos()) +'').removeClass('back-pos').addClass('right-pos');
 $('#'+ pos('leftposition') +'').removeClass('left-pos').addClass('back-pos');

	startItem++;
	position=0;
	if(startItem > itemCount) {
		startItem = 1;
	}
}
}

//next button click function
$('#next').click(function() {
swap('clockwise');
});

//prev button click function
$('#prev').click(function() {
swap('counter-clockwise');
});

//if any visible items are clicked
$('li').click(function() {
if($(this).attr('class') == 'items left-pos') {
	 swap('counter-clockwise');
}
else {
	swap('clockwise');
}
});
</script>
