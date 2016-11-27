<?php

get_header();
?>


<main class="seminars">
  <div class="results">
    <h2>Search Results: </h2>
    <div class="search-result">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div id="widgetized-area">

	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widgetized-area')) : else : ?>

	<div class="pre-widget">
		<p><strong>Widgetized Area</strong></p>
		<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
	</div>

	<?php endif; ?>

</div>


</main>

<?php
get_footer();

?>
