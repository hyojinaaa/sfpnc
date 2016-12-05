<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
wp_enqueue_style('mdf_layout1', get_template_directory_uri() . '/mdf_templates/woocommerce/layout1/css/bootstrap.min.css');
wp_enqueue_style('mdf_layout1-1', get_template_directory_uri() . '/mdf_templates/woocommerce/layout1/css/styles.css');
global $mdf_loop;
MDTF_SORT_PANEL::mdtf_catalog_ordering();
?>

<div class="row previews">
    <?php
    while ($mdf_loop->have_posts()) : $mdf_loop->the_post();
        ?>
        <div class="col-lg-6">
            <div class="thumbnail">
                <a href="<?php the_permalink() ?>" target="_blank" class="thumbnail alignleft"><img src="<?php echo MDTF_HELPER::get_post_featured_image($post->ID, '280x220') ?>" alt="<?php the_title() ?>" /></a>

                <div class="caption" style="max-height: 650px;">
                    <h3><a href="<?php the_permalink() ?>" target="_blank"><?php the_title() ?></a></h3>

     

                        <?php echo do_shortcode('[mdf_post_features_panel]'); ?>


                 
                    <div style="height: 60px;">
                        <div class="col-lg-6"><a class="btn btn-default" target="_blank" href="<?php the_permalink() ?>">View more</a></div>
                        <div class="col-lg-6"><?php
                            $product = new WC_Product(get_the_ID());
                            echo $product->get_price_html();
                            ?></div>
                    </div>
                    <div style="clear: both;"></div>
                     <p style="text-align: center; overflow: hidden;">
                        <?php echo do_shortcode('[inpost_fancy thumb_width="50" thumb_height="50" post_id="' . $post->ID . '" thumb_margin_left="5" thumb_margin_bottom="5" thumb_border_radius="200" thumb_shadow="0 1px 4px rgba(0, 0, 0, 0.2)" id="" random="0" group="0" border="" show_in_popup="0" album_cover="" album_cover_width="200" album_cover_height="200" popup_width="800" popup_max_height="600" popup_title="Gallery" type="fancy" sc_id="sc1413390928195"]') ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endwhile; // end of the loop. ?>
</div>

