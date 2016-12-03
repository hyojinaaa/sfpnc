<?php

get_header();
?>


<main class="seminars">
  <div class="results">
    <h2>Search Results: </h2>
    <div class="search-result">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

<?php if(!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
if(class_exists('MetaDataFilterPage')) {
    wp_enqueue_style('meta_data_filter_front', MetaDataFilterCore::get_application_uri() . 'css/front.css');
    wp_enqueue_script('meta_data_filter_widget', MetaDataFilterCore::get_application_uri() . 'js/front.js', array('jquery'));
}

?>

<!-- - - - - - - - - - - - Entry - - - - - - - - - - - - - - -->
<div id="mdf_output">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php
            the_content();
            wp_reset_query();
        endwhile;
    endif;
    ?>
</div>
<!-- - - - - - - - - - - - end Entry - - - - - - - - - - - - - - -->

  </div>
  <?php get_sidebar(); ?>

</main>

<?php
get_footer();

?>
