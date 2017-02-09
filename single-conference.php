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
    <?php if ( has_post_thumbnail() ) { ?>
     <div class="single-image"><?php the_post_thumbnail('poster'); ?></div>
    <?php } ?>

    <div class="info <?php if ( has_post_thumbnail() == null ) { ?> no-image-info<?php } ?>">
    <?php if(get_field("date_and_time") ||  get_field("date")) { ?>
      <?php // get raw date
        $date_and_time = get_field('date_and_time');
            // make date object
        $date_and_time = new DateTime($date_and_time); ?>
       <p class="single-info"><strong>Date : </strong><?php if(isset($date_and_time)) { echo $date_and_time->format('d M G:ia'); } else { the_field("date"); } ?></p>
    <?php } ?>

    <?php if(get_field('venue')) { ?>
       <p class="single-info"><strong>Venue : </strong><?php the_field('venue'); ?></p>
    <?php } ?>

     </div>
   </div>

<div class="single-content"><?php the_content(); ?></div>

<?php if( get_field('main_speaker_name') ):
  $speakerSA = get_the_term_list( $post->ID, 'main_speaker_second_affiliation_');
  $speakerSA = strip_tags( $speakerSA );
  $speakerUni = get_the_term_list( $post->ID, 'main_speaker_uni');
  $speakerUni = strip_tags( $speakerUni );
  ?>
     <div class="conference">
       <h2 class="con-title"><?php the_field('talk_title'); ?></h2>
       <h3 class="con-subtitle"><?php the_field('talk_second_title'); ?></h3>
       <p class="con-time"><?php the_field('talk_time'); ?></p>
       <p class="con-speaker"><strong>Speakers : </strong>
         <a href="<?php echo the_field('main_speaker_personal_web_link'); ?>"><?php the_field('main_speaker_name'); ?></a>

          (<?php if(get_the_term_list( $post->ID, 'main_speaker_second_affiliation_')) {
            echo $speakerSA;
          }?><?php if( $speakerSA && get_field('main_speaker_department_/_school')){
            ?>, <?php } ?><a href="<?php echo the_field('main_speaker_d/s_web_link'); ?>">

              <?php the_field('main_speaker_department_/_school'); ?></a><?php
              if( $speakerSA || get_field('main_speaker_department_/_school') && $speakerUni ){

                ?>, <?php } echo $speakerUni; ?>
          )</p>
       <div class="content-with-video">
         <?php the_field('description_and_video'); ?>
       </div>
     </div>
<?php endif; ?>

<?php if( get_field('main_speaker_name2') ):
   $speakerSA2 = get_the_term_list( $post->ID, 'main_speaker_2_second_affiliation_');
   $speakerSA2 = strip_tags( $speakerSA2 );
   $speakerUni2 = get_the_term_list( $post->ID, 'main_speaker_2_uni');
   $speakerUni2 = strip_tags( $speakerUni2 );
  ?>
     <div class="conference">
       <h2 class="con-title"><?php the_field('talk_title2'); ?></h2>
       <h3 class="con-subtitle"><?php the_field('talk_second_title2'); ?></h3>
       <p class="con-time"><?php the_field('talk_time2'); ?></p>
       <p class="con-speaker"><strong>Speakers : </strong>
         <a href="<?php echo the_field('main_speaker_personal_web_link2'); ?>"><?php the_field('main_speaker_name2'); ?></a>

          (<?php if(get_the_term_list( $post->ID, 'main_speaker_2_second_affiliation_')) {
            echo $speakerSA2;
          }?><?php if( $speakerSA2 && get_field('main_speaker_department_/_school2')){
            ?>, <?php } ?><a href="<?php echo the_field('main_speaker_d/s_web_link2'); ?>">

              <?php the_field('main_speaker_department_/_school2'); ?></a><?php
              if( $speakerSA2 || get_field('main_speaker_department_/_school2') && $speakerUni2 ){

                ?>, <?php } echo $speakerUni2; ?>
                )</p>
       <div class="content-with-video">
         <?php the_field('description_and_video2'); ?>
       </div>
     </div>
<?php endif; ?>

<?php if( get_field('main_speaker_name2') ):
   $speakerSA3 = get_the_term_list( $post->ID, 'main_speaker_3_second_affiliation_');
   $speakerSA3 = strip_tags( $speakerSA3 );
   $speakerUni3 = get_the_term_list( $post->ID, 'main_speaker_3_uni');
   $speakerUni3 = strip_tags( $speakerUni3 );
  ?>
     <div class="conference">
       <h2 class="con-title"><?php the_field('talk_title3'); ?></h2>
       <h3 class="con-subtitle"><?php the_field('talk_second_title3'); ?></h3>
       <p class="con-time"><?php the_field('talk_time3'); ?></p>
       <p class="con-speaker"><strong>Speakers : </strong>
         <a href="<?php echo the_field('main_speaker_personal_web_link3'); ?>"><?php the_field('main_speaker_name3'); ?></a>

          (<?php if(get_the_term_list( $post->ID, 'main_speaker_3_second_affiliation_')) {
            echo $speakerSA3;
          }?><?php if( $speakerSA3 && get_field('main_speaker_department_/_school3')){
            ?>, <?php } ?><a href="<?php echo the_field('main_speaker_d/s_web_link3'); ?>">

              <?php the_field('main_speaker_department_/_school3'); ?></a><?php
              if( $speakerSA3 || get_field('main_speaker_department_/_school3') && $speakerUni3 ){

                ?>, <?php } echo $speakerUni3; ?>
                )</p>
       <div class="content-with-video">
         <?php the_field('description_and_video3'); ?>
       </div>
     </div>
<?php endif; ?>



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
