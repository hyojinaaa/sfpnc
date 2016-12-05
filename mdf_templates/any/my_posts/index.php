<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
wp_enqueue_style('mdf_my_posts', get_template_directory_uri() . '/mdf_templates/any/my_posts/css/bootstrap.min.css');
global $mdf_loop;
?>
<div class="col-md-12 item_n">
    <ul>
        <?php
        while ($mdf_loop->have_posts()) : $mdf_loop->the_post();
            $post_thumbnail_id = get_post_thumbnail_id($post->ID);
            $image = wp_get_attachment_image_src($post_thumbnail_id, array(150, 150), false);
            ?>
            <li>
                <div class="item_area"><img style="width: 150px; height:150px;" src="<?php echo $image[0] ?>" alt="<?php the_title() ?>" />
                    <div class="item_hover"><a href="<?php the_permalink() ?>" class="zoom" target="_blank"></a><?php the_title() ?></div>
                </div>
            </li>
        <?php endwhile; // end of the loop.  ?>
    </ul>
</div>
