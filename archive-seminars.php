<?php

get_header();
?>
<?php

 ?>

<main class="seminars">
  <div class="results">


    <article class="result-sample">
      <header class="entry-header">
        <img src="http://placehold.it/300x400" alt="">
        <h1 class="entry-title">Search Seminars</h1>
      </header>
      <div class="entry-summary">
        Search seminars by the filter search on the sidebar.
      </div>
    </article>

      <div id="result-container">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

      </div>


  </div>

  <div class="widget">
  <?php echo do_shortcode( ' [ULWPQSF id=69 formtitle="0" divclass=my_own_class] ' );
  //get_sidebar(); ?>
  </div>

</main>

<?php
get_footer();

?>
