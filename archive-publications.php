<?php

get_header();
?>


<main class="seminars">
  <div class="results" id="publications-result">
<?php  $loop = new WP_Query( array( 'post_type' => 'publications', 'posts_per_page' => 10 ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post();
 //if (have_posts()) :
//	while (have_posts()) : the_post(); ?>

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


		<P class="post-info">Main Speaker: <?php the_field('main_speaker_name'); ?> | Posted in <?php

			$categories = get_the_category();
			$separator = ", ";
			$output = '';

			if ($categories) {

				foreach ($categories as $category) {

					$output .= '<span>' . $category->cat_name . '</span>'  . $separator;

				}

				echo trim($output, $separator);

			}

			?></p>

		<a href="<?php the_permalink(); ?>"><p class="post-excerpt"><?php echo get_the_excerpt(); ?></p></a>
  </div>
</article>
  <?php endwhile; //endif; ?>


  </div>
  <div class="widget">
  <?php echo do_shortcode( ' [ULWPQSF id=100 formtitle="0" divclass=my_own_class] ' );
  //get_sidebar(); ?>
  </div>

</main>

<?php
get_footer();

?>
