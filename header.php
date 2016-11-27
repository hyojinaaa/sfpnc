
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
      <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
          <div class='site-logo'>
              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
          </div>
      <?php else : ?>
          <hgroup>
              <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
              <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
          </hgroup>
      <?php endif; ?>

      <nav class="site-nav">
        <?php  wp_nav_menu(); ?>
      </nav>

      <div class="social-network">
        <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a>
      </div>

      <div class="links">
        <a href=""><p>Victoria University  |  NZ</p></a>
        <a href=""><p>McMaster University  |  Canada</p></a>
      </div>

      <hr>

      <div class="copyright links">
        <p>© All Contents are Copyrighted by <strong>Society for Philosophy & Culture <?php echo date('Y')  ?></strong></p>
      </div>

      <div class="developer-links links">
        <p>Logo designed <br>by <strong>Frances Denton</strong></p>
        <p>Website design and developed by <strong><a href="http://jinawebdev.com">Hyojin Jung</a></strong></p>
      </div>
    </header><!-- /site header -->
