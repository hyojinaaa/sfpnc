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
   <div class="img-with-info">
     <div class="single-image"><?php the_post_thumbnail('poster'); ?></div>
     <div class="info">
       <p class="single-info"><strong>Speakers : </strong><a href="<?php echo the_field('main_speaker_personal_web_link'); ?>"><?php the_field('main_speaker_name'); ?></a>(<?php echo get_the_term_list( $post->ID, 'main_speaker_second_affiliation_'); ?>, <a href="<?php echo the_field('main_speker_d/s_web_link'); ?>"><?php the_field('main_speaker_department_/_school'); ?></a>, <?php echo get_the_term_list( $post->ID, 'main_speaker_uni'); ?>)</p>
       <?php if( get_field('respondent_1_name') ): ?>
        <p class="single-info"><strong>Respondent: </strong><a href="<?php echo the_field('respondent_1_personal_web_link'); ?>"><?php the_field('respondent_1_name'); ?></a>(<?php the_field('respondent_1_second_affiliation/title'); ?>, <a href="<?php echo the_field('respondent_1_d/s_web_link'); ?>"><?php the_field('respondent_1_department/school'); ?></a>,  <?php the_field('respondent_1_university'); ?>)<?php endif; ?>,<?php if( get_field('respondent_2_name') ): ?>
         <a href="<?php echo the_field('respondent_2_personal_web_link'); ?>"><?php the_field('respondent_2_name'); ?></a>(<?php the_field('respondent_2_second_affiliation/title'); ?>, <a href="<?php echo the_field('respondent_2_d/s_web_link'); ?>"><?php the_field('respondent_2_department/school'); ?></a>,  <?php the_field('respondent_2_university'); ?>)<?php endif; ?> </p>



       <p class="single-info"><strong>Date : </strong><?php the_field("date"); ?></p>
       <p class="single-info"><strong>Venue : </strong><?php the_field('venue'); ?></p>
       <p class="single-info"><strong>Series : </strong><?php echo get_the_term_list( $post->ID, 'series'); ?></p>
       <p class="single-info"><strong>Disciplines : </strong>	<?php

			$categories = get_the_category();
			$separator = ", ";
			$output = '';

			if ($categories) {

				foreach ($categories as $category) {

					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;

				}

				echo trim($output, $separator);

			}

			?>
			</p>
     </div>

   </div>
   <div class="single-content"><?php the_content(); ?></div>
   <div class="content-with-video">
     <?php the_field('video1'); ?>
   </div>
   <div class="content-with-video">
     <?php the_field('video2'); ?>
   </div>
   <div class="content-with-video">
     <?php the_field('video3'); ?>
   </div>
   <div class="content-with-video">
     <?php the_field('video4'); ?>
   </div>
   <div class="content-with-video">
     <?php the_field('video5'); ?>
   </div>
   <div class="content-with-video">
     <?php the_field('video6'); ?>
   </div>

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
