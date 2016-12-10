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

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>

  <div class="widget">
  <?php echo do_shortcode( ' [ULWPQSF id=69] ' );
  //get_sidebar(); ?>
  </div>
</main>
<script type="text/javascript">
var allArticles = document.querySelectorAll('#result-container article');
var container = document.querySelector('#result-container');

console.log(container);
console.log(allArticles);

</script>
<?php
get_footer();

?>
