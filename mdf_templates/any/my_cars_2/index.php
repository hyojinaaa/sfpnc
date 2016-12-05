<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
wp_enqueue_style('my_cars_2', get_template_directory_uri() . '/mdf_templates/any/my_cars_2/css/styles.css');
global $mdf_loop;
MDTF_SORT_PANEL::mdtf_catalog_ordering();
?>
<table>
    <thead>
        <tr>
            <th><?php _e('Title', 'meta-data-filter') ?></th>
            <th><?php _e('Description', 'meta-data-filter') ?></th>
            <th><?php _e('View', 'meta-data-filter') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($mdf_loop->have_posts()) : $mdf_loop->the_post();
            ?>
            <tr>
                <td style="width: 35%;">
                    <?php
                    if (has_post_thumbnail($post->ID)) {
                        echo '<a href="' . get_permalink($post->ID) . '" title="' . esc_attr($post->post_title) . '">';
                        echo get_the_post_thumbnail($post->ID, 'thumbnail');
                        echo '</a>';
                    }
                    ?><br />
                    <strong><a href="<?php the_permalink() ?>" target="_blank"><?php the_title() ?></a></strong><br />
                </td>
                <td style="width: 60%;">

                    <?php echo do_shortcode('[inpost_fancy thumb_width="50" thumb_height="50" post_id="' . $post->ID . '" thumb_margin_left="5" thumb_margin_bottom="5" thumb_border_radius="200" thumb_shadow="0 1px 4px rgba(0, 0, 0, 0.2)" id="" random="0" group="0" border="" show_in_popup="0" album_cover="" album_cover_width="200" album_cover_height="200" popup_width="800" popup_max_height="600" popup_title="Gallery" type="fancy" sc_id="sc1413390928195"]') ?>

                    <?php echo do_shortcode('[mdf_post_features_panel]'); ?>

                </td>
                <td style="width: 5%;"><a href="<?php the_permalink() ?>" target="_blank"><?php _e('View', 'meta-data-filter') ?></a></td>
            </tr>
        <?php endwhile; // end of the loop.    ?>
    </tbody>
</table>