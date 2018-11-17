<nav class="nav-users">
  <?php
  wp_nav_menu( array(
    'menu' => 'users-menu',
    'container' => 'ul',
    'menu_class' => 'nav-ul--users',
    'theme_location' => 'menu-2',

  ) );
  ?>
</nav>
<nav id="site-navigation" class="nav line main-navigation">
  <div class="nav-bar">
    <a href="<?php echo get_home_url(); ?>" class="nav-logo">
    </a>
    <div class="nav-icon" aria-controls="primary-menu" aria-label="Open the navigation drawer." role="button" aria-disabled="false" tabindex="0">
      <svg class="icon icon-nav" viewBox="0 0 24 18.000001">
        <g
           transform="translate(0,-1034.3622)"
           id="layer1">
          <path
             style="fill:#6c757d;fill-opacity:1;stroke:none;stroke-width:1.5;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
             d="M -7.3841859e-7,1041.8622 H 24 v 3 H -7.3841859e-7 Z"
             id="rect4136" />
          <path
             style="fill:#6c757d;fill-opacity:1;stroke:none;stroke-width:1.5;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
             d="M -7.3841859e-7,1034.3622 H 24 v 3 H -7.3841859e-7 Z"
             id="rect4136-3" />
          <path
             style="fill:#6c757d;fill-opacity:1;stroke:none;stroke-width:1.5;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
             d="M -7.3841859e-7,1049.3622 H 24 v 3 H -7.3841859e-7 Z"
             id="rect4136-6" />
        </g>
      </svg>
    </div>
    <div class="nav-logo--mobile">
      <p>
        <a href="<?php echo get_home_url(); ?>">
        Meeting House Nursery School
      </a>
      </p>
    </div>
  </div>
  <div class="nav-menu">
    <?php
    wp_nav_menu( array(
      'menu' => 'primary-menu',
      'container' => 'ul',
      'menu_class' => 'nav-ul',
      'theme_location' => 'menu-1',

    ) );
    ?>
  </div>
</nav>
