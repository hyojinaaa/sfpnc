<?php

get_header();
?>
<?php //echo do_shortcode( ' [mdf_results_by_ajax shortcode="mdf_custom template=seminars post_type=seminars"] ' );
if (!defined('ABSPATH')) die('No direct access allowed');
global $mdf_loop;
MDTF_SORT_PANEL::mdtf_catalog_ordering();
 //echo do_shortcode('[mdf_custom template=any/seminars post_type=seminars]');
 ?>

<main class="seminars">
  <div class="results">
    <h2>Search Results: </h2>
    <div class="search-result">
      <h2>This is archive seminar page</h2>
      <div id="result-container">


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

  <div class="widget">
  <?php echo do_shortcode( ' [ULWPQSF id=69] ' );
  //get_sidebar(); ?>
  </div>
</main>

<?php
get_footer();

?>
