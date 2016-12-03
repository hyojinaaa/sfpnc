<?php

get_header(); ?>

<main class="home">

<div class="hero" style="background-image:url(<?php header_image(); ?>)" height="auto" width="100%">

	<div class="hero-text">

	 <h1>Upcoming Seminars</h1>
	 <div id="custom-search-input">
							 <div class="input-group">
									 <input type="text" class="form-control input-lg" value="Search">
									 <span class="input-group-btn">
											 <button class="btn btn-info btn-lg" type="button">
													 <i class="glyphicon glyphicon-search"></i>
											 </button>
									 </span>
							 </div>
		 </div>
	</div>
</div>

</main>

<?php get_footer();

?>
