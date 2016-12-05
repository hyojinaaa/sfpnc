<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php

wp_enqueue_style('my_essentials', get_template_directory_uri() . '/mdf_templates/any/my_essentials/css/styles.css');
global $mdf_loop;
MDTF_SORT_PANEL::mdtf_catalog_ordering();
if (class_exists('Essential_Grid'))
{
    $_REQUEST['mdf_is_essential'] = true;
    global $essential;
    $ess_grid_handle = Essential_Grid::get_alias_by_id($essential);
    echo do_shortcode('[ess_grid alias="' . $ess_grid_handle . '"][/ess_grid]');
}
