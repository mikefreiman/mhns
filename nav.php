<nav id="site-navigation" class="nav main-navigation">
  <button class="btn nav__icon" aria-controls="primary-menu" aria-label="Open the navigation drawer." aria-expanded="false">
  </button>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="nav__logo">
    <img src="<?php echo get_theme_file_uri( 'img/mhns.svg' ); ?>" alt="MHNS Logo">
  </a>
  <div class="nav__bar">
    <a href="tel:1-608-233-9776" class="call__icon" aria-label="Call us at 608-233-9776."></a>
  </div>
  <?php
  wp_nav_menu( array(
    'menu' => 'primary-menu',
    'container' => 'ul',
    'menu_class' => 'nav__ul',
    'theme_location' => 'menu-1',

  ) );
  ?>
</nav>
