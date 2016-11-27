<?php

get_header();
?>


<main class="seminars">
  <div class="results">
    <h2>Search Results: </h2>
    <div class="search-result">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div>
      <?php echo do_shortcode( '[searchandfilter fields="search,category,post_tag" types=",,radio" headings=",Categories,Tags"]' ); ?>
    </div>

    <?php do_action('show_beautiful_filters'); ?>
    <?php if( have_posts() ) :
      while (have_posts()) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>

      <?php endwhile;
    else:
      echo '<p>No content found</p>';

    endif; ?>


    <?php do_action('show_beautiful_filters_info'); ?>
  </div>
  <div class="filter-search">

  </div>
</main>

<?php
get_footer();

?>
