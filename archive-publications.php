<?php

get_header();
?>


<main class="seminars">
  <div class="results">
    <h2>Search Results: </h2>
    <div class="search-result">
      <h2>This is archive seminar page</h2>
      <div id="mdf_output">
        <?php if (have_posts()) :
      while (have_posts()) : the_post(); ?>

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

<?php //if(!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
//if(class_exists('MetaDataFilterPage')) {
    //wp_enqueue_style('meta_data_filter_front', MetaDataFilterCore::get_application_uri() . 'css/front.css');
    //wp_enqueue_script('meta_data_filter_widget', MetaDataFilterCore::get_application_uri() . 'js/front.js', array('jquery'));
//}

?>

<!-- - - - - - - - - - - - Entry - - - - - - - - - - - - - - -->

<!-- - - - - - - - - - - - end Entry - - - - - - - - - - - - - - -->

  </div>
  <?php get_sidebar(); ?>

</main>

<?php
get_footer();

?>
