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

    <article class="result-sample">
      <header class="entry-header">
        <img src="http://placehold.it/300x400" alt="">
        <h1 class="entry-title">Search Seminars</h1>
      </header>
      <div class="entry-summary">
        Search seminars by the filter search on the sidebar.
      </div>
    </article>

      <div id="result-container">


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
