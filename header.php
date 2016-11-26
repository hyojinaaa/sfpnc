
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >



    <!-- site header -->
    <header class="site-header">
      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/../uploads/2016/11/logo-transparent.png" alt="Society of Philosophy and Culture logo"></a>

      <nav class="site-nav">
        <?php  wp_nav_menu(  ); ?>
      </nav>
    </header><!-- /site header -->
