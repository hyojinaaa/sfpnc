<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
global $mdf_loop;
MDTF_SORT_PANEL::mdtf_catalog_ordering();
echo do_shortcode( ' [mdf_results_by_ajax shortcode="mdf_custom template=seminars post_type=seminars"] ' );
?>

<?php

get_header();
?>


<main class="seminars">
  <div class="results">
    <h2>Search Results: </h2>
    <div class="search-result">
      <h2>This is SEMINAR RESULTS page</h2>

    <?php
    while ($mdf_loop->have_posts()) : $mdf_loop->the_post();
        ?>
        <article class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">

    <!-- post-thumbnail -->
    <div class="post-thumbnail">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
    </div><!-- /post-thumbnail -->



    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <p class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> </p>




      <?php  the_content();
    endwhile;

    else :
      echo '<p>No content found</p>';

    endif;
    ?>

  </article>


    </div>
  </div>

    <div class="widget">
    <?php echo do_shortcode( ' [mdf_search_form id="63"] ' );  ?>
    </div>

  </main>

  <?php
  get_footer();

  ?>
