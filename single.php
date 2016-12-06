<?php
get_header(); ?>

<?php if( have_posts() ) :
 while (have_posts()) : the_post();
?>
<main class="single">
<article class="blog-single">
 <!-- post-thumbnail -->

 <div class="single-text">
   <h2 class="single-title"><?php the_title(); ?></h2>
   <p class="single-info">By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo the_author(); ?></a> / <?php the_time('d.m'); ?></p>
   <div class="single-image"><?php the_post_thumbnail('poster'); ?></div>
   <p class="single-content"><?php the_content(); ?></p>
   <div class="single-tags">
   <?php
   $posttags = get_the_tags();
   if ($posttags) {
     foreach($posttags as $tag) { ?>
       <a href="<?php echo get_tag_link($tag->term_id); ?>"><p><?php echo $tag->name . ' '; ?></p></a>
   <?php } } ?>
   </div>

 </div>

<?php endwhile;
else:
echo '<p>No content found</p>';

endif; ?>

</article>


</main>
<?php
get_footer(); ?>
