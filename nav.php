<div class="nav-bar">
  <button class="btn nav-bar--icon" aria-controls="primary-menu" aria-label="Open the navigation drawer." aria-expanded="false">
  </button>
</div>
<nav id="site-navigation" class="nav main-navigation">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="nav-logo">
    <img src="<?php echo get_theme_file_uri( 'img/mhns.svg' ); ?>" alt="MHNS Logo">
  </a>
  <?php
  wp_nav_menu( array(
    'menu' => 'primary-menu',
    'container' => 'ul',
    'menu_class' => 'nav-ul',
    'theme_location' => 'menu-1',

  ) );
  ?>
</nav>
