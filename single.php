<?php
get_header(); ?>

<?php if( have_posts() ) :
 while (have_posts()) : the_post();
?>
<main class="single">
<article class="blog-single <?php if( get_field('video1') == null && get_field('video2') == null && get_field('video3') == null && get_field('video4') == null && get_field('video5') == null){ ?>single-column<?php }?>">
 <!-- post-thumbnail -->

 <div class="single-text">

   <h2 class="single-title"><?php the_title(); ?></h2>
   <div class="img-with-info">
    <?php if ( has_post_thumbnail() ) { ?>
     <div class="single-image"><?php the_post_thumbnail('poster'); ?></div>
    <?php } ?>
     <div class="info <?php if ( has_post_thumbnail() == null ) { ?> no-image-info<?php } ?>">
       <p class="single-info"><strong>Speakers : </strong><a href="<?php echo the_field('main_speaker_personal_web_link'); ?>"><?php the_field('main_speaker_name'); ?></a> (<?php if(get_the_term_list( $post->ID, 'main_speaker_second_affiliation_')) { echo get_the_term_list( $post->ID, 'main_speaker_second_affiliation_'); }?><?php if(get_field('main_speaker_department_/_school')){ ?>, <a href="<?php echo the_field('main_speaker_d/s_web_link'); ?>"><?php the_field('main_speaker_department_/_school'); ?></a><?php } if(get_the_term_list( $post->ID, 'main_speaker_uni')){ ?>, <?php echo get_the_term_list( $post->ID, 'main_speaker_uni'); ?><?php } ?>)<?php if( get_field('main_speaker_2_name') ): ?>, <a href="<?php echo the_field('main_speaker_2_personal_web_link'); ?>"><?php the_field('main_speaker_2_name'); ?></a> (<?php if(get_the_term_list( $post->ID, 'main_speaker_2_second_affiliatio')) {
            echo get_the_term_list( $post->ID, 'main_speaker_2_second_affiliatio'); }?><?php if(get_field('main_speaker_2_department_/_school')){ ?>, <a href="<?php echo the_field('main_speaker_2_d/s_web_link'); ?>"><?php the_field('main_speaker_2_department_/_school'); ?></a><?php } ?><?php if(get_the_term_list( $post->ID, 'main_speaker_2_uni')){ ?>, <?php echo get_the_term_list( $post->ID, 'main_speaker_2_uni'); ?><?php } ?>)<?php endif; ?>

      <?php if( get_field('main_speaker_3_name') ): ?>

        , <a href="<?php echo the_field('main_speaker_3_personal_web_link'); ?>"><?php the_field('main_speaker_3_name'); ?></a> (

          <?php if(get_the_term_list( $post->ID, 'main_speaker_3_second_affiliatio')) {
            echo get_the_term_list( $post->ID, 'main_speaker_3_second_affiliatio');
          }?>

            <?php if(get_field('main_speaker_3_department_/_school')){
              ?>, <a href="<?php echo the_field('main_speaker_3_d/s_web_link'); ?>"><?php the_field('main_speaker_3_department_/_school'); ?></a>
            <?php } ?>

         <?php if(get_the_term_list( $post->ID, 'main_speaker_3_uni')){ ?>
           , <?php echo get_the_term_list( $post->ID, 'main_speaker_3_uni'); ?>
         <?php } ?>)

      <?php endif; ?>

      <?php if( get_field('main_speaker_4_name') ): ?>

        , <a href="<?php echo the_field('main_speaker_4_personal_web_link'); ?>"><?php the_field('main_speaker_4_name'); ?></a> (

          <?php if(get_the_term_list( $post->ID, 'main_speaker_4_second_affiliatio')) {
            echo get_the_term_list( $post->ID, 'main_speaker_4_second_affiliatio');
          }?>

            <?php if(get_field('main_speaker_4_department_/_school')){
              ?>, <a href="<?php echo the_field('main_speaker_4_d/s_web_link'); ?>"><?php the_field('main_speaker_4_department_/_school'); ?></a>
            <?php } ?>

         <?php if(get_the_term_list( $post->ID, 'main_speaker_4_uni')){ ?>
           , <?php echo get_the_term_list( $post->ID, 'main_speaker_4_uni'); ?>
         <?php } ?>)

      <?php endif; ?>

      <?php if( get_field('main_speaker_5_name') ): ?>

        , <a href="<?php echo the_field('main_speaker_5_personal_web_link'); ?>"><?php the_field('main_speaker_5_name'); ?></a> (

          <?php if(get_the_term_list( $post->ID, 'main_speaker_5_second_affiliatio')) {
            echo get_the_term_list( $post->ID, 'main_speaker_5_second_affiliatio');
          }?>

            <?php if(get_field('main_speaker_5_department_/_school')){
              ?>, <a href="<?php echo the_field('main_speaker_5_d/s_web_link'); ?>"><?php the_field('main_speaker_5_department_/_school'); ?></a>
            <?php } ?>

         <?php if(get_the_term_list( $post->ID, 'main_speaker_5_uni')){ ?>
           , <?php echo get_the_term_list( $post->ID, 'main_speaker_5_uni'); ?>
         <?php } ?>)

      <?php endif; ?>

      <?php if( get_field('main_speaker_6_name') ): ?>

        , <a href="<?php echo the_field('main_speaker_6_personal_web_link'); ?>"><?php the_field('main_speaker_6_name'); ?></a> (

          <?php if(get_the_term_list( $post->ID, 'main_speaker_6_second_affiliatio')) {
            echo get_the_term_list( $post->ID, 'main_speaker_6_second_affiliatio');
          }?>

            <?php if(get_field('main_speaker_6_department_/_school')){
              ?>, <a href="<?php echo the_field('main_speaker_6_d/s_web_link'); ?>"><?php the_field('main_speaker_6_department_/_school'); ?></a>
            <?php } ?>

         <?php if(get_the_term_list( $post->ID, 'main_speaker_6_uni')){ ?>
           , <?php echo get_the_term_list( $post->ID, 'main_speaker_6_uni'); ?>
         <?php } ?>)

      <?php endif; ?>
      </p>

<!-- Respondent 1 start -->
<?php if( get_field('respondent_1_name') ): ?>
  <p class="single-info"><strong>Respondent: </strong>

    <a href="<?php echo the_field('respondent_1_personal_web_link'); ?>"><?php the_field('respondent_1_name'); ?></a>

      <?php if(get_field('respondent_1_second_affiliation/title') || get_field('respondent_1_department/school') || get_field('respondent_1_university')): ?>

        (<?php the_field('respondent_1_second_affiliation/title'); ?>

      <?php endif; ?>

      <?php if( get_field('respondent_1_department/school') ||  get_field('respondent_1_university')): ?>
        <?php if( get_field('respondent_1_second_affiliation/title') ): ?>
          , <?php endif; ?><a href="<?php echo the_field('respondent_1_d/s_web_link'); ?>"><?php the_field('respondent_1_department/school'); ?></a>
      <?php endif; ?>

      <?php if(get_field('respondent_1_university')): ?>
        <?php if( get_field('respondent_1_second_affiliation/title') || get_field('respondent_1_department/school')): ?>
        , <?php endif; ?><?php the_field('respondent_1_university'); ?>
      <?php endif; ?>
  )</p>
<?php endif; ?>

<!-- Respondent 2 start -->
<?php if( get_field('respondent_2_name') ): ?>
  <p class="single-info"><strong>Respondent: </strong>

    <a href="<?php echo the_field('respondent_2_personal_web_link'); ?>"><?php the_field('respondent_2_name'); ?></a>

      <?php if(get_field('respondent_2_second_affiliation/title') || get_field('respondent_2_department/school') || get_field('respondent_2_university')): ?>

        (<?php the_field('respondent_2_second_affiliation/title'); ?>

      <?php endif; ?>

      <?php if( get_field('respondent_2_department/school') ||  get_field('respondent_2_university')): ?>
        <?php if( get_field('respondent_2_second_affiliation/title') ): ?>
          , <?php endif; ?><a href="<?php echo the_field('respondent_2_d/s_web_link'); ?>"><?php the_field('respondent_2_department/school'); ?></a>
      <?php endif; ?>

      <?php if(get_field('respondent_2_university')): ?>
        <?php if( get_field('respondent_2_second_affiliation/title') || get_field('respondent_2_department/school')): ?>
        , <?php endif; ?><?php the_field('respondent_2_university'); ?>
      <?php endif; ?>
  )</p>
<?php endif; ?>

<!-- Respondent 1 start -->
<?php if( get_field('respondent_3_name') ): ?>
  <p class="single-info"><strong>Respondent: </strong>

    <a href="<?php echo the_field('respondent_3_personal_web_link'); ?>"><?php the_field('respondent_3_name'); ?></a>

      <?php if(get_field('respondent_3_second_affiliation/title') || get_field('respondent_3_department/school') || get_field('respondent_3_university')): ?>

        (<?php the_field('respondent_3_second_affiliation/title'); ?>

      <?php endif; ?>

      <?php if( get_field('respondent_3_department/school') ||  get_field('respondent_3_university')): ?>
        <?php if( get_field('respondent_3_second_affiliation/title') ): ?>
          , <?php endif; ?><a href="<?php echo the_field('respondent_3_d/s_web_link'); ?>"><?php the_field('respondent_3_department/school'); ?></a>
      <?php endif; ?>

      <?php if(get_field('respondent_3_university')): ?>
        <?php if( get_field('respondent_3_second_affiliation/title') || get_field('respondent_3_department/school')): ?>
        , <?php endif; ?><?php the_field('respondent_3_university'); ?>
      <?php endif; ?>
  )</p>
<?php endif; ?>




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
