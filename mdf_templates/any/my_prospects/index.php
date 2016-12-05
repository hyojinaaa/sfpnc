<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php

wp_enqueue_style('my_prospects', get_template_directory_uri() . '/mdf_templates/any/my_prospects/css/styles.css');
global $mdf_loop;
MDTF_SORT_PANEL::mdtf_catalog_ordering();
//echo do_shortcode('[mdf_gmap height="300" width="100" zoom="11" maptype="TERRAIN" metakey="medafi_map"]');
//global $mdf_args;
//echo '<pre>';
//print_r($mdf_args);
//echo '</pre>';
?>
<?php

while ($mdf_loop->have_posts()) : $mdf_loop->the_post();
    ?>
    <?php echo do_shortcode('[mdf_post_features_panel]'); ?>
    <?php get_template_part('content', ''); ?>
<?php endwhile; // end of the loop.     ?>

