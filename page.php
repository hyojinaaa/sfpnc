<?php /* Template Name: About Us */ ?>

<?php

get_header(); ?>

<main id="about">
  <div class="hero" style="background-image:url(<?php header_image(); ?>)" height="auto" width="100%">

  	<div class="hero-text">

  	 <h1>Welcome to Society for Philosophy and Culture</h1>
     <p>Formerly the Society for Global Philosophy, the Society for Philosophy & Culture is an organisation dedicated to promoting interest in philosophy and other related disciplines. We also try to encourage cross-cultural and cross-disciplinary debate and discussion. We have branches at Victoria University of Wellington, New Zealand, and McMaster University, Canada.<br><br>We hold regulars seminars, talks, and other events. Information about previous events, including recordings of talks, can be found <a href="http://localhost:8888/sfpnc/seminars/">here</a>.</p>
  	</div>
  </div>
  <div class="mail-con">
    <div class="mail">
        <p>We welcome new members to the Society. Anyone is eligible to join. Please go here to join up to the Victoria University mailing list, and here to join the McMaster University mailing list.</p>
        <?php //ÍmailchimpSF_signup_form(); ?>

        <h2 class="contact">Contact Us - Victoria University | NZ</h2>
        <?php echo do_shortcode('[contact-form-7 id="84" title="Contact form 1"]'); ?>

        <h2 class="contact">Contact Us - McMaster University | Canada</h2>
        <?php echo do_shortcode('[contact-form-7 id="115" title="Contact form 2"]'); ?>
    </div>

  </div>
</main>

<?get_footer();

?>
