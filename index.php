<?php

get_header(); ?>

<main class="home">

<div class="hero" style="background-image:url(<?php header_image(); ?>)" height="auto" width="100%">

	<div class="hero-text">

	 <h1>Upcoming Seminars</h1>
	 <div class="main-search">
			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
			    <div>
			      <input type="text" value="Search" name="s" id="s" placeholder="<?php the_search_query(); ?>" />
			      <i class="fa fa-search" aria-hidden="true"></i>
			    </div>
			</form>
		 </div>
	</div>
</div>

</main>

<?php get_footer();

?>
