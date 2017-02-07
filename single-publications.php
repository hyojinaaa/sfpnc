<?php
get_header(); ?>

<?php if( have_posts() ) :
 while (have_posts()) : the_post();
?>
<main class="single">
<article class="blog-single single-column">
 <!-- post-thumbnail -->

 <div class="single-text">

   <h2 class="single-title"><?php the_title(); ?></h2>
   <div class="img-with-info">
    <?php if ( has_post_thumbnail() ) { ?>
     <div class="single-image"><?php the_post_thumbnail('poster'); ?></div>
    <?php } ?>
     <div class="info <?php if ( has_post_thumbnail() == null ) { ?> no-image-info<?php } ?>">

       <?php if (get_the_term_list( $post->ID, 'pub_author_name')) { ?>

       		<P class="single-info"><strong>Author: </strong><a href="<?php echo the_field('author_personal_web_link'); ?>"><?php echo get_the_term_list( $post->ID, 'pub_author_name'); ?></a>
             <?php if(get_the_term_list( $post->ID, 'pub_author_name2')) { ?>
               , <a href="<?php echo the_field('author_2_personal_web_link'); ?>"><?php echo get_the_term_list( $post->ID, 'pub_author_name2'); ?></a>

    <?php   }  } elseif (get_field('editor_name')) { ?>
           	<P class="single-info"><strong>Editor: </strong><a href="<?php echo the_field('editor_personal_web_link'); ?>"><?php the_field('editor_name'); ?></a>
               <?php if(get_field('editor_2_name')) {?>
                 , <a href="<?php echo the_field('editor_2_personal_web_link'); ?>"><?php the_field('editor_2_name');
           } }?></a>

      </p>

      <?php if(get_field('publication_year')) { ?>
       <p class="single-info">Pubulicated in <strong><?php the_field('publication_year'); ?></strong></p>
      <?php } ?>

      <br>

      <?php if(get_field('kindle_store_link')) { ?>
       <p class="single-info"><strong><a href="<?php echo the_field('kindle_store_link'); ?>">Kindle Store</a></strong></p>
      <?php } ?>

      <?php if(get_field('kobo_store_link')) { ?>
       <p class="single-info"><strong><a href="<?php echo the_field('kobo_store_link'); ?>">Kobo Store</a></strong></p>
      <?php } ?>

      <?php if(get_field('barnes_and_noble_link')) { ?>
       <p class="single-info"><strong><a href="<?php echo the_field('barnes_and_noble_link'); ?>">Barnes and Noble Store</a></strong></p>
      <?php } ?>

      <?php if(get_field('apple_store_link')) { ?>
       <p class="single-info"><strong><a href="<?php echo the_field('apple_store_link'); ?>">Apple Store</a></strong></p>
      <?php } ?>

     </div>

   </div>

   <?php if(get_field('blurb')): ?>
     <div class="blurb">
       <?php the_field('blurb'); ?>
     </div>
  <?php endif; ?>

   <div class="single-content"><?php the_content(); ?></div>


 </div>
 <div class="single-tags">
 <?php
 $posttags = get_the_tags();
 if ($posttags) {
   foreach($posttags as $tag) { ?>
     <a href="<?php echo get_tag_link($tag->term_id); ?>"><p>#<?php echo $tag->name . ' '; ?></p></a>
 <?php } } ?>
 </div>
  <?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?>
<?php endwhile;
else:
echo '<p>No content found</p>';

endif; ?>

</article>


</main>
<?php
get_footer(); ?>
