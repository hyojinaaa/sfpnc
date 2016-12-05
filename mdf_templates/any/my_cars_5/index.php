<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
wp_enqueue_style('my_cars_5', get_template_directory_uri() . '/mdf_templates/any/my_cars_5/css/styles.css');
global $mdf_loop;
MDTF_SORT_PANEL::mdtf_catalog_ordering();
?>

<table class="container">
    <thead>
        <tr>
            <th><h1>Name</h1></th>
<th><h1>Price</h1></th>
<th><h1>Year</h1></th>
<th><h1>Milleage</h1></th>
</tr>
</thead>
<tbody>
    <?php
    while ($mdf_loop->have_posts()) : $mdf_loop->the_post();
        ?>
        <tr>
            <td><a href="<?php the_permalink() ?>" target="_blank"><?php the_title() ?></a></td>
            <td>$<?php echo number_format(get_post_meta($post->ID, 'medafi_price', TRUE)) ?></td>
            <td><?php echo get_post_meta($post->ID, 'medafi_year', TRUE) ?> year</td>
            <td><?php echo number_format(get_post_meta($post->ID, 'medafi_mileage', TRUE), 0, " ", " ") ?> miles</td>
        </tr>
    <?php endwhile; // end of the loop.    ?>
</tbody>
</table>